<?php
require 'Calendario.php';

class Calculos extends Calendario {
    static $today = "Domingo";
    public static function getCurrentMonthDays(){
        return date('t');
    }
}
?>