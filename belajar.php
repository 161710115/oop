<?php
class robot{
	public $suara ='ngik ngik ngik';
	public $kepala ='1';
}

$robot = new robot;
echo "bunyi robot :". $robot->suara;
?>
<br>
<?php
class kucing{
	public $suara ='meong meong meong';
	public $mulut =1;
}
$kucing = new kucing;
echo "bunyi kucing :".$kucing->suara;
?>
<br>
<?php
class sapi{
	public $suara ='moo moo moo';
	public $hidung =1;
}
$sapi = new sapi;
echo "bunyi sapi :".$sapi->suara;
?>
<br>
<?php
class ayam{
	public $suara ='kukuruyuk';
	public $kaki =2;
}
$ayam = new ayam;
echo "bunyi ayam :".$ayam->suara;
?>
<br>  
<?php

class kambing{
	public $suara ='embee';
	public $kaki =4;
}
$kambing = new kambing;
echo "bunyi kambing :".$kambing->suara;

?>
