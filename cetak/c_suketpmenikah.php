    <link rel="stylesheet" href="../assets/css/style.css">
<?php
include_once "../koneksi.php";
include_once "../assets/inc.php";

# Baca variabel URL
$kodesurat = $_GET['kode'];

# Perintah untuk mendapatkan data dari tabel Surat 
$query = mysqli_query ($con, "SELECT t_jenissurat.*, t_datasurat.*, t_detailsurat.*, t_penduduk.* from t_jenissurat, t_datasurat, t_detailsurat, t_penduduk WHERE t_detailsurat.kode='$kodesurat' AND t_detailsurat.nik=t_penduduk.nik");
while ($r = mysqli_fetch_array($query)){
  $dt=explode(';',$r['detail']);
  $tgl = $r['tanggal'];
  $bl=format_hari_tanggal($tgl);
  $bln=explode(',',$bl);
  $bulan=$bln['1'];
  $tgln = $dt[26];
  $blnk=format_hari_tanggal($tgln);
  $blnnkh=explode(',',$blnk);
  $bulannk=$blnnkh['1'];

?>
<?php 
$query = mysqli_query ($con, "SELECT * from t_desa");
while ($rd = mysqli_fetch_array($query)){
?>
<html>
<head>
<title></title>
<link href="styles/style.css" rel="stylesheet" type="text/css">
</head>
<body onLoad="window.print()" >
<h1 align="center">
<table width="800" align="center" border="0" cellspacing="1" cellpadding="4" class="table-print">
  <tr>
    <td rowspan="3" width="70"><img src="../images/<?php echo $rd['logo'];?>" width="60" height="60"></td>
    <td colspan="" align="center"><strong><font size=2 color="black">PEMERINTAH KABUPATEN <?php echo strtoupper($rd['kab']);?></font></a>
    </strong></td><td></td>
  </tr>
    <tr>
    <td colspan="" align="center"><strong><font size=3 color="black">KECAMATAN <?php echo strtoupper($rd['kec']);?></font></a>
    </strong></td><td width="70"></td>
  </tr>
    <tr>
    <td colspan="" align="center"><strong><font size=5 color="black">DESA <?php echo strtoupper($rd['desa']);?></font></strong></td>
    <td width="70"></td>
  </tr>
    <tr>
   <td colspan="3" align="center"><hr><font size=2 color="black"><i>Sekretariat : <?php echo $rd['kantor'];?></i><hr size="3"></td>
  </tr>
    <tr>
    <td colspan="3" align="center"><strong><font size=4 color="black"><u><?php echo strtoupper($r['nmsurat']); ?> </u></font></a>
    </strong><br><font size=2 color="black">Nomor : <?php echo $r['no']; ?></font></td>
  </tr>
</table>
<br>
<table align="center" class="table-list" width="800" border="0" cellspacing="1" cellpadding="2">
  <tr>
    <td colspan="4">Yang bertanda tangan dibawah ini Kepala Desa <?php echo $rd['desa'];?> Kecamatan <?php echo $rd['kec'];?> Kabupaten <?php echo $rd['kab'];?>, menerangkan bahwa :</td>
  </tr>
    <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
  <tr>
    <td></td><td>Nama</td><td>:</td><td><?php echo $dt[1];?></td>
  </tr>
  <tr>
    <td></td><td>NIK</td><td>:</td><td><?php echo $dt[0];?></td>
  </tr>
    <tr>
    <td></td><td>Tmp.&Tgl. Lahir</td><td>:</td><td><?php echo $dt[3];?>, &nbsp;<?php echo $dt[4];?></td>
  </tr>
    <tr>
    <td></td><td>Kewarganegaraan</td><td>:</td><td><?php echo $dt[5];?></td>
  </tr>
    <tr>
    <td></td><td>Agama</td><td>:</td><td><?php echo $dt[6];?></td>
  </tr>
    <tr>
    <td></td><td>Pekerjaan</td><td>:</td><td><?php echo $dt[7];?></td>
  </tr>
     <tr>
    <td></td><td valign="top">Alamat</td><td valign="top">:</td><td valign="top"><?php echo $dt[8];?> Desa <?php echo $dt[12];?><br>Kec. <?php echo $dt[11];?> Kab. <?php echo $dt[10];?> Prov. <?php echo $dt[9];?></td>
  </tr>
<tr>
    <td colspan="4">&nbsp;</td>
  </tr>


    <tr>
    <td colspan="4">Warga tersebut diatas adalah bernar Warga Desa <?php echo $rd['desa'];?>  dan yang bersangkutan <b>Pernah Menikah</b> secara <b><?php echo $dt[27];?></b> pada <?php echo $bulannk;?> dengan :</td>
  </tr>
    <tr>
    <td></td><td>Nama </td><td>:</td><td><?php echo $dt[14];?></td>
  </tr>
  <tr>
    <td></td><td>NIK</td><td>:</td><td><?php echo $dt[13];?></td>
  </tr>
    <tr>
    <td></td><td>Tmp.&Tgl. Lahir</td><td>:</td><td><?php echo $dt[16];?>, &nbsp; <?php echo $dt[17];?></td>
  </tr>
    <tr>
    <td></td><td>Kewarganegaraan</td><td>:</td><td><?php echo $dt[18];?></td>
  </tr>
    <tr>
    <td></td><td>Agama</td><td>:</td><td><?php echo $dt[19];?></td>
  </tr>
    <tr>
    <td></td><td>Pekerjaan</td><td>:</td><td><?php echo $dt[20];?></td>
  </tr>
   <tr>
    <td></td><td valign="top">Alamat</td><td valign="top">:</td><td valign="top"><?php echo $dt[21];?> Desa <?php echo $dt[25];?><br>Kec. <?php echo $dt[24];?> Kab. <?php echo $dt[23];?> Prov. <?php echo $dt[22];?></td>
  </tr>
  <tr>
    <td colspan="4">&nbsp;</td>
  </tr>
    <tr>
    <td colspan="4">Demikian keterangan ini dibuat dengan sebenarnya untuk dapat dipergunakan sebagaimana mestinya.</td>
  </tr>

<tr><td colspan="4">
<table width="90%" align="right" border="0" cellspacing="1" cellpadding="4" class="table-print">
    <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
    <tr>
    <td></td><td align="center" class="pull pull-right"><?php echo $rd['desa'];?>,&nbsp;<?php echo $bulan;?></td>
  </tr>
  <tr>
    <td rowspan="3"><img src="../qrcode/<?php echo $r['qrcode'];?>" style="border: 1px solid white; width: 5em; height: 5em; margin-right: 10em; margin-top: 0em;"></td><td align="center" valign="top" class="pull pull-right">Kepala Desa <?php echo $rd['desa'];?></td>
  </tr>
  <tr>
    <td align="center" class="pull pull-right"></td>
  </tr>
  <tr>
    <td align="center" class="pull pull-right"><br><br><br><u><b><?php echo $r['ttd'];?></b></u><br>NIP. <?php echo $rd['nipkades'];?></td>
  </tr> 
</table>
</td>
</tr>
</table>
  <?php }} ?>
</body>
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>
</html>