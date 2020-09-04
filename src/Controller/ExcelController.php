<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Excel;
use App\Form\ExcelType;
use Symfony\Component\HttpFoundation\Request;


class ExcelController extends AbstractController
{
    /**
     * @Route("/admin/excel", name="excel")
     */
    public function excel(Request $request)
    {
 	$excel = new Excel();

        $formulario = $this->createForm(ExcelType::class,$excel);
        $formulario->handleRequest($request);
        
        if ($formulario->isSubmitted() && $formulario->isValid()){

		$entityManager = $this->getDoctrine()->getManager();
	        $excel = $formulario->getData();

		$conexion = pg_connect("host=192.168.1.55 dbname=guarani3 user=postgres password=44kJy36HjX");
		$query= "SELECT * FROM vw_turnos_examen WHERE anio_academico = " . $excel->getAnio() . ";"; 
		$query .=" SELECT DISTINCT
		 m.llamado_mesa,
		 m.mesa_examen_fecha as fecha,
		 m.turno_examen_nombre,
		 m.llamado_nombre,
		 extract(day from m.mesa_examen_fecha) as dia_de_examen,
		 prop.codigo as codigo_carrera,
		 e.codigo as materia_codigo,
		 e.nombre_abreviado as materia_nombre_abreviado,
		 e.nombre as materia_nombre_largo,
		 p.nro_documento as nro_documento,
		 1 as tipo_inscripto
		FROM vw_mesas_examen as m
		JOIN sga_elementos as e ON e.elemento = m.mesa_examen_elemento
		JOIN sga_mesas_examen_propuestas as mp ON mp.mesa_examen = m.mesa_examen
		JOIN sga_propuestas as prop ON prop.propuesta = mp.propuesta
		JOIN sga_insc_examen as i ON i.llamado_mesa = m.llamado_mesa
		JOIN sga_alumnos as a ON a.alumno = i.alumno
		JOIN vw_personas as p ON p.persona = a.persona
		WHERE m.turno_examen = " . $excel->getTurno() . "
		UNION ALL
		SELECT DISTINCT
		 m.llamado_mesa,
		 m.mesa_examen_fecha as fecha,
		 m.turno_examen_nombre,
		 m.llamado_nombre,
		 extract(day from m.mesa_examen_fecha) as dia_de_examen,
		 prop.codigo as codigo_carrera,
		 e.codigo as materia_codigo,
		 e.nombre_abreviado as materia_nombre_abreviado,
		 e.nombre as materia_nombre_largo,
		 p.nro_documento as nro_documento,
		 2 as tipo_inscripto
		FROM vw_mesas_examen as m
		JOIN sga_elementos as e ON e.elemento = m.mesa_examen_elemento
		JOIN sga_mesas_examen_propuestas as mp ON mp.mesa_examen = m.mesa_examen
		JOIN sga_propuestas as prop ON prop.propuesta = mp.propuesta
		JOIN sga_docentes_mesa_llamado as dll ON dll.llamado_mesa = m.llamado_mesa
		JOIN sga_docentes as d ON d.docente = dll.docente
		JOIN vw_personas as p ON p.persona = d.persona
		WHERE m.turno_examen = " . $excel->getTurno() ."
		ORDER BY fecha, llamado_mesa, tipo_inscripto, nro_documento";
		$resultado = pg_query($conexion, $query);
		$mesas = array();
		$this->addFlash('correcto',$query);
		$mesas = pg_fetch_all($resultado);
		
		if(!$mesas){
			$this->addFlash('error','Consulta erronea.');
			return $this->render('excel/index.html.twig', [
       			'formulario' => $formulario->createView()	  
			]);	

		}
	
		$csv_file = "phpzag_csv_export_".date('Ymd') . ".csv";

		header("Content-Type: csv");
		header("Content-Disposition: attachment; filename=$csv_file");
		$fh = fopen( 'php://output', 'w' );
		$is_coloumn = true;
		if(!empty($mesas)) {
		foreach($mesas as $mesa) {
		if($is_coloumn) {
		fputcsv($fh, array_keys($mesa));
		$is_coloumn = false;
		}
		fputcsv($fh, array_values($mesa));
		}
		fclose($fh);
		}
		//Separado
		return $this->render('excel/excel.html.twig', [
        	    'mesas' => $mesas,'resultado' => 'Joya'
	        ]);
	}
	return $this->render('excel/index.html.twig', [
       		'formulario' => $formulario->createView()	  
	]);
    }	

}
