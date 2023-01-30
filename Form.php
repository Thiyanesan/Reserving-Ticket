<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<title>First database program</title>
<h1 style="color:crimson"><marquee>TO ADD TRAIN DETAILS THIS FORM
HELPS YOU</marquee></h1>
</head>
<body>
<style>
body
{
 background-color:darkseagreen;



}
h1{
 color:kakhi;
 font-style:bold;

}
</style>
<form name=myform method=post action="Train.php">
<font color =darkred>
<center>
<label>TRAIN NO :</label>
<input type = text name = mytxt1><br><br>
<label>TRAIN NAME : </label>
<input type = text name = mytxt2><br><br>
<label>TRAIN ARRIVAL : </label>
<input type = text name = mytxt3><br><br>
<label>TRAIN DEPARTURE : </label>
<input type = text name = mytxt4><br><br>
<label>TRAIN SOURCE : </label>
<input type = text name = mytxt5><br><br>
<label>TRAIN DESTINATION : </label>
<input type = text name = mytxt6><br><br>
<input type = submit name = mysubmit value= "Update The Train Det
ails">
</form>
</body>
<h1 style="color:firebrick"><marquee>TO SEARCH YOUR RESPECTIVE TR
AIN</marquee></h1>
<form method="GET" action="search.php">
 SEARCH BY TRAIN NAME:
 <input type="text" name="find">
 <input type="submit" name="SEARCH" value="SEARCH BY TR
AIN NAME">
 </form><br>
 <form method="GET" action="search1.php">
 SEARCH BY SOURCE NAME:
 <input type="text" name="find">
 <input type="submit" name="SEARCH" value="SEARCH BY SO
URCE NAME">
 </form><br>
 <form method="GET" action="search2.php">
 SEARCH BY DESTINATION NAME:
 <input type="text" name="find">
 <input type="submit" name="SEARCH" value="SEARCH BY DE
STINATION NAME">
 </form>
</html>
