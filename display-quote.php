<?php
require "vendor/autoload.php";
use Fpdf\Fpdf;

$pdf = new Fpdf('P','mm', 'Letter');

$pdf->AddFont('DancingScript','','DancingScript-VariableFont_wght.php');
$pdf->AddFont('KolkerBrush','','KolkerBrush-Regular.php');
$pdf->AddFont('Lobster','','Lobster-Regular.php');
$pdf->AddFont('Oswald','','Oswald-VariableFont_wght.php');
$pdf->AddFont('RubikBubbles','','RubikBubbles-Regular.php');

$pdf->AddPage();

$pdf->SetFont('DancingScript','',18);
$pdf->MultiCell(0,5,'The powerful have always preyed on the powerless. That’s how they became powerful in the first place.');
$pdf->Ln(10);
$pdf->Cell(0,5,'-Tyrion Lannister (Game of Thrones)', 0,2,'R');
$pdf->Ln(20);

$pdf->SetFont('KolkerBrush','',25);
$pdf->MultiCell(0,5,'Chaos isn’t a pit. Chaos is a ladder. Many who try to climb it fail, and never get to try again.');
$pdf->Ln(10);
$pdf->Cell(0,5,'-Petyr Baelish (Game of Thrones)', 0,2,'R');
$pdf->Ln(20);

$pdf->SetFont('Lobster','',18);
$pdf->MultiCell(0,5,'Power resides where men believe it resides. It’s a trick. A shadow on the wall. And a very small man can cast a very large shadow.');
$pdf->Ln(10);
$pdf->Cell(0,5,'-Lord Varys (Game of Thrones)', 0,2,'R');
$pdf->Ln(20);

$pdf->SetFont('Oswald','',18);
$pdf->MultiCell(0,5,'Leave one wolf alive and the sheep are never safe.');
$pdf->Ln(10);
$pdf->Cell(0,5,'-Arya Stark (Game of Thrones)', 0,2,'R');
$pdf->Ln(20);

$pdf->SetFont('RubikBubbles','',18);
$pdf->MultiCell(0,5,'Never forget what you are. The rest of the world will not. Wear it like armor, and it can never be used to hurt you.');
$pdf->Ln(10);
$pdf->Cell(0,5,'-Tyrion Lannister (Game of Thrones)', 0,2,'R');
$pdf->Ln(20);
$pdf->Output();