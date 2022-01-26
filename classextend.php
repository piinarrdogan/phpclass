<?php 
 class Sekil{
     public $alan;
     public $cevre;
    public $a,$b,$c,$d,$e,$h;

    public function dörtgenalan($a,$b){
        $dortgeninalani = $a*$b;
    }
    public function ucgenalan($c,$h)
    {
        $ucgeninalani = ($c*$h)/2;
    }
    public function ucgencevre($c,$d,$e)
    {
        $ucgenincevre = ($c+$d+$e);
    }
    public function dortgencevre($a,$b)
    {
        $dortgenincevre = ($a+$b+$a+$b);
    }
 }
 
 
 class Ucgen extends Sekil{
    public function ucgenalan($c,$h)
    {
        $ucgeninalani = ($c*$h)/2;
    }
    public function ucgencevre($c,$d,$e)
    {
        $ucgenincevre = ($c+$d+$e);
    }
 }
 class Dikdortgen extends Sekil{
    public function dortgencevre($a,$b)
    {
        $dortgenincevre = ($a+$b+$a+$b);
    }
    public function dörtgenalan($a,$b){
        $dortgeninalani = $a*$b;
    }
 }
 class Kare extends Sekil{
    public function dortgencevre($a,$b)
    {
        $dortgenincevre = ($a+$b+$a+$b);
    }
    public function dörtgenalan($a,$b){
        $dortgeninalani = $a*$b;
    }
 }
