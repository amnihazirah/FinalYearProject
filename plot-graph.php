<?php 
//index.php
include('db_conn.php');
$query = "SELECT * FROM watchtest where date(time) = '2022-01-21' AND TIME(time) BETWEEN '09:28:00' AND '09:28:53' as timestamp";
$result = mysqli_query($conn, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ time:'".$row["timestamp"]."', heart:".$row["heart"].", ";
}
$chart_data = substr($chart_data, 0, -2);
?>


<!DOCTYPE html>
<html>
 <head>
  <title>chart with PHP & Mysql | lisenme.com </title>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
  
 </head>
 <body>
  <br /><br />
  <div class="container" style="width:900px;">
   <h2 align="center">Morris.js chart with PHP & Mysql</h2>
   <h3 align="center">Last 10 Years Profit, Purchase and Sale Data</h3>   
   <br /><br />
   <div id="chart"></div>
  </div>
 </body>
</html>

<script>
Morris.Line({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'year',
 ykeys:'heart',
 labels:'date',
 hideHover:'auto',
 stacked:true
});
</script>