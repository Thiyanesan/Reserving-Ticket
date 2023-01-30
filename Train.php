<?php
if (isset($_POST['mysubmit'])){
$tno = $_POST['mytxt1'];
$tname = $_POST['mytxt2'];
$tarr = $_POST['mytxt3'];
$tdep = $_POST['mytxt4'];
$tsou = $_POST['mytxt5'];
$tdes = $_POST['mytxt6'];
$con = mysqli_connect("localhost","root","Thiyanesan05","Railways
");
if($con){
echo "CONNECTION SUCCESS ...✅";
}
else{
echo "CONNECTION FAILED....❌";
}
$query = "insert into train values('$tno','$tname','$tarr','$tdep
','$tsou','$tdes')";
$result= mysqli_query($con,$query);
if (!$result){
die('query failed').mysqli_error();
}
echo "<br><br>RECORD INSERTED SUCCESSFULLY....✅";
}
?>
<style>
body{
 margin-top:190px;
 font-style:bold;
 margin-left:550px;
 color:coral;
 font-size :20px;
 background-image: url('download.jpg');
 background-repeat: no-repeat;
 background-attachment: fixed;
 background-size: 500px;
 background-position:left;
}
</style>
