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
function csv_to_array($filename='', $delimiter=',')
{
    if(!file_exists($filename) || !is_readable($filename))
        return FALSE;

    $header = NULL;
    $data = array();
    if (($handle = fopen($filename, 'r')) !== FALSE)
    {
        while (($row = fgetcsv($handle, 1000, $delimiter)) !== FALSE)
        {
            if(!$header)
                $header = $row;
            else
                $data[] = array_combine($header, $row);
        }
        fclose($handle);
    }
    return $data;
}

    //$json = json_encode(csv_to_array('actual.csv'));
    //echo $json;
//
