<?php
include '../koneksi.php';
	$nm			    = $_POST['nama'];
	$nip			= $_POST['nip'];
	$jab 			= $_POST['jab'];
    $almt           = $_POST['almt'];


        $lokasi_file    = $_FILES['foto']['tmp_name'];
        $nama_file      = $_FILES['foto']['name'];
        $acak           = rand(1,99);
        $nama_file_unik = $acak.$nama_file;
        $vdir_upload = "../foto/";
        $vfile_upload = $vdir_upload . $nama_file_unik;
        move_uploaded_file($_FILES["foto"]["tmp_name"], $vfile_upload);
       
        $s=(isset($_POST['simpan']));   
       
        if ($s){
            if (empty($lokasi_file)){
            //echo "<center><font color='#FF0000' size='+2'>Maaf Anda belum memilih Gambar<br></font></center>";
            ?><script language="javascript">alert('Maaf Anda belum memilih Foto')</script><?php
            ?><script>document.location.href="../data/profile_kua.php";</script><?php
    }else{
        mysqli_query($con, "INSERT INTO t_petugaskua VALUES ('','$nm','$nip','$jab','$almt','$nama_file_unik')")or die (Error.mysqli_error());
        //echo "<center><font color='#FF0000' size='+1'>Berhasil disimpan</font></center><br>";
                ?><script language="javascript">alert('Penambahan Petugas Berhasil !')</script><?php
            ?><script>document.location.href="../data/profile_kua.php";</script><?php
    }
        }
        ?>
