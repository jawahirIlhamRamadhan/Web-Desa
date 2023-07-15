<?php
include 'koneksi.php';
	$nkk			= $_POST['nkk'];
	$nik			= $_POST['nik'];
	$nama 			= $_POST['nama'];
	$jk 			= $_POST['jk'];
	$tmpl 			= $_POST['tmp_lahir'];
	$tgll 			= $_POST['tgl_lahir'];
	$kwng	 		= $_POST['kwng'];
	$agama			= $_POST['agama'];
	$status			= $_POST['status'];
	$pend			= $_POST['pend'];
	$kerjaan 		= $_POST['kerjaan'];
	$almt 			= $_POST['almt'];
    $desa           = $_POST['desa'];
    $kec            = $_POST['kec'];
    $kab            = $_POST['kab'];
    $prov           = $_POST['prov'];
	$hp 			= $_POST['hp'];
	$shdk 			= $_POST['shdk'];
	$ket 			= $_POST['ket'];


        $lokasi_file    = $_FILES['file']['tmp_name'];
        $nama_file      = $_FILES['file']['name'];
        $acak           = rand(1,99);
        $nama_file_unik = $acak.$nama_file;
        $vdir_upload = "fotowarga/";
        $vfile_upload = $vdir_upload . $nama_file_unik;
        move_uploaded_file($_FILES["file"]["tmp_name"], $vfile_upload);
       
        $simpan=(isset($_POST['simpan']));   
       
        if ($simpan){
            if (empty($lokasi_file)){
            //echo "<center><font color='#FF0000' size='+2'>Maaf Anda belum memilih Gambar<br></font></center>";
            ?><script language="javascript">alert('Maaf Anda belum memilih Foto')</script><?php
            ?><script>document.location.href="reg_pddk.php";</script><?php
    }else{
        mysqli_query($con, "INSERT INTO t_penduduk VALUES ('','$nkk','$nik','$nama','$jk','$tmpl','$tgll','$kwng','$agama','$status','$pend','$kerjaan','$prov','$kab','$kec','$desa','$almt','$hp','$shdk','$nama_file_unik','$ket')")or die (Error.mysqli_error());
        //echo "<center><font color='#FF0000' size='+1'>Berhasil disimpan</font></center><br>";
                ?><script language="javascript">alert('Data Penduduk berhasil disimpan !')</script><?php
            ?><script>document.location.href="login_warga.php";</script><?php
    }
        }
        ?>
