<?php
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
	for ($index = 1; $index < count($headers); $index++)
	{
		$tmp[$headers[$index]] = $row_data[$index];
	}
	array_push($data, $tmp);
}
//var_dump ($headers);
var_dump ($data);
fclose($handle);