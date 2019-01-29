<?php
require __DIR__.'/vendor/autoload.php';
kdskjdsjkdjkdjkdsjkdsjkds

$dompdf = new Dompdf\Dompdf;

$tabela = file_get_contents('tabela.html');

$dompdf->loadhtml($tabela);
$dompdf->setPaper('A4', 'portrait'); 
$dompdf->render();
$dompdf->stream();


$dompdf->stream("dompdf_out.pdf", array("Attachment" => true));
//file_put_contents('doc.pdf', $dompdf->output());
