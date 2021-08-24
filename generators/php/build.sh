#!/bin/sh

composer install

php build_dompdf.php
php build_mpdf.php
php build_tcpdf.php
