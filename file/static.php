<?php

class ContohStatic{
    public static $angka = 1;

    public static function halo(){
        return "Halo " . self::$angka++ . " kali";
    }
}

echo ContohStatic::$angka;
echo "<br> <hr>";
echo ContohStatic::halo();