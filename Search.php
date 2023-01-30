<html lang="en">
<?php
echo '<script type="text/javascript">console.clear();</script>';
$con = mysqli_connect("localhost","root","Thiyanesan05","Railways
");
if($con) echo '<script>console.log("connnected")</script>';
else echo '<script>console.log("not connnected")</script>'
;
$find=$_GET['find'];
$query = "select * from train where TrainName='$find';";
$result = mysqli_query($con,$query);
if (!$result){
 ?><script type="text/javascript">
 var error = "<?php echo mysqli_error($con); ?>";
 console.log(error);
 </script> <?php
 die('<br><br><h3>Oops... Something went wrong!... <br> try ag
ain later <h3>');
}
else echo '<script>console.log("Query success")</scrip
t>';
?>
<center>
<body style="background-color:darkkhaki">
<br>
<main><?php
 if($row=mysqli_fetch_assoc($result))
 { ?>
 <table border=0><br><br><br><br><br><br><br><br><br><br><br>
 <h1><th>NUMBER</th>&nbsp&nbsp&nbsp<th>NAME</th>&nbsp&nbsp&nbs
p<th>ARRIVAL</th>&nbsp&nbsp&nbsp<th>DEPARTURE</th>&nbsp&nbsp&nbsp
<th>SOURCE</th>&nbsp&nbsp&nbsp<th>DESTINATION</th> </h1>
 <?php }
 else { echo '<br><br><h3>Not found!</h3>'; }?>
 <?php
 do
 {
 ?>
 <tr>
 <td> <?php echo($row['TrainNo']);?> </td>
 <td> <?php echo($row['TrainName']); ?> </td>
 <td> <?php echo($row['TrainTimeArr']); ?> </td>
 <td> <?php echo($row['TrainTimeDep']); ?> </td>
 <td> <?php echo($row['TrainSource']); ?> </td>
 <td> <?php echo($row['TrainDes']); ?> </td>
 <?php
 }while ($row = mysqli_fetch_assoc($result)) ?>
</table>
</main>
</body>

</html>
