<?php

use Mpdf\Mpdf;

require './vendor/autoload.php';

echo 'Building with mPDF...' . PHP_EOL;

$html = file_get_contents('/documents/invoice.html');
$outputDir = '/output/';

$pdf = new Mpdf(['format' => 'LETTER', 'orientation' => 'P']);
$pdf->writeHTML($html);
$pdf->Output($outputDir . 'invoice-mpdf.pdf', 'F');
