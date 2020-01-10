<html>
<head>
<title>Program Penjumlahan</title>
</head>
<body>
<form method='POST' action='tugas1.php'>
<p>Nilai A adalah <input type='text' name='nilai1' size='4'></p>
<p>Nilai B adalah <input type='text' name='nilai2' size='4'></p>
<p><input type='submit' value='Jumlah' name='submit'></p>
</form>
<?php
$angka1 = $_POST['nilai1'];
$angka2 = $_POST['nilai2'];
$jumlah = $angka1+$angka2;
$submit  = $_POST["submit"];
if(isset ($_POST['submit']))
{
echo "Nilai A adalah $angka1 </br>";
echo "Nilai B adalah $angka2 </br>";
echo "Jadi Nilai A ditambah Nilai B adalah $jumlah </br>:";
}
?>
</body>
</html>