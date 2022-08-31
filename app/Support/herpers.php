<?php

use Jenssegers\Date\Date;
use Carbon\Carbon;

if (!function_exists('arrMonths')) {
    // Is arrMonths function
    function arrMonths()
    {
        $data = array();
        for ($i = 0; $i <= 11; $i++) {
            $month = Carbon::today()->subMonth($i);
            // $data[$month->month] = $month->shortMonthName;
            $data[$month->month] = $month->monthName;
        }
        return $data;
    }
}

if (!function_exists('validate_email')) {
    // Is Timestamp control function
    function validate_email($mail)
    {
        $user   = '[a-zA-Z0-9_\-\.\+\^!#\$%&*+\/\=\?\`\|\{\}~\']+';
        $domain = '(?:(?:[a-zA-Z0-9]|[a-zA-Z0-9][a-zA-Z0-9\-]*[a-zA-Z0-9])\.?)+';
        $ipv4   = '[0-9]{1,3}(\.[0-9]{1,3}){3}';
        $ipv6   = '[0-9a-fA-F]{1,4}(\:[0-9a-fA-F]{1,4}){7}';
        return preg_match("/^$user@($domain|(\[($ipv4|$ipv6)\]))$/", $mail);
    }
}

if (!function_exists('isTimestamp')) {
    // Is Timestamp control function
    function isTimestamp($x,$lenMax = 11,$compare = 30){
        if (!ctype_digit($x)) return false;
        $x = strlen($x) >= $lenMax ? $x / 1000 : $x;
        if ($x < strtotime("-{$compare} years") || $x > strtotime("+{$compare} years")) {
            return false;
        }
        return true;
    }
}

if (!function_exists('date_range')) {
    function date_range($first, $last, $step = '+1 day', $output_format = 'Y-m-d' ) {
        $dates = array();
        $current = strtotime($first);
        $last = strtotime($last);
        while( $current <= $last ) {
            // $dates[] = date($output_format, $current);
            $date = date($output_format, $current);
            // $dates[] = new DateTime($date);
            $dates[] = new Date($current);
            // $dates[] = $current;
            $current = strtotime($step, $current);
        }
        return (object) $dates;
    }
}

if (!function_exists('getRound')) {
    function get_round_number ($valor)
    {
        if ($valor > 0.9) return 2;
        if ($valor > 0.09) return 2;
        if ($valor > 0.009) return 3;
        if ($valor > 0.0009) return 4;
        if ($valor > 0.00009) return 5;
        if ($valor > 0.000009) return 6;
        if ($valor > 0.0000009) return 7;
        if ($valor > 0.00000009) return 8;
        if ($valor > 0.000000009) return 10;
        if ($valor > 0.0000000009) return 11;
        if ($valor > 0.00000000009) return 12;
    }
}

if (!function_exists('replace_tilde')) {
    function replace_tilde($string){
        $string = str_replace(
            array('ñ', 'Ñ', 'ç', 'Ç'),
            array('n', 'N', 'c', 'C',),
            $string
        );
        return $string;
    }
}

if (!function_exists('num_to_string')) {
    function num_to_string($number){
        $xarray = array("CERO","UNO","DOS","TRES","CUATRO","CINCO","SEIS","SIETE","OCHO","NUEVE","DIEZ","ONCE","DOCE","TRECE","CATORCE","QUINCE","DIECISEIS","DIECISIETE","DIECIOCHO","DIECINUEVE","VEINTE");
        // return ((max(min($number, 20), 0) == $number)) ? $xarray[$number] : null;
        return (!empty($number) && $number<=20) ? $xarray[$number] : null;
    }
}

if (!function_exists('add_yerar')) {
    function add_yerar($fecha,$year=1){ //mm-yyyy
        $fecha = substr($fecha,0,2).'-'.($year+substr($fecha,-4));
        return $fecha;
    }
}

if (!function_exists('c_porc')) {
    function c_porc($porc){
        $class = ($porc<16) ? 'red' : null ;
        $class = ($porc>=16 && $porc<36) ? 'pink' : $class ;
        $class = ($porc>=36 && $porc<52) ? 'orange' : $class ;
        $class = ($porc>=52 && $porc<68) ? 'yellow' : $class ;
        $class = ($porc>=68 && $porc<84) ? 'cyan' : $class ;
        $class = ($porc>=84 && $porc<100) ? 'teal' : $class ;
        $class = ($porc>=100) ? 'green' : $class ;
        return $class;
    }
}

