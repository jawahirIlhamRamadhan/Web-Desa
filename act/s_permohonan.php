<?php
include '../koneksi.php';
    $nik            = $_POST['nik'];
    $nama           = $_POST['nama'];
    $nms            = $_POST['nmsurat'];
    $kode           = $_POST['kode'];
    $page           = $_POST['page'];
    $hp             = $_POST['hp'];

        $lokasi_ktp    = $_FILES['ktp']['tmp_name'];
        $nama_ktp      = $_FILES['ktp']['name'];
        $acakktp       = rand(1,99);
        $nama_ktp_unik = $acakktp.$nama_ktp;
        $vdir_upload = "../ktp/";
        $vktp_upload = $vdir_upload . $nama_ktp_unik;
        move_uploaded_file($_FILES["ktp"]["tmp_name"], $vktp_upload);
       
        $lokasi_foto    = $_FILES['foto']['tmp_name'];
        $nama_foto      = $_FILES['foto']['name'];
        $acakfoto       = rand(1,99);
        $nama_foto_unik = $acakfoto.$nama_foto;
        $vdirfoto_upload = "../fotowarga/";
        $vfoto_upload = $vdirfoto_upload . $nama_foto_unik;
        move_uploaded_file($_FILES["foto"]["tmp_name"], $vfoto_upload);

        $simpan=(isset($_POST['simpan']));   
       
    if ($simpan){
            if (empty($lokasi_ktp)){
            //echo "<center><font color='#FF0000' size='+2'>Maaf Anda belum memilih Gambar<br></font></center>";
            ?><script language="javascript">alert('Maaf Anda belum melampirkan KTP')</script><?php
            ?><script>document.location.href="../permohonan.php";</script><?php
            }else if (empty($lokasi_foto)){
            //echo "<center><font color='#FF0000' size='+2'>Maaf Anda belum memilih Gambar<br></font></center>";
            ?><script language="javascript">alert('Maaf Anda belum melampirkan Foto')</script><?php
            ?><script>document.location.href="../permohonan.php";</script><?php
            }else{
            mysqli_query($con, "INSERT INTO t_permohonan (nik, nama, kode_surat, nmsurat, page, hp, ktp, foto, tgl, status) VALUES ('$nik','$nama','$kode','$nms','$page','$hp','$nama_ktp_unik','$nama_foto_unik','".date('Y-m-d')."','onprocess')")or die (Error.mysqli_error());
            //echo "<center><font color='#FF0000' size='+1'>Berhasil disimpan</font></center><br>";
                ?><script language="javascript">alert('Pengajuan surat berhasil dikirim !')</script><?php
            ?><script>document.location.href="../permohonan.php";</script><?php
    }
        }
        ?>
