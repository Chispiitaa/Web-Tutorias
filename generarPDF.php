<?php 
    require('recursos/fpdf186/fpdf.php');
    require 'php/conexion.php';

    class PDF extends FPDF {
        function header() {
            $this->Image('recursos/logotipo_ipn.png', 15, 10, 20);
            $this->Image('recursos/escudoESCOM.png', 177, 10, 20);
            $this->Ln(7);
        
            $this->SetFont('courier', 'I', 16 );
            $this->Cell(0, 10, utf8_decode('Programa Institucional de Tutorías'), 0, 0, 'C');
            $this->Ln(40);
        }

        function footer() {
            $this->SetY(-15); 
            $this->SetFont('Arial', 'I', 15);
            $this->Cell(0, 10, utf8_decode('IPN-ESCOM')  , 0, 0, 'C');
        }
    }
    
    session_start();
    if (isset($_SESSION['email'])) {
        $email = $_SESSION['email'];
    } else {
        //exit("Usuario no logueado");
    }

    $consulta = "SELECT r.nombre, r.apePa, r.apeMa, r.boleta, r.telefono, r.semestre, r.carrera, r.tipo_tutoria,
                        t.nombre, t.apellido
                    FROM registro r JOIN tutores t ON 
                    r.id_tutor = t.id AND r.email = '$email'";
    $resultado = mysqli_query($conn, $consulta);
    $alumno = mysqli_fetch_array($resultado);

    if($alumno) {
        $nombre = "Nombre: $alumno[2] $alumno[1] $alumno[0]";
        $boleta = "Boleta: $alumno[3]";
        $telefono = "Teléfono del alumno: $alumno[4]";
        $semestre = "Semestre actual: $alumno[5]° ";
        $carrera = "Carrera: $alumno[6]";
        $tutor = "Tutor@: $alumno[8] $alumno[9]";
        $tipoTutoria = "Tutoría: $alumno[7]";

        // Creación del objeto de la clase heredada
        $pdf = new PDF('P', 'mm', 'Letter');
        $pdf->AliasNbPages();
        $pdf->AddPage();
        $pdf->SetFont('courier', 'B', 14);
        $pdf->Cell(0, 10, utf8_decode($nombre), 0, 1, 'C'); 
        $pdf->Cell(0, 10, utf8_decode($boleta), 0, 1, 'C');
        $pdf->Cell(0, 10, utf8_decode($telefono), 0, 1, 'C');
        $pdf->Cell(0, 10, utf8_decode($semestre), 0, 1, 'C');
        $pdf->Cell(0, 10, utf8_decode($carrera), 0, 1, 'C');
        $pdf->SetFillColor(255, 255, 0);
        $pdf->Cell(0, 10, utf8_decode($tutor), 0, 1, 'C', true);
        $pdf->SetFillColor(255, 255, 255);
        $pdf->Cell(0, 10, utf8_decode($tipoTutoria), 0, 1, 'C');
        $pdf->Output();
    } else {
        exit("No se encontraron datos para el usuario actual");
    }

?>