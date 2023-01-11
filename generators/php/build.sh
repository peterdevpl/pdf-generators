#!/bin/sh

composer update

php build_dompdf.php
php build_mpdf.php
php build_tcpdf.php
