<?php
require_once "Employee.php";
require_once "Cader.php";
require_once "Ouvrier.php";
require_once "IEmployee.php";
require_once "EmployeImplm.php";
$ouvier=new Ouvrier("0003","awiw","najem","ndb","Ouvrier","noir");
$cadre =new Cader("0002","med","najem","ndb","cadre","DK 11223");
$employe =new EmployeImplm();
echo "Cader <br>";
echo $cadre;
echo "<br>";
echo "Ouvrier <br>";
echo $ouvier;
echo "<br>";
echo "les information de cadre";
$employe->nombreJourConge($cadre)."<br>";
$employe->salaireAnuul($cadre)."<br>";
$employe->prime($cadre)."<br>";
echo "<br>";
$employe->nombreJourConge($ouvier)."<br>";
$employe->salaireAnuul($ouvier)."<br>";
$employe->prime($ouvier)."<br>";


