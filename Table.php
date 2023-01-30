<html>
<center>
 <h1><u>UPDATED TABLE</u></h1>
<?php
$con = mysqli_connect("localhost","root","Thiyanesan05","Railways
");
if($con){
 echo "1.CONNECTED...✅";
 }
 else
 {
 echo "1.NOT CONNECTED...❌";
 }
$query = "select * from train";
$result = mysqli_query($con,$query);
if (!$result){
 die('2.QUERY FAILED...❌').mysqli_error();
}
echo "<br><br>2.QUERY SUCCESS....✅";
?>
<br><br>
<head>
<title>Displaying the table</title>
</head>
<body>
 <table border=1>
 <th>NUMBER</th><th>NAME</th><th>ARRIVAL</th><th>DEPARTURE
<th>SOURCE</th><th>DESTINATION</th>
 <?php
 while ($row = mysqli_fetch_assoc($result))
 {
 ?>
 <tr>
 <td><?php print_r ($row['TrainNo']);?></td>
 <td> <?php print_r($row['TrainName']);?> </td>
 <td> <?php print_r($row['TrainTimeArr']); ?> </td>
 <td> <?php print_r($row['TrainTimeDep']); ?> </td>
 <td> <?php print_r($row['TrainSource']); ?> </td>
 <td> <?php print_r($row['TrainDes']); ?> </td>
 </tr>
 <?php
 }
 ?>
 </table>
</body>
<style>
 body{
 background-color:aquamarine;
 margin-top:100px;
 font-style:bold;

 font-size :20px;
 background-image:url('download1.jpg');
 background-repeat: no-repeat;
 background-attachment:fixed;
 background-size:500px;
 background-position:left;
 color:blue;
 }
td{
 background-color:bisque;
 width: 100px;
 height: 30px;
 text-align:left;
 color:darkgreen;
}
th{
 background-color:black;
 color:white;
}
h1{
 color:chocolate;
 text-shadow: 2px 2px 7px black;
}
</style>
</html>
