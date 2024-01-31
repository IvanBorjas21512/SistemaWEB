<?php
require 'tcpdf/tcpdf.php';

// Obtener la tabla HTML desde la solicitud POST
$tabla_html = $_POST['tabla_html'];

// Crear una instancia de TCPDF
$pdf = new TCPDF();
$pdf->SetAutoPageBreak(true, 10);

// Agregar una página al PDF
$pdf->AddPage();

// Configurar el formato del PDF
$pdf->writeHTML($tabla_html, true, false, true, false, '');

// Generar el PDF y enviarlo al navegador
$pdf->Output('tabla_pdf.pdf', 'I');
?>
