<?php 
session_start();
require_once __DIR__.'/vendor/autoload.php';
$mpdf =new \Mpdf\Mpdf();
$mpdf->writeHTML($_SESSION["facture"]);
$file='rapore.pdf';
$mpdf->Output($file,'D');?>