<html>
<head>
<title>Hitung Nilai Mahasiswa</title>
</head>
<body>
<center><h1>Hitung Nilai</h1></center>
<form id="reza" name="reza" method="post" action="nilaiakhir.php">
  <table width="350" border="1" align="center" bordercolor="#0000FF" bgcolor="#00A2E8">
    <tr>
      <td><strong>NIM</strong></td>
      <td><input name="nim" type="text" id="nim" /></td>
    </tr>
    <tr>
      <td><strong>Program Studi</strong></td>
      <td><select name="jurusan">
          <option value="TEKNIK INFORMATIKA S1">A11</option>
          <option value="TEKNIK INFORMASI S1">A12</option>
          <option value="TEKNIK INFORMATIKA D3">A22</option>
          </select>
	  </td>
    </tr>
    <tr>
      <td><strong>Nilai Tugas</strong></td>
      <td><input name="tugas" type="text" id="tugas" /></td>
    </tr>
    <tr>
      <td><strong>Nilai UTS</strong></td>
      <td><input name="uts" type="text" id="uts" /></td>
    </tr>
    <tr>
      <td><strong>Nilai UAS</strong></td>
      <td><input name="uas" type="text" id="uas" /></td>
    </tr>
	<tr>
      <td><strong>Catatan Khusus</strong></td>
      <td>
		  <input type="checkbox" name="absen" value="Kehadiran >= 70%">Kehadiran >= 70% <br />
		  <input type="checkbox" name="absen" value="interaktif dikelas">interaktif dikelas <br />
		  <input type="checkbox" name="absen" value="Tidak terlambat mengumpulkan tugas">Tidak terlambat mengumpulkan tugas <br /></td>
    </tr>
  </table><br/>
  <center><input type="submit" name="Submit" value="SIMPAN" /></center>
</form>
<center><span class="copy-text"></span></center>
</body>
</html>