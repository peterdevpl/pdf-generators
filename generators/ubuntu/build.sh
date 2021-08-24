#!/bin/sh

DOCUMENT=/documents/invoice.html

prince $DOCUMENT -o /output/invoice-prince.pdf
wkhtmltopdf -s Letter $DOCUMENT /output/invoice-wkhtml.pdf
