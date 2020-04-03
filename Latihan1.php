    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form method="post">
<input type="text" name="bil1"/>
<br><br>
<input type="text" name="bil2"/>
<br>
<br>
<select name="operator">
<option value="pilih">Pilih</option>
<option value="kali">*</option>
<option value="bagi">/</option>
<option value="tambah">+</option>
<option value="kurang">-</option>
</select>
<br>
<br>
<input type="submit" name="submit" value="Hitung"/>
</form>
<?php 
if(isset($_POST['submit'])){
$bil1 = $_POST['bil1'];
$bil2 = $_POST['bil2'];
$operator = $_POST['operator'];

switch ($operator) {
    case 'pilih':
        echo "harap pilih operator perhitungan";
        break;
    case 'kali':
        $hasil = $bil1 * $bil2;
        break;
    case 'bagi':
        $hasil = $bil1 / $bil2;
        break;
    case 'tambah':
        $hasil = $bil1 + $bil2;
        break;
    case 'kurang':
        $hasil = $bil1 - $bil2;
        break;
    default:
        echo "harap pilih operator perhitungan";
        break;
}
echo "<p>Hasil :</p>".$hasil;
}
?>

    </body>
</html>