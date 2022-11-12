<?php

require "vendor/autoload.php";
use Fpdf\Fpdf;

$csv_file = 'population.csv';
$handle = fopen($csv_file, 'r');
$row_index = 0; // initialize
$headers = [];
$data = [];

while (($row_data = fgetcsv($handle, 1000, ',')) !== FALSE)
{
	if ($row_index++ < 1)
	{
		foreach ($row_data as $col)
		{
            //var_dump($col);
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

    //var_dump($data, $tmp);
    //var_dump($data);
}
// var_dump($headers);
// print_r('<br>');
// print_r('<br>');
// var_dump($data);
fclose($handle);

class pdf extends Fpdf
{
function LoadData($csv_file)
{
    // Read file lines
    $lines = file($csv_file);
    $data = array();
    foreach($lines as $line)
        $data[] = explode(',',trim($line));
    return $data;
}

// Simple table
function BasicTable($headers, $data)
{
    // Header
    foreach($headers as $col)
        $this->Cell(60,5,$col,1);
        $this->Ln();
    // Data
    foreach($data as $row)
    {
        foreach($row as $col)
            $this->Cell(60,5,$col,1);
            $this->Ln();
            
    }
}
}

$pdf = new pdf();
$headers = array('ID', 'Country', 'Population (2020)');
$data = $pdf->LoadData('population.csv');
$pdf->SetFont('Arial','',14);
$pdf->AddPage();
$pdf->BasicTable($headers,$data);
$pdf->Output();

