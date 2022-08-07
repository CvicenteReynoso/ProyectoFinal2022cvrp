<?php
require('pdfs/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('assets/images/msj.png',20,5,60);
    // Arial bold 15
    $this->SetFont('Arial','B',20);
    // Movernos a la derecha
    $this->Cell(80);
    // Título
    $this->Cell(80,10,'Mensajes Tiendas Max',0,0,'C');
    // Salto de línea
    $this->Ln(40);

    $this->Cell(60,10,'Nombre',1,0,'C',0);
    $this->Cell(35,10,'Telefono',1,0,'C',0);
    $this->Cell(80,10,'Correo',1,0,'C',0);
    $this->Cell(100,10,'Mensaje',1,1,'C',0);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Times','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo(),0,0,'C');
}
}
require 'bd.php';
$consulta="SELECT * FROM mensajes";
$resultado=$conn->query($consulta); 
$pdf = new PDF();
$pdf->AddPage('landscape');
$pdf->SetFont('Arial','I',16);


while ($row = $resultado->fetch_assoc()) {
    $pdf->Cell(60,10,$row['nombre'],1,0,'C',0);
    $pdf->Cell(35,10,$row['telefono'],1,0,'C',0);
    $pdf->Cell(80,10,$row['correo'],1,0,'C',0);
    $pdf->MultiCell(100,10,$row['mensaje'],1,'L',0);
}

$pdf->Output();
?>