<?php

require __DIR__.'/vendor/autoload.php';

use Dompdf\Dompdf;

$dompdf = New Dompdf();

$dompdf-> loadHtml("<img src='01.jpg'");

$dompdf-> render();

header('Content-type: application/pdf');

echo $dompdf->output();
