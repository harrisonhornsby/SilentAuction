<?php

//require('mysql_report.php');
$servername = "db126b.pair.com";
$username = "bmoore08_4";
$password = "ai9rBc7G";
$dbname = "bmoore08_SilentAuction";
include 'dbconfigSilentAuction.php';
require('fpdf/fpdf.php');


//$pdf->SetAutoPageBreak(false);
class PDF extends FPDF
{
function Header()
{
    // Select Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->SetX(65);
    // Framed title
    $this->Write(10,'W.H. Taylor Elementary PTA');
	$this->Ln(10);
	$this->SetX(75);
	$this->Write(10,'2014 Silient Auction');
    // Line break
    $this->Ln(15);
}
}
$pdf = new PDF();



   


  $sql = "SELECT Items.LotId, Items.Description, Donors.ContactName as 'Donated By', Items.RetailValue FROM Items, Donors Where Donors.Id=Items.DonorId";
			$result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    $lotId = $row["LotId"];
                    $Description = $row["Description"];
					$DonatedBy = $row["Donated By"];
					$RetailValue = $row["RetailValue"];
					
					// Set font

$pdf->AddPage();
$pdf->SetFont('Arial','',14);
$pdf->Write(5,'Lot # ');
$pdf->Write(5, $lotId);
$pdf->Ln(7);


$pdf->SetFont('Arial','',14);
$pdf->Write(5,'Item Description: ');
$pdf->Write(5, $Description);
$pdf->Ln(7);


$pdf->SetFont('Arial','',14);
$pdf->Write(5,'Donated by: ');
$pdf->Write(5, $DonatedBy);
$pdf->Ln(7);


$pdf->SetFont('Arial','',14);
$pdf->Write(5,'Retail Value: $');
$pdf->Write(5, $RetailValue);
$pdf->Ln();
$pdf->Ln();

$pdf->Cell(46,10, "Bidder #",1,0,"C");
$pdf->Cell(46,10, "Bid Amount",1,0,"C");
$pdf->Cell(46,10, "Bidder #",1,0,"C");
$pdf->Cell(46,10, "Bid Amount",1,0,"C");
$pdf->Ln();
$pdf->SetFont('Arial','',9);
$pdf->Cell(46,10, "1.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Cell(46,10, "21.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Ln();
$pdf->Cell(46,10, "2.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Cell(46,10, "22.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Ln();
$pdf->Cell(46,10, "3.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Cell(46,10, "23.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Ln();
$pdf->Cell(46,10, "4.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Cell(46,10, "24.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Ln();
$pdf->Cell(46,10, "5.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Cell(46,10, "25.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Ln();
$pdf->Cell(46,10, "6.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Cell(46,10, "26.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Ln();
$pdf->Cell(46,10, "7.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Cell(46,10, "27.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Ln();
$pdf->Cell(46,10, "8.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Cell(46,10, "28.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Ln();
$pdf->Cell(46,10, "9.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Cell(46,10, "29.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Ln();
$pdf->Cell(46,10, "10.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Cell(46,10, "30.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Ln();
$pdf->Cell(46,10, "11.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Cell(46,10, "31.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Ln();
$pdf->Cell(46,10, "12.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Cell(46,10, "32.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Ln();
$pdf->Cell(46,10, "13.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Cell(46,10, "33.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Ln();
$pdf->Cell(46,10, "14.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Cell(46,10, "34.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Ln();
$pdf->Cell(46,10, "15.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Cell(46,10, "35.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Ln();
$pdf->Cell(46,10, "16.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Cell(46,10, "36.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Ln();
$pdf->Cell(46,10, "17.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Cell(46,10, "37.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Ln();
$pdf->Cell(46,10, "18.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Cell(46,10, "38.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Ln();
$pdf->Cell(46,10, "19.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Cell(46,10, "39.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Ln();
$pdf->Cell(46,10, "20.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");
$pdf->Cell(46,10, "40.",1,0,"L");
$pdf->Cell(46,10, "",1,0,"L");




                }
            }		
			
			
			

$pdf->Output();
?>