<h3> Tambah Data </h3>

<form action="" method="post">
<table>
    <tr>
        <td width="80"> No </td>
        <td> <input type="text" name="No"> </td>
    </tr>
    <tr>
        <td width="80"> NIM </td>
        <td> <input type="text" name="NIM"> </td>
    </tr>
    <tr>
        <td width="130"> Nama Mahasiswa </td>
        <td> <input type="text" name="Nama_Mahasiswa"> </td>
    </tr>
    <tr>
        <td width="100"> Prodi </td>
        <td> <input type="text" name="Prodi"> </td>
    </tr>
    <tr>
        <td width="80"> Angkatan </td>
        <td> <input type="text" name="Angkatan"> </td>
    </tr>
    <tr>
        <td width="80"> Kelas </td>
        <td> <input type="text" name="Kelas"> </td>
    </tr>
    <tr>
        <td width="250"> Alamat </td>
        <td> <input type="text" name="Alamat"> </td>
    </tr>
    <tr>
        <td></td>
        <td><input type="submit" name="proses" value="Simpan"> </td>
    </tr>
</table>

</form>

<?php
include "koneksi.php";

if(isset($_POST['proses'])){
mysqli_query($koneksi, "insert into barang set  
No = '$_POST[No]',
NIM = '$_POST[NIM]',
Nama_Mahasiswa = '$_POST[Nama_Mahasiswa]',
Prodi = '$_POST[Prodi]',
Angkatan = '$_POST[Angkatan]',
Kelas = '$_POST[Kelas]',
Alamat = '$_POST[Alamat]'");

echo "Data baru telah tersimpan";

}

?>