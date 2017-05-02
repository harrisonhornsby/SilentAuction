<?php



include 'dbconfigSilentAuction.php';
require('fpdf/fpdf.php');


$pdf = new FPDF();

$pos = 0;
$bidNumberArray = range(100,999);
shuffle($bidNumberArray);

for ($counter =0;$counter < 38;$counter++){
//$bidNo = rand(100,999);



$pdf->AddPage();


$pdf->SetXY(0,20);
// Set font
$pdf->SetFont('Arial','B',14);
// Move to 8 cm to the right
$pdf->Cell(10);
// Centered text in a framed 20*10 mm cell and line break
$pdf->Write(5,"Bidder Number: ");
$pdf->Write(5,$bidNumberArray[$pos]);



$pdf->SetXY(0,40);
// Set font
$pdf->SetFont('Arial','B',12);
// Move to 8 cm to the right
$pdf->Cell(10);
// Centered text in a framed 20*10 mm cell and line break
$pdf->Cell(70,20,'Name : ',1,1,'L');

$pdf->SetXY(0,60);
// Set font
$pdf->SetFont('Arial','B',12);
// Move to 8 cm to the right
$pdf->Cell(10);
// Centered text in a framed 20*10 mm cell and line break
$pdf->Cell(70,20,'Address : ',1,1,'L');

$pdf->SetXY(0,80);
// Set font
$pdf->SetFont('Arial','B',12);
// Move to 8 cm to the right
$pdf->Cell(10);
// Centered text in a framed 20*10 mm cell and line break
$pdf->Cell(70,20,'Cell Number : ',1,1,'L');

$pdf->SetXY(0,100);
// Set font
$pdf->SetFont('Arial','B',12);
// Move to 8 cm to the right
$pdf->Cell(10);
// Centered text in a framed 20*10 mm cell and line break
$pdf->Cell(70,20,'Home Number : ',1,1,'L');

$pdf->SetXY(0,120);
// Set font
$pdf->SetFont('Arial','B',12);
// Move to 8 cm to the right
$pdf->Cell(10);
// Centered text in a framed 20*10 mm cell and line break
$pdf->Cell(70,20,'Email : ',1,1,'L');





$pdf->SetXY(82,35);
$pdf->SetFont('Arial','B',14);

// Centered text in a framed 20*10 mm cell and line break
$pdf->Cell(20,20,'Bidder No.',0,1,'T');

$pdf->SetXY(82,55);
$pdf->SetFont('Arial','B',14);

// Centered text in a framed 20*10 mm cell and line break
$pdf->Write(5,$bidNumberArray[$pos]);
$pos++;

////////////////////////////
//$bidNo1 = rand(100,999);

$pdf->SetXY(105,20);
// Set font
$pdf->SetFont('Arial','B',14);
// Move to 8 cm to the right
$pdf->Cell(10);
// Centered text in a framed 20*10 mm cell and line break

$pdf->Write(5,"Bidder Number: ");
$pdf->Write(5,$bidNumberArray[$pos]);

$pdf->SetXY(100,40);
// Set font
$pdf->SetFont('Arial','B',12);
// Move to 8 cm to the right
$pdf->Cell(10);
// Centered text in a framed 20*10 mm cell and line break
$pdf->Cell(70,20,'Name: ',1,1,'L');

$pdf->SetXY(100,60);
// Set font
$pdf->SetFont('Arial','B',12);
// Move to 8 cm to the right
$pdf->Cell(10);
// Centered text in a framed 20*10 mm cell and line break
$pdf->Cell(70,20,'Address : ',1,1,'L');

$pdf->SetXY(100,80);
// Set font
$pdf->SetFont('Arial','B',12);
// Move to 8 cm to the right
$pdf->Cell(10);
// Centered text in a framed 20*10 mm cell and line break
$pdf->Cell(70,20,'Cell Number : ',1,1,'L');

$pdf->SetXY(100,100);
// Set font
$pdf->SetFont('Arial','B',12);
// Move to 8 cm to the right
$pdf->Cell(10);
// Centered text in a framed 20*10 mm cell and line break
$pdf->Cell(70,20,'Home Number : ',1,1,'L');

$pdf->SetXY(100,120);
// Set font
$pdf->SetFont('Arial','B',12);
// Move to 8 cm to the right
$pdf->Cell(10);
// Centered text in a framed 20*10 mm cell and line break
$pdf->Cell(70,20,'Email : ',1,1,'L');

////////////////////////

$pdf->SetXY(182,35);
$pdf->SetFont('Arial','B',14);

// Centered text in a framed 20*10 mm cell and line break
$pdf->Cell(20,20,'Bidder No.',0,1,'T');

$pdf->SetXY(182,55);
$pdf->SetFont('Arial','B',14);

// Centered text in a framed 20*10 mm cell and line break
$pdf->Write(5,$bidNumberArray[$pos]);
$pos++;

////////////////////////////////////////////////////////
//$bidNo2 = rand(100,999);

$pdf->SetXY(0,150);
// Set font
$pdf->SetFont('Arial','B',14);
// Move to 8 cm to the right
$pdf->Cell(10);
// Centered text in a framed 20*10 mm cell and line break
$pdf->Write(5,"Bidder Number: ");
$pdf->Write(5,$bidNumberArray[$pos]);


$pdf->SetXY(0,170);
// Set font
$pdf->SetFont('Arial','B',12);
// Move to 8 cm to the right
$pdf->Cell(10);
// Centered text in a framed 20*10 mm cell and line break
$pdf->Cell(70,20,'Name : ',1,1,'L');

$pdf->SetXY(0,190);
// Set font
$pdf->SetFont('Arial','B',12);
// Move to 8 cm to the right
$pdf->Cell(10);
// Centered text in a framed 20*10 mm cell and line break
$pdf->Cell(70,20,'Address : ',1,1,'L');

$pdf->SetXY(0,210);
// Set font
$pdf->SetFont('Arial','B',12);
// Move to 8 cm to the right
$pdf->Cell(10);
// Centered text in a framed 20*10 mm cell and line break
$pdf->Cell(70,20,'Cell Number : ',1,1,'L');

$pdf->SetXY(0,230);
// Set font
$pdf->SetFont('Arial','B',12);
// Move to 8 cm to the right
$pdf->Cell(10);
// Centered text in a framed 20*10 mm cell and line break
$pdf->Cell(70,20,'Home Number : ',1,1,'L');

$pdf->SetXY(0,250);
// Set font
$pdf->SetFont('Arial','B',12);
// Move to 8 cm to the right
$pdf->Cell(10);
// Centered text in a framed 20*10 mm cell and line break
$pdf->Cell(70,20,'Email : ',1,1,'L');





$pdf->SetXY(82,165);
$pdf->SetFont('Arial','B',14);

// Centered text in a framed 20*10 mm cell and line break
$pdf->Cell(20,20,'Bidder No.',0,1,'T');

$pdf->SetXY(82,185);
$pdf->SetFont('Arial','B',14);

// Centered text in a framed 20*10 mm cell and line break
$pdf->Write(5,$bidNumberArray[$pos]);
$pos++;
 
		////////////////////////////////////////////////////////
//		$bidNo3 = rand(100,999);
		
$pdf->SetXY(105,150);
// Set font
$pdf->SetFont('Arial','B',14);
// Move to 8 cm to the right
$pdf->Cell(10);
// Centered text in a framed 20*10 mm cell and line break
$pdf->Write(5,"Bidder Number: ");
$pdf->Write(5,$bidNumberArray[$pos]);


$pdf->SetXY(100,170);
// Set font
$pdf->SetFont('Arial','B',12);
// Move to 8 cm to the right
$pdf->Cell(10);
// Centered text in a framed 20*10 mm cell and line break
$pdf->Cell(70,20,'Name: ',1,1,'L');

$pdf->SetXY(100,190);
// Set font
$pdf->SetFont('Arial','B',12);
// Move to 8 cm to the right
$pdf->Cell(10);
// Centered text in a framed 20*10 mm cell and line break
$pdf->Cell(70,20,'Address : ',1,1,'L');

$pdf->SetXY(100,210);
// Set font
$pdf->SetFont('Arial','B',12);
// Move to 8 cm to the right
$pdf->Cell(10);
// Centered text in a framed 20*10 mm cell and line break
$pdf->Cell(70,20,'Cell Number : ',1,1,'L');

$pdf->SetXY(100,230);
// Set font
$pdf->SetFont('Arial','B',12);
// Move to 8 cm to the right
$pdf->Cell(10);
// Centered text in a framed 20*10 mm cell and line break
$pdf->Cell(70,20,'Home Number : ',1,1,'L');

$pdf->SetXY(100,250);
// Set font
$pdf->SetFont('Arial','B',12);
// Move to 8 cm to the right
$pdf->Cell(10);
// Centered text in a framed 20*10 mm cell and line break
$pdf->Cell(70,20,'Email : ',1,1,'L');

////////////////////////

$pdf->SetXY(182,165);
$pdf->SetFont('Arial','B',14);

// Centered text in a framed 20*10 mm cell and line break
$pdf->Cell(20,20,'Bidder No.',0,1,'T');

$pdf->SetXY(182,185);
$pdf->SetFont('Arial','B',14);

// Centered text in a framed 20*10 mm cell and line break
$pdf->Write(5,$bidNumberArray[$pos]);
$pos++;
		

}

$pdf->Output();










?>