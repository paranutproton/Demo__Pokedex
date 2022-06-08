<html>
<head>
<title>Pokemon_Save</title>
</head>
<body>
<?php
$objConnect = mysqli_connect("127.0.0.1","root","1234","Pokemon",3306) or die("Error Connect to Database");
$objDB = mysqli_select_db($objConnect,"Pokemon"); #
#extra
#if(isset($_POST['submit']) == 1) {
#$id = mysqli_real_escape_string($objConnect,$_POST['txtpokemon_id']); DELETE THIS
$name = mysqli_real_escape_string($objConnect,$_POST['txtpokemon_name']);
$type = mysqli_real_escape_string($objConnect,$_POST['txtpokemon_type']);
$gen = mysqli_real_escape_string($objConnect,$_POST['txtpokemon_gen']);
#
$strSQL = "INSERT INTO pokedex ";
$strSQL .="(pokemon_name,pokemon_type,pokemon_gen) ";
$strSQL .="VALUES ('$name','$type',$gen)";

#$strSQL .="('".$_POST["txtpokemon_id"]."','".$_POST["txtpokemon_name"]."','".$_POST["txtpokemon_type"]."','".$_POST["txt#pokemon_gen"]."') ";
$objQuery = mysqli_query($objConnect,$strSQL); #
if($objQuery)
{
	echo "Save Done.";
}
else
{
	echo "Error Save [".$strSQL."]";
}
if (isset($_POST['submit']) == 1){
	//You need to redirect
	header("Location: http://localhost/show.php"); /* Redirect browser */
	exit();
   }
else{
	$message = 'Page could not be added';
}
mysqli_close($objConnect);
#}else{
#$message = '<p>Page could not be added due to: </p>'.mysqli_error($objConnect);
#}
?>
</body>
</html>

 <!-- NOTE:  
 1. use mysqli นะจ้ะ 
 2.เพิ่ม if submit แล้วถึงเด้งมาหน้่านี้ no need
 3. ไม่ต้องส่ง primary key again
 

 ASK
 1. ตอน insert ต้องใส่ '' ทั้งๆที่เปนตัวแปรอยุ่แล้ว ?
 2. "" กับ ''
 3.mysqli_connect parameter ไม่ตรงในเว็บ
-->