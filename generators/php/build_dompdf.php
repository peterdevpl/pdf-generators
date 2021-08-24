<?php

use Dompdf\Dompdf;

require './vendor/autoload.php';

echo 'Building with Dompdf...' . PHP_EOL;

$html = file_get_contents('/documents/invoice.html');
$outputDir = '/output/';

$pdf = new Dompdf();
$pdf->loadHtml($html);
$pdf->render();
file_put_contents($outputDir . 'invoice-dompdf.pdf', $pdf->output());
