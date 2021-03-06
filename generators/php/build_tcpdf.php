<?php

require './vendor/autoload.php';

echo 'Building with TCPDF...' . PHP_EOL;

$html = file_get_contents('/documents/invoice.html');
$outputDir = '/output/';

$pdf = new TCPDF('P', 'mm', 'LETTER');
$pdf->AddPage();
$pdf->writeHTML($html);
file_put_contents($outputDir . 'invoice-tcpdf.pdf', $pdf->Output('', 'S'));