if (!function_exists('readable_int')) { // readable_int(123456) outputs 123K+
    function readable_int( $n ) {
        if ($n >= 0 && $n < 1000) {
            // 1 - 999
            $n_format = floor($n);
            $suffix = '';
        } else if ($n >= 1000 && $n < 1000000) {
            // 1k-999k
            $n_format = floor($n / 1000);
            $suffix = 'K+';
        } else if ($n >= 1000000 && $n < 1000000000) {
            // 1m-999m
            $n_format = floor($n / 1000000);
            $suffix = 'M+';
        } else if ($n >= 1000000000 && $n < 1000000000000) {
            // 1b-999b
            $n_format = floor($n / 1000000000);
            $suffix = 'B+';
        } else if ($n >= 1000000000000) {
            // 1t+
            $n_format = floor($n / 1000000000000);
            $suffix = 'T+';
        }

        return !empty($n_format . $suffix) ? $n_format . $suffix : 0;
    }
}

if (!function_exists('f_float')) {
    function f_float($number,$decimal=2){
            //$decimal = get_round_number ($number);
        return (is_numeric($number)) ? number_format($number,$decimal,',','.'):$number;
    }
}

if (!function_exists('f_number')) {
    function f_number($number,$separate_decimal='.',$separate_mil=',',$decimal=2){
        // $decimal = get_round_number ($number);
        return (is_numeric($number)) ? number_format($number,$decimal,$separate_decimal,$separate_mil):$number;
    }
}

if (!function_exists('validateDate')) {
    function validateDate($date, $format = 'Y-m-d H:i:s') {
        $d = DateTime::createFromFormat($format, $date);
        return $d && $d->format($format) == $date;
    }
}

if (!function_exists('f_ci')) {
    function f_ci($number){
        return number_format($number,0,'','.');
    }
}

if (!function_exists('f_date')) {
    function f_date($date,$f='-'){
        if (validateDate($date,'Y-m-d')) {
            $d = new DateTime($date);
            $date = $d->format('d'.$f.'m'.$f.'Y');
        }
        return $date;
    }
}

if (!function_exists('zfill')) {
    function zfill ($valor, $long = 0)
    {
        return str_pad($valor, $long, '0', STR_PAD_LEFT);
    }
}

if (!function_exists('csv_to_array')) {

    function csv_to_array($filename='', $delimiter=',',$limiter=10000)
    {
        if(!file_exists($filename) || !is_readable($filename))
            return FALSE;

        $header = array();
        // $header = NULL;
        $data = array();
        $row = array();
        if (($handle = fopen($filename, 'r')) !== FALSE)
        {
            while (($row = fgetcsv($handle, $limiter, $delimiter)) !== FALSE)
            {
                if(!$header){
                // if(!empty($header)){
                    // dump($row);
                    $header = $row;
                }
                else{
                    // dump($row);
                    $data[] = array_combine($header, $row);
                }
            }
            fclose($handle);
        }
        return $data;
    }
}

if (!function_exists('sentence_case')) {

    function sentence_case($string) {
        $sentences = preg_split('/([-\/.]+)/', $string, -1, PREG_SPLIT_NO_EMPTY|PREG_SPLIT_DELIM_CAPTURE);
        $new_string = '';
        foreach ($sentences as $key => $sentence) {
            $new_string .= ($key & 1) == 0?
            ucfirst(strtolower(trim($sentence))) :
            // $sentence.' ';
            $sentence;
        }
        return trim($new_string);
    }

    //print sentence_case('HMM. WOW! WHAT?');

    // Outputs: "Hmm. Wow! What?"
}

if (!function_exists('fecha_to_date')) {
    function fecha_to_date($date,$separate='-'){
        $date = strtolower($date);

        $date = preg_replace("/[^a-z0-9\-\/]/", "",$date);
        // $date = preg_replace("/[^0-9]/", "",$date);
        $date = str_replace('/', $separate, $date);

        // $separate_arr = array("/", ".", "*", "+");
        // $date = str_replace($separate_arr, $separate, $date);
        // $date = str_replace(' ', '', $date);

        $mes_arr = array('ene','enero','feb','febrero','mar','marzo','abr','abril','may','mayo','jun','junio','jul','julio','ago','agosto','sep','septiembre','oct','octubre','nov','noviembre','dic','diciembre');
        $month_arr = array('01','01','02','02','03','03','04','04','05','05','06','06','07','07','08','08','09','09','10','10','11','11','12','12');
        // $month_arr = array('January','February','March','April','May','June','July','August','September','October','November','December');
        return str_replace($mes_arr,$month_arr,$date);
    }
}

?>
