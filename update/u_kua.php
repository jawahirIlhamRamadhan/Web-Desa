<?php
include '../koneksi.php';
    $id             = $_POST['id'];
	$nmk		    = $_POST['nm'];
	$nip			= $_POST['nip'];
	$pang  		    = $_POST['pang'];
    $almt           = $_POST['almt'];
	$kec 			= $_POST['kec'];
	$kab 			= $_POST['kab'];
	$prov	 		= $_POST['prov'];
	$telp			= $_POST['telp'];
	$email 			= $_POST['email'];

    $x				=$_POST['x'];
    $foto         	=$_FILES['logo']['tmp_name'];
    $foto_name     	=$_FILES['logo']['name'];
    $acak        	= rand(1,99);
    $tujuan_foto 	= $acak.$foto_name;
    $tempat_foto 	= '../images/'.$tujuan_foto;
           
    if (isset($_POST['update'])){
    if (!$foto==""){
        $buat_foto=$tujuan_foto;
        $d = '../images/'.$x;
        @unlink ("$d");
        copy ($foto,$tempat_foto);
    }else{
        $buat_foto=$x;
    }
                $qu=mysqli_query($con, "UPDATE t_kua SET
                id             ='$id',
                nm_kepala      ='$nmk',
                nip_kepala     ='$nip',
                pangjab_kepala ='$pang',
                almt_kantor    ='$almt',
                kec            ='$kec',
                kab            ='$kab',
                prov           ='$prov',
                telp           ='$telp',
                email          ='$email',
                logo 		   ='$buat_foto'
                WHERE id='$id'")or die (mysqli_error());
               
        ?><script language="javascript">alert("Data Berhasil Diupdate")</script><?
        ?><script>document.location='../data/profile_kua.php';</script><?php
        }
    ?>