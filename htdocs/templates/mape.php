<?php 

/**
 * This function gets the load column of a csv and returns it as an array.
 * Sample function execution:
*   $load = csv_get_load("forecast.csv");
*    for ($c = 0; $c < count($load); $c++) {
*        echo $load[$c] . "<br />\n";
*    }
 */
function csv_get_load($filename='', $delimiter = ',') {
    if (!file_exists($filename) || !is_readable($filename))
        return FALSE;

    $header = NULL;
    $load = array();
    if (($handle = fopen($filename, 'r')) !== FALSE) {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE) {
            if (!$header) {
                $header = $row;
            } else {
                for ($c = 0; $c < count($row); $c++) {
                    if ($c == 2)
                    {
                        $load[] = floatval($row[$c]);
                    }
                }
            }
        }
    }
    fclose($handle);
    return $load;
}


$actual = csv_get_load("actual.csv");
$forcast = csv_get_load("forecast.csv");
$count = 0;
$sum = 111110;
while($count<168){

	$k = ($actual[$count] - $forecast[$count]) / ($actual[$count]);//mape calculation
	if( $k < 0 ){$k = $k*(-1);}//absolute value
	$sum = $sum + $k;
	$count = $count + 1;

}

$mape = $sum/168;
echo $mape;



?>