<?php
session_start();
$name=$_SESSION['name'];
require('FPDF/fpdf.php');
include('db_conn.php');
//$name = $_POST['namepdf'];
$query=mysqli_query($conn,"SELECT * from users where name='$name'");
$result= mysqli_fetch_assoc($query);
//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=189mm

$pdf = new FPDF('P','mm','A4');

$pdf->AddPage();

//set font to arial, bold, 14pt
$pdf->SetFont('Arial','B',14);

//Cell(width , height , text , border , end line , [align] )

$pdf->Cell(130	,5,'Final year Project',0,1);


//set font to arial, regular, 12pt
$pdf->SetFont('Arial','',12);

$pdf->Cell(130	,5,'Faculty of Computer Science',0,0);
$pdf->Cell(59	,5,'',0,1);//end of line

$pdf->Cell(130	,5,'Department of Communication Technology and Network',0,1);

$pdf->Cell(130	,5,'Semester 1 2021/2022',0,1);

$pdf->Cell(130	,5,'IoT Based Sport and Education Analytics System',0,1);

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line

//billing address
$pdf->Cell(100	,5,'Athlete:',0,1);//end of line

//add dummy cell at beginning of each line for indentation
$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,$result['name'],0,1);

$get_gender= $result['gender'];
	if ($get_gender==1){
		$gender="Male";
	}
	else {
		$gender="Female";}

$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,$gender,0,1);

$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,$result['address'],0,1);

$pdf->Cell(10	,5,'',0,0);
$pdf->Cell(90	,5,$result['phone_no'],0,1);

//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(105	,5,'Off-field Activity',1,0);
$pdf->Cell(25	,5,'Date',1,0);
$pdf->Cell(25	,5,'Heart rate',1,0);
$pdf->Cell(34	,5,'Mood',1,1);//end of line

$pdf->SetFont('Arial','',12);

//items
$getitems=mysqli_query($conn,"SELECT * FROM off_field where off_userID='$name'");

$act1= 'Lecture';
$act2= 'Discussion';
$act3= 'Sleep';

$msg1= 'No Data';
$msg2= 'Normal';
$msg3= 'Slightly Stressed';
$msg4= 'Very Stressed';

while($item=mysqli_fetch_array($getitems)){
	$timestamp= $item['date'];
	$date = date('d/m/Y', strtotime($timestamp));
	
	$timestart=$item['time_start'];
	$timeend= $item['time_end'];
	
	$getheart=mysqli_query($conn,"SELECT AVG(heart) AS average FROM watchtest where name='$name' AND date(time) = '$timestamp' AND TIME(time) BETWEEN '$timestart' AND '$timeend'");
	$row = mysqli_fetch_assoc($getheart);
	$average = $row['average'];
	
	if(($average>=60) && ($average<=100)){
		$mood = $msg2;
	}
	else if($average<60){
		$mood = $msg1;
	}
	else if($average>100 && ($average<=150)){
		$mood = $msg3;
	}
	else{
	$mood = $msg4;
	}
	
	$activity= $item['off_activity'];
	if ($activity==1){
		$act=$act1;
	}
	else if ($activity==2){
		$act=$act2;
	}
	else {
		$act=$act3;}
	
	$pdf->Cell(105	,5,$act,1,0);
	$pdf->Cell(25	,5,$date,1,0);
	$pdf->Cell(25	,5,$average,1,0);
	$pdf->Cell(34	,5,$mood,1,1);//end of line
}

//Numbers are right-aligned so we give 'R' after new line parameter


//make a dummy empty cell as a vertical spacer
$pdf->Cell(189	,10,'',0,1);//end of line

//invoice contents
$pdf->SetFont('Arial','B',12);

$pdf->Cell(130	,5,'On-field Activity',1,0);
$pdf->Cell(25	,5,'Date',1,0);
$pdf->Cell(34	,5,'Count',1,1);//end of line

$pdf->SetFont('Arial','',12);

//ON FIELD
$geton_act=mysqli_query($conn,"SELECT * FROM on_field where on_userID='$name'");

$on_act1= 'Hit Ball';
$on_act2= 'Jump';
$on_act3= 'Run';


while($item_on=mysqli_fetch_array($geton_act)){
	$timestamp_on= $item_on['date'];
	$date = date('d/m/Y', strtotime($timestamp_on));

	$on_activity= $item_on['on_activity'];
	if ($on_activity==1){
		$act_on=$on_act1;
	}
	else if ($on_activity==2){
		$act_on=$on_act2;
	}
	else {
		$act_on=$on_act3;}
	
	$pdf->Cell(130	,5,$item_on['on_activity'],1,0);
	$pdf->Cell(25	,5,$date,1,0);
	$pdf->Cell(34	,5,$item_on['on_amount'],1,1,'R');//end of line
}

$pdf->Output();
?>