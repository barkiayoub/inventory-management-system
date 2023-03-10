<?php
ob_start();
// include_once('functions.php');
include_once('TCPDF-main/tcpdf.php');
require_once("classItems.php");
require_once("classClient.php");
require_once("classProduct.php");
$client = Client::SelectCliId($_GET['cin']);

$dbHandler = new PDO('mysql:host=localhost;dbname=stock_manager', 'root', '');
$dbStatment = $dbHandler->prepare("select * from commande join contenir join produit join client on produit.idpro = contenir.idpro and commande.idcom = contenir.idcom and client.cin = commande.cin where commande.idcom = " . $_GET['idcom'] . "");
$dbStatment->execute();
$c = $dbStatment->fetch(PDO::FETCH_OBJ);

//content
$html = '
	<style>
	table, tr, td {
	padding: 15px;
	}
	</style>
	<table style="background-color: #222222; color: #fff">
	<tbody>
	<tr>
	<td><h1>Order N°<strong>' . $_GET['idcom'] . '</strong></h1></td>
	<td align="right"><img src="#" height="60px"/><br/>
	123 street, ABC Store<br/>
	Morocco, Safi, 46000
	<br/>
	<strong>+00-1234567890</strong> | <strong>2As_services@gmail.com</strong>
	</td>
	
	</tr>
	</tbody>
	</table>
	';
$html .= '
	<table>
	<tbody>
	<tr>
	<td>Receipt for : <br/>
	<strong>' . $client->nom . ' ' . $client->prenom . '</strong>
	<br/>
	' . $client->adress . ' 
    <br/>
    ' . $client->email . '
    <br/>
    ' . $client->tel . '
	</td>
	<td align="right">
	Receipt Date: ' . date('d-m-Y') . '
	</td>
	</tr>
	</tbody>
	</table>
	';
$html .= '
	<table>
	<thead>
	<tr style="font-weight:bold;">
	<th>Item name</th>
	<th>Price</th>
	<th>Quantity</th>
	<th>Total</th>
	</tr>
	</thead>
	<tbody>';
$i = 0;
do {
	$html .= '<tr>  
                    <td>' . $c->libelle . '</td>  
                    <td>' . $c->prixv . ' MAD</td>  
                    <td>' . $c->qte_produit . '</td>  
                    <td>' . $c->prixv * $c->qte_produit . ' MAD</td>
                </tr>';
	$i += $c->prixv * $c->qte_produit;
} while ($c = $dbStatment->fetch(PDO::FETCH_OBJ));

$html .= '
	<tr align="right">
	<td colspan="4"><strong>Grand total: ' . $i . ' MAD </strong></td>
	</tr>
	<tr>
	<td colspan="4">
	<h2>Thank you for your business.</h2><br/>
	
	</td>
	</tr>
	</tbody>
	</table>
	';
//end content
// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
// set default monospaced font
// set margins
$pdf->SetMargins(-1, 0, -1);
// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
// set default font subsetting mode
$pdf->setFontSubsetting(true);
// Set font
// dejavusans is a UTF-8 Unicode font, if you only need to
// print standard ASCII chars, you can use core fonts like
// helvetica or times to reduce file size.
$fontname = TCPDF_FONTS::addTTFfont('ubuntu.ttf', 'TrueTypeUnicode', '', 96);
$fontbold = TCPDF_FONTS::addTTFfont('ubuntuB.ttf', 'TrueTypeUnicode', '', 96);
$pdf->SetFont($fontname, '', 10);
$pdf->AddPage();
// Print text using writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 0, 0, true, '', true);
//$pdf->Output(dirname(__FILE__).'example_001.pdf', 'F');
$pdf_name = '' . $client->nom . $client->prenom . time() . '.pdf';
//$pdf_name = 'test.pdf';
ob_end_flush();
$pdf->Output(dirname(__FILE__) . '/invoice/' . $pdf_name . '', 'F');
// echo 'PDF saved. <a href="invoice/' . $pdf_name . '">View</a>';
header("location: invoice/$pdf_name");
// }
