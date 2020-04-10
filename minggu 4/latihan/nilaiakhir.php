<table width="300" border="1" align="center" bordercolor="#0033FF" bgcolor="#00A2E8">
  <tr>
    <td><?php
$a=$_POST['nim'];
$c=$_POST['jurusan'];
$d=$_POST['absen'];
$e=$_POST['tugas'];
$f=$_POST['uts'];
$g=$_POST['uas'];
$h=(0.4*$e)+(0.3*$f)+(0.3*$g);
if ($h>=84)
$j=("A") and $i=("LULUS");
else
if ($h>=70)
$j=("B") and $i=("LULUS");
else
if ($h>=60)
$j=("C") and $i=("LULUS");
else
if ($h>=50)
$j=("D") and $i=("TIDAK LULUS");
else
if ($h>100)
$j=("") and $i=("NILAI SALAH");
else
$j=("E") and $i=("TIDAK LULUS");


echo"NIM : $a<br>";
echo"Program Studi : $c<br>";
echo"Catatan Khusus : $d<br>";
echo"Nilai Akhir : $h<br>";
echo"Status : $i<br>";


?></td>
  </tr>
</table>
</body>
</html>