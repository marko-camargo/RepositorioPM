<?php
require('fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('logo1.jpg',10,0,33);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Movernos a la derecha
    $this->Cell(75);
    // Título
    $this->Cell(50,10,'Ficha de Examen',1,0,'C');
    // Salto de línea
    $this->Ln(20);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,'Imprime esta ficha ',0,0,'C');
}
}

require 'cn.php';

$consulta = "SELECT * FROM tusuario";
$resultado = $dbh->query($consulta);
$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);

session_start();
$dia = date("Ymd");
$long = strlen($dia);
$hoy = substr($dia,-$long+2);
$tamid =strlen($_SESSION['id']);
$guia="";

for($i=0; $i<4- $tamid; $i++){
    $guia = $guia."0";
}

$ficha = $hoy.$guia.$_SESSION['id'];
$lista = array("NOMBRE:","CURP:","NUMERO:","FICHA DE EXAMEN:","BANCO:","CUENTA:", "PAGO:");
$lista2 = array($_SESSION['nombre']." ".$_SESSION['apa']." ".$_SESSION['ama'],$_SESSION['curp'],$_SESSION['celular'],$ficha,"BBVA Bancomer","HYENSLALSID54","$5000");

for($i=0; $i<7; $i++){
    $pdf->Cell(90,10,$lista[$i],1,0,'C',0);
    $pdf->Cell(90,10,$lista2[$i],1,1,'C',0);

}

$pdf->Output();


?>