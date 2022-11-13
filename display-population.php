<?php

require "vendor/autoload.php";
use Fpdf\Fpdf;

$csv_file = 'population.csv';
$handle = fopen($csv_file, 'r');
$row_index = 1; // initialize
$headers = [];
$data = [];

while (($row_data = fgetcsv($handle, 1000, ',')) !== FALSE)
{
	if ($row_index++ < 2)
	{
		foreach ($row_data as $col)
		{
			array_push($headers, $col);
		}
		continue;
	}
    
	$tmp = [];
    //var_dump($row_data[$index]);
	for ($index = 0; $index < count($headers); $index++)
	{
		$tmp[$headers[$index]] = $row_data[$index];
	}
	array_push($data, $tmp);
}
// var_dump($headers);
// print_r('<br>');
// print_r('<br>');
// var_dump($data);
fclose($handle);

class pdf extends Fpdf
{
// Simple table
function BasicTable($header, $data)
{
    // Header
    foreach($header as $col)
        $this->Cell(60,5,$col,1,0,'C');
        $this->Ln();
    // Data
    foreach($data as $row)
    {
        foreach($row as $col)
            $this->Cell(60,5,$col,1,0,'C');
            $this->Ln();
            
    }
}
}

$pdf = new pdf();
//$header = array('ID', 'Country', 'Population (2020)');
//$header = $pdf->LoadHeader('population.csv');
$header = $headers;
$table_data = $data;
$pdf->SetFont('Arial','',14);
$pdf->AddPage();
$pdf->BasicTable($header,$data);
$pdf->Output();

