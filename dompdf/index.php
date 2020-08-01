<?php
require_once 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;
$pdf = new Dompdf();
$html = "Test PDF";
$pdf->loadHtml($html);
$pdf->setPaper('A4','landscape');
$pdf->render();
$pdf->stream();
?>


