<?php
// Incluir el archivo de autoloading de Composer
require 'vendor/autoload.php';

// Crear una instancia de TCPDF
$pdf = new TCPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', 'B', 14);
$pdf->Cell(40, 10, '¡Hola, TCPDF!');

// Salida del PDF al navegador
$pdf->Output('example.pdf', 'I');
