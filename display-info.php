<?php

require "vendor/autoload.php";
use Fpdf\Fpdf;

$pdf = new Fpdf('P','mm', 'Letter');
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(80,10,'Name: Micoh Jomarie A. Yabut', 0,2);
$pdf->Cell(40,10,'Program: BSIT', 0,2);
$pdf->Cell(40,10,'Address: Angeles City', 0,2);
$pdf->Cell(40,10,'Student Address: 14-0072-264',0 ,2);
$pdf->Output();