<?php

/**
 * Created by PhpStorm.
 * User: Jakob
 * Date: 10/29/2015
 * Time: 5:48 PM
 */

include 'C:/xampp/htdocs/Software_Methodologies_Project/htdocs/templates/parse_csv.php';

class IndexTests extends PHPUnit_Framework_TestCase
{
    /**
     */

    public function test_csv_to_array_false() {
        $filename = ' ';
        $result = csv_to_array($filename);
        $this->assertEquals($result[0], null);
    }

    public function test_csv_get_load(){
        $filename = 'C:/xampp/htdocs/Software_Methodologies_Project/htdocs/tests/test_file_data.csv';
        $load = array(
            0 => 1,
            1 => 2,
            2 => 3);

        $result = csv_get_load($filename);
        $this->assertEquals($load[0], $result[0]);
        $this->assertEquals($load[1], $result[1]);
        $this->assertEquals($load[2], $result[2]);
    }

    public function test_csv_get_load_false(){
        $result = csv_get_load('C:/xampp/file_does_not_exist.csv');
        $this->assertEquals($result[0], null);
    }

    public function test_csv_get_date(){
        $filename = 'C:/xampp/htdocs/Software_Methodologies_Project/htdocs/tests/test_file_data.csv';
        $date = array(
            0 => '1/2/2015',
            1 => '1/3/2015',
            2 => '1/4/2015'
        );
        $result = csv_get_date($filename);
        $this->assertEquals($date[0], $result[0]);
        $this->assertEquals($date[1], $result[1]);
        $this->assertEquals($date[2], $result[2]);
    }

    public function test_csv_get_date_false(){
        $result = csv_get_date('C:/xampp/file_does_not_exist.csv');
        $this->assertEquals($result[0], null);
    }

    public function test_csv_get_time(){
        $filename = 'C:/xampp/htdocs/Software_Methodologies_Project/htdocs/tests/test_file_data.csv';
        $time = array(
            0 => '12:00',
            1 => '1:00',
            2 => '2:00'
        );
        $result = csv_get_time($filename);
        $this->assertEquals($time[0], $result[0]);
        $this->assertEquals($time[1], $result[1]);
        $this->assertEquals($time[2], $result[2]);
    }

    public function test_csv_get_time_false(){
        $result = csv_get_time('C:/xampp/file_does_not_exist.csv');
        $this->assertEquals($result[0], null);
    }

    public function test_csv_get_temp() {
        $filename = 'C:/xampp/htdocs/Software_Methodologies_Project/htdocs/tests/test_file_data.csv';
        $temp = array(
            0 => 4,
            1 => 5,
            2 => 6
        );
        $result = csv_get_temp($filename);
        $this->assertEquals($temp[0], $result[0]);
        $this->assertEquals($temp[1], $result[1]);
        $this->assertEquals($temp[2], $result[2]);
    }

    public function test_csv_get_temp_false(){
        $result = csv_get_temp('C:/xampp/file_does_not_exist.csv');
        $this->assertEquals($result[0], null);
    }

    public function test_csv_get_wind_speed() {
        $filename = 'C:/xampp/htdocs/Software_Methodologies_Project/htdocs/tests/test_file_data.csv';
        $wind_speed = array(
            0 => 7,
            1 => 8,
            2 => 9
        );
        $result = csv_get_wind($filename);
        $this->assertEquals($wind_speed[0], $result[0]);
        $this->assertEquals($wind_speed[1], $result[1]);
        $this->assertEquals($wind_speed[2], $result[2]);
    }

    public function test_csv_get_wind_speed_false(){
        $result = csv_get_wind('C:/xampp/file_does_not_exist.csv');
        $this->assertEquals($result[0], null);
    }

    public function test_calculate_mape() {
        $this->assertEquals(calculate_mape('C:/xampp/htdocs/Software_Methodologies_Project/htdocs/templates/actual.csv',
            'C:/xampp/htdocs/Software_Methodologies_Project/htdocs/templates/forecast.csv'),
            40.320369641366);
    }
}
