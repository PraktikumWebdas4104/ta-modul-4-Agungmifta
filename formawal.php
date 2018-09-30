<html>
<head>
<title></title>
</head>
<body>
<form method="POST" >
	<center>
	<H1><b>Data Pengguna:</b></H1><br/>
	Nama :<input type="text" name="text[]"><br><br/>
	Alamat :<input type="text" name="text[]"><br><br/>
	Umur :<input type="text" name="text[]"><br><br/>
	Email :<input type="text" name="text[]"><br><br/>
	password :<input type="text" name="text[]"><br><br/>
	<H1><b>Genre Film yang Disukai:</b></H1><br/>
<input type="checkbox" name="Film[]" value="Horor">Horor <br />
<input type="checkbox" name="Film[]" value="Action">Action <br />
<input type="checkbox" name="Film[]" value="Anime">Anime <br />
<input type="checkbox" name="Film[]" value="Thriller" >Thriller<br />
<input type="checkbox" name="Film[]" value="Animasi" >Animasi<br />
	<H1><b>Tempat Wisata Tujuan:</b></H1><br/>
<input type="checkbox" name="Tempat[]" value="Bali" >Bali<br />
<input type="checkbox" name="Tempat[]" value="Raja Ampat" >Raja Ampat<br />
<input type="checkbox" name="Tempat[]" value="Pulau Derawan" >Pulau Derawan<br />
<input type="checkbox" name="Tempat[]" value="Bangka Belitung" >Bangka Belitung<br />
<input type="checkbox" name="Tempat[]" value="Labuan Bajo" >Labuan Bajo<br /><br>
<input type="submit" name="submit" value="Input">
</center>
</form>
</body>
</html>

<?php 
if (isset($_POST['submit'])) {
	session_start();
$data1=$_POST['text'];
$data2=$_POST['Film'];
$data3=$_POST['Tempat'];

$_SESSION['arr1']=$data1;
$_SESSION['arr2']=$data2;
$_SESSION['arr3']=$data3;
header("Location:proses.php");
}

 ?>
