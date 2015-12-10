<?php
/**
 * Created by PhpStorm.
 * User: Chris Procak
 * Date: 10/25/2015
 * Time: 9:58 PM
 */

/**
* @param string $filename Path to the CSV file
* @param string $delimiter The separator used in the file
* @return array
 * @link http://gist.github.com/385876
 * @author Jay Williams <http://myd3.com/>
 * @copyright Copyright (c) 2010, Jay Williams
* @license http://www.opensource.org/licenses/mit-license.php MIT License
 */
function csv_to_array($filename='', $delimiter = ',') {
      if (!file_exists($filename) || !is_readable($filename))
          return FALSE;

      $header = NULL;
      if (($handle = fopen($filename, 'r')) !== FALSE) {
          while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE) {
              if (!$header) {
                  $header = $row;
                  for ($c = 0; $c < count($header); $c++)
                      echo $header[$c] . "&nbsp" . "&nbsp";
                  echo "<br />\n";
              } else {
                  for ($c = 0; $c < count($row); $c++) {
                      echo $row[$c] . "&nbsp" . "&nbsp";
                  }
              }
              echo "<br />\n";
              //print_r(array_combine($header, $row));
          }
      }
      fclose($handle);
    }

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


function csv_get_date($filename='', $delimiter = ',') {
    if (!file_exists($filename) || !is_readable($filename))
        return FALSE;

    $header = NULL;
    $date = array();
    if (($handle = fopen($filename, 'r')) !== FALSE) {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE) {
            if (!$header) {
                $header = $row;
            } else {
                for ($c = 0; $c < count($row); $c++) {
                    if ($c == 0)
                    {
                        $date[] = $row[$c];
                    }
                }
            }
        }
    }
    fclose($handle);
    return $date;
}


function csv_get_time($filename='', $delimiter = ',') {
    if (!file_exists($filename) || !is_readable($filename))
        return FALSE;

    $header = NULL;
    $time = array();
    if (($handle = fopen($filename, 'r')) !== FALSE) {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE) {
            if (!$header) {
                $header = $row;
            } else {
                for ($c = 0; $c < count($row); $c++) {
                    if ($c == 1)
                    {
                        $time[] = $row[$c];
                    }
                }
            }
        }
    }
    fclose($handle);
    return $time;
}


function csv_get_temp($filename='', $delimiter = ',') {
    if (!file_exists($filename) || !is_readable($filename))
        return FALSE;

    $header = NULL;
    $temp = array();
    if (($handle = fopen($filename, 'r')) !== FALSE) {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE) {
            if (!$header) {
                $header = $row;
            } else {
                for ($c = 0; $c < count($row); $c++) {
                    if ($c == 3)
                    {
                        $temp[] = floatval($row[$c]);
                    }
                }
            }
        }
    }
    fclose($handle);
    return $temp;
}


function csv_get_wind($filename='', $delimiter = ',') {
    if (!file_exists($filename) || !is_readable($filename))
        return FALSE;

    $header = NULL;
    $wind = array();
    if (($handle = fopen($filename, 'r')) !== FALSE) {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE) {
            if (!$header) {
                $header = $row;
            } else {
                for ($c = 0; $c < count($row); $c++) {
                    if ($c == 4)
                    {
                        $wind[] = floatval($row[$c]);
                    }
                }
            }
        }
    }
    fclose($handle);
    return $wind;
}

function calculate_mape($actual_path, $forecast_path) {
    $actual = csv_get_load($actual_path);
    $forecast = csv_get_load($forecast_path);
    $count = 0;
    $sum = 0;
    while($count<168){

        $k = ($actual[$count] - $forecast[$count]) / ($actual[$count]);//mape calculation
        if( $k < 0 ){$k = $k*(-1);}//absolute value
        $sum = $sum + $k;
        $count = $count + 1;

    }

    $mape = ($sum/168) * 100;
    return $mape;
}