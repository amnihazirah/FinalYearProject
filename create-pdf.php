<?php
require_once 'FPDF/fpdf.php';
require_once 'db_conn.php';
// $name = $_POST['input_selectname'];



class PDF extends FPDF {
	function Footer(){
		//add table's bottom line
		$this->Cell(190,0,'','T',1,'',true);
		
		//Go to 1.5 cm from bottom
		$this->SetY(-15);
				
		$this->SetFont('Arial','',8);
		
		//width = 0 means the cell is extended up to the right margin
		$this->Cell(0,10,'Page '.$this->PageNo()." / {pages}",0,0,'C');
	}
}


//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new PDF(); //use new class

//define new alias for total page numbers
$pdf->AliasNbPages('{pages}');

$pdf->SetAutoPageBreak(true,15);
$pdf->AddPage();
$pdf->SetFont('Arial','',9);
$pdf->SetDrawColor(180,180,255);

$pdf->SetFont('Helvetica','',14);
$pdf->Cell(190,10,"Final Year Project Sem 2 2021/2022",0,1,'C');

$pdf->SetFont('Helvetica','',8);
$pdf->Cell(190,5,"Athlete Data",0,1,'C');

$pdf->SetFont('Helvetica','',10);
$pdf->Cell(30,5,"Name",0);
$pdf->Cell(160,5,": Programming 101",0);
$pdf->Ln();
$pdf->Cell(30,5,"Teacher Name",0);
$pdf->Cell(160,5,": Prof. John Smith",0);
$pdf->Ln();
$pdf->Ln(2);

		$pdf->SetFont('Arial','B',15);
		
		//dummy cell to put logo
		//$this->Cell(12,0,'',0,0);
		//is equivalent to:


		
		$pdf->SetFont('Arial','B',11);
		
		$pdf->SetFillColor(180,180,255);
		$pdf->SetDrawColor(180,180,255);
		$pdf->Cell(40,5,'Name',1,0,'',true);
		$pdf->Cell(25,5,'Activity',1,0,'',true);
		$pdf->Cell(65,5,'Mood',1,0,'',true);
		$pdf->Cell(60,5,'Heart rate',1,1,'',true);

$query=mysqli_query($conn,"select * from input where name= 'John Smith'");
while($data=mysqli_fetch_array($query)){
	$pdf->Cell(40,5,$data['name'],'LR',0);
	$pdf->Cell(25,5,$data['off_actitvity'],'LR',0);
	
	if($pdf->GetStringWidth($data['date']) > 65){
		$pdf->SetFont('Arial','',7);
		$right_date=date('m-d-Y',strtotime($data['date']));
		$pdf->Cell(65,5,$right_date,'LR',0);
		$pdf->SetFont('Arial','',9);
	}else{
		$right_date=date('m-d-Y',strtotime($data['date']));
		$pdf->Cell(65,5,$right_date,'LR',0);
	}
	$pdf->Cell(60,5,$data['hb_count'],'LR',1);
}


$pdf->Output();
?>