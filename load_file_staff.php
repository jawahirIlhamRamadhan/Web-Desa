<?php
 if(isset($_GET['page']))
                {
	switch ($_GET['page']){				
		case '' :				
			if(!file_exists ("main_stf.php")) die ("Empty Main Page!"); 
			include "main_stf.php";						
		break;
		case 'staff' :				
			if(!file_exists ("main_stf.php")) die ("Sorry Empty Page!"); 
			include "main_stf.php";						
		break;

		# SURAT KETERANGAN UMUM
		case 'undangan' :				
			if(!file_exists ('staff/undangan.php')) die ("Sorry Empty Page!"); 
			include 'staff/undangan.php';	 break;	
		case 'pengantar' :				
			if(!file_exists ('staff/pengantar.php')) die ("Sorry Empty Page!"); 
			include 'staff/pengantar.php';	 break;	
		case 'pemberitahuan' :				
			if(!file_exists ('staff/pemberitahuan.php')) die ("Sorry Empty Page!"); 
			include 'staff/pemberitahuan.php';	 break;	
		case 'himbauan' :				
			if(!file_exists ('staff/himbauan.php')) die ("Sorry Empty Page!"); 
			include 'staff/himbauan.php';	 break;	
		case 'pdinas' :				
			if(!file_exists ('staff/pdinas.php')) die ("Sorry Empty Page!"); 
			include 'staff/pdinas.php';	 break;
		case 'jawaban' :				
			if(!file_exists ('staff/jawaban.php')) die ("Sorry Empty Page!"); 
			include 'staff/jawaban.php';	 break;		

		case 'suketusaha' :				
			if(!file_exists ('staff/suketusaha.php')) die ("Sorry Empty Page!"); 
			include 'staff/suketusaha.php';	 break;	
		case 'sukettmpusaha' :				
			if(!file_exists ('staff/sukettmpusaha.php')) die ("Sorry Empty Page!"); 
			include 'staff/sukettmpusaha.php';	 break;	
		case 'suketpbarang' :				
			if(!file_exists ("staff/suketbarang.php")) die ("Sorry Empty Page!"); 
			include "staff/suketbarang.php"; break;		
		case 'suketpternak' :				
			if(!file_exists ("staff/suketternak.php")) die ("Sorry Empty Page!"); 
			include "staff/suketternak.php"; break;	
		case 'sukettmampuv1' :				
			if(!file_exists ("staff/sukettmampu.php")) die ("Sorry Empty Page!"); 
			include "staff/sukettmampu.php"; break;	
		case 'sukettmampuv2' :				
			if(!file_exists ("staff/sukettmampuu.php")) die ("Sorry Empty Page!"); 
			include "staff/sukettmampuu.php"; break;	
		case 'suketrtm' :				
			if(!file_exists ("staff/suketrtms.php")) die ("Sorry Empty Page!"); 
			include "staff/suketrtms.php"; break;	
		case 'suketpenghasilan' :				
			if(!file_exists ("staff/suketpenghasilan.php")) die ("Sorry Empty Page!"); 
			include "staff/suketpenghasilan.php"; break;	
		case 'suketortu' :				
			if(!file_exists ("staff/suketortu.php")) die ("Sorry Empty Page!"); 
			include "staff/suketortu.php"; break;	
		case 'suketanak' :				
			if(!file_exists ("staff/suketanak.php")) die ("Sorry Empty Page!"); 
			include "staff/suketanak.php"; break;	
		case 'suketmenikah' :				
			if(!file_exists ("staff/suketmenikah.php")) die ("Sorry Empty Page!"); 
			include "staff/suketmenikah.php"; break;	
		case 'suketkematian' :				
			if(!file_exists ("staff/suketmati.php")) die ("Sorry Empty Page!"); 
			include "staff/suketmati.php"; break;	
		case 'suketbepergian' :				
			if(!file_exists ("staff/suketbepergian.php")) die ("Sorry Empty Page!"); 
			include "staff/suketbepergian.php"; break;	
		case 'suketbedaid' :				
			if(!file_exists ("staff/suketbedaid.php")) die ("Sorry Empty Page!"); 
			include "staff/suketbedaid.php"; break;	
		case 'suketdomisililbg' :				
			if(!file_exists ("staff/suketdomisililbg.php")) die ("Sorry Empty Page!"); 
			include "staff/suketdomisililbg.php"; break;	
		case 'suketaw' :				
			if(!file_exists ("staff/suketaw.php")) die ("Sorry Empty Page!"); 
			include "staff/suketaw.php"; break;
		case 'skkb' :				
			if(!file_exists ("staff/skkb.php")) die ("Sorry Empty Page!"); 
			include "staff/skkb.php"; break;	
		case 'suketlain2' :				
			if(!file_exists ("staff/suketlain2.php")) die ("Sorry Empty Page!"); 
			include "staff/suketlain2.php"; break;	

		case 'suketdomisili' :				
			if(!file_exists ("staff/suketdomisili.php")) die ("Sorry Empty Page!"); 
			include "staff/suketdomisili.php"; break;	
		case 'sutarpindah' :				
			if(!file_exists ("staff/sutarpindah.php")) die ("Sorry Empty Page!"); 
			include "staff/sutarpindah.php"; break;	
		case 'suketkelahiran' :				
			if(!file_exists ("staff/suketkelahiran.php")) die ("Sorry Empty Page!"); 
			include "staff/suketkelahiran.php"; break;	
		case 'suketpenguburan' :				
			if(!file_exists ("staff/suketpenguburan.php")) die ("Sorry Empty Page!"); 
			include "staff/suketpenguburan.php"; break;
		case 'f121' :				
			if(!file_exists ("staff/f121.php")) die ("Sorry Empty Page!"); 
			include "staff/f121.php"; break;	
		case 'n1-n6' :				
			if(!file_exists ("staff/n1-n6.php")) die ("Sorry Empty Page!"); 
			include "staff/n1-n6.php"; break;	
		case 'pernahnikah' :				
			if(!file_exists ("staff/suketpernahnikah.php")) die ("Sorry Empty Page!"); 
			include "staff/suketpernahnikah.php"; break;
		case 'belumnikah' :				
			if(!file_exists ("staff/suketbelumnikah.php")) die ("Sorry Empty Page!"); 
			include "staff/suketbelumnikah.php"; break;
		case 'dudajanda' :				
			if(!file_exists ("staff/suketdudajanda.php")) die ("Sorry Empty Page!"); 
			include "staff/suketdudajanda.php"; break;
		case 'pstatus' :				
			if(!file_exists ("staff/pstatus.php")) die ("Sorry Empty Page!"); 
			include "staff/pstatus.php"; break;
		case 'sukettanah' :				
			if(!file_exists ("staff/sukettanah.php")) die ("Sorry Empty Page!"); 
			include "staff/sukettanah.php"; break;															
		case 'sporadik' :				
			if(!file_exists ("staff/sporadik.php")) die ("Sorry Empty Page!"); 
			include "staff/sporadik.php"; break;
		case 'sewatanah' :				
			if(!file_exists ("staff/sewatanah.php")) die ("Sorry Empty Page!"); 
			include "staff/sewatanah.php"; break;
		case 'jualbelitanah' :				
			if(!file_exists ("staff/jualbelitanah.php")) die ("Sorry Empty Page!"); 
			include "staff/jualbelitanah.php"; break;
		case 'gadai' :				
			if(!file_exists ("staff/gadai.php")) die ("Sorry Empty Page!"); 
			include "staff/gadai.php"; break;
		case 'profile' :				
			if(!file_exists ("data/profile.php")) die ("Sorry Empty Page!"); 
			include "data/profile.php"; break;
		case 'edit_profile' :				
			if(!file_exists ("data/edit_profile.php")) die ("Sorry Empty Page!"); 
			include "data/edit_profile.php"; break;
		case 'penduduk' :				
			if(!file_exists ("data/penduduk.php")) die ("Sorry Empty Page!"); 
			include "data/penduduk.php"; break;
		case 'cetak_penduduk' :				
			if(!file_exists ("cetak/c_penduduk.php")) die ("Sorry Empty Page!"); 
			include "cetak/c_penduduk.php"; break;
		case 'tambahpenduduk' :				
			if(!file_exists ("data/tambah_penduduk.php")) die ("Sorry Empty Page!"); 
			include "data/tambah_penduduk.php"; break;
		case 'importpenduduk' :				
			if(!file_exists ("import_phpspreadsheet/importpenduduk_ptg.php")) die ("Sorry Empty Page!"); 
			include "import_phpspreadsheet/importpenduduk_ptg.php"; break;
		case 'lihatpenduduk' :				
			if(!file_exists ("import_phpspreadsheet/lihatpenduduk_ptg.php")) die ("Sorry Empty Page!"); 
			include "import_phpspreadsheet/lihatpenduduk_ptg.php"; break;
		case 'edit_penduduk' :				
			if(!file_exists ("data/edit_penduduk.php")) die ("Sorry Empty Page!"); 
			include "data/edit_penduduk.php"; break;

		case 'jenissurat' :				
			if(!file_exists ("data/jenis-surat.php")) die ("Sorry Empty Page!"); 
			include "data/jenis-surat.php"; break;
		case 'tambahjenissurat' :				
			if(!file_exists ("data/tambahjenis-surat.php")) die ("Sorry Empty Page!"); 
			include "data/tambahjenis-surat.php"; break;
		case 'edit_jsurat' :				
			if(!file_exists ("data/edit_jsurat.php")) die ("Sorry Empty Page!"); 
			include "data/edit_jsurat.php"; break;
			
			
		case 'klasifikasi' :				
			if(!file_exists ("data/klasifikasi.php")) die ("Sorry Empty Page!"); 
			include "data/klasifikasi.php"; break;
		case 'stafff' :				
			if(!file_exists ("data/stafff.php")) die ("Sorry Empty Page!"); 
			include "data/stafff.php"; break;
		case 'staff' :				
			if(!file_exists ("data/staff.php")) die ("Sorry Empty Page!"); 
			include "data/staff.php"; break;
		case 'tambah_staff' :				
			if(!file_exists ("data/tambah_staff.php")) die ("Sorry Empty Page!"); 
			include "data/tambah_staff.php"; break;
		case 'edit_staff' :				
			if(!file_exists ("data/edit_staff.php")) die ("Sorry Empty Page!"); 
			include "data/edit_staff.php"; break;
		case 'process_permohonan' :				
			if(!file_exists ("data/process_permohonan.php")) die ("Sorry Empty Page!"); 
			include "data/process_permohonan.php"; break;
		case 'process_permohonan_all' :				
			if(!file_exists ("data/process_permohonan_all.php")) die ("Sorry Empty Page!"); 
			include "data/process_permohonan_all.php"; break;
		case 'buat_sendiri_all' :				
			if(!file_exists ("data/buat_sendiri_all.php")) die ("Sorry Empty Page!"); 
			include "data/buat_sendiri_all.php"; break;
		case 'acc' :				
			if(!file_exists ("data/acc_surat.php")) die ("Sorry Empty Page!"); 
			include "data/acc_surat.php"; break;

	# EDIT SURAT KETERANGAN UMUM
		case 'edit_undangan' :				
			if(!file_exists ('form_edit_surat/edit_undangan.php')) die ("Sorry Empty Page!"); 
			include 'form_edit_surat/edit_undangan.php';	 break;	
		case 'edit_pengantar' :				
			if(!file_exists ('form_edit_surat/edit_pengantar.php')) die ("Sorry Empty Page!"); 
			include 'form_edit_surat/edit_pengantar.php';	 break;	
		case 'edit_pemberitahuan' :				
			if(!file_exists ('form_edit_surat/edit_pemberitahuan.php')) die ("Sorry Empty Page!"); 
			include 'form_edit_surat/edit_pemberitahuan.php';	 break;	
		case 'edit_himbauan' :				
			if(!file_exists ('form_edit_surat/edit_himbauan.php')) die ("Sorry Empty Page!"); 
			include 'form_edit_surat/edit_himbauan.php';	 break;	
		case 'edit_pdinas' :				
			if(!file_exists ('form_edit_surat/edit_pd.php')) die ("Sorry Empty Page!"); 
			include 'form_edit_surat/edit_pd.php';	 break;
		case 'cetak_pdinas' :				
			if(!file_exists ('form_edit_surat/cetak_pdinas.php')) die ("Sorry Empty Page!"); 
			include 'form_edit_surat/cetak_pdinas.php';	 break;
		case 'edit_jawaban' :				
			if(!file_exists ('form_edit_surat/edit_jawaban.php')) die ("Sorry Empty Page!"); 
			include 'form_edit_surat/edit_jawaban.php';	 break;	

		case 'edit_suketusaha' :				
			if(!file_exists ('form_edit_surat/edit_suketusaha.php')) die ("Sorry Empty Page!"); 
			include 'form_edit_surat/edit_suketusaha.php';	 break;		
		case 'edit_sukettmpusaha' :				
			if(!file_exists ('form_edit_surat/edit_sukettmpusaha.php')) die ("Sorry Empty Page!"); 
			include 'form_edit_surat/edit_sukettmpusaha.php';	 break;		
		case 'edit_suketpbarang' :				
			if(!file_exists ("form_edit_surat/edit_suketbarang.php")) die ("Sorry Empty Page!"); 
			include "form_edit_surat/edit_suketbarang.php"; break;		
		case 'edit_suketpternak' :				
			if(!file_exists ("form_edit_surat/edit_suketternak.php")) die ("Sorry Empty Page!"); 
			include "form_edit_surat/edit_suketternak.php"; break;	
		case 'edit_sukettmampuv1' :				
			if(!file_exists ("form_edit_surat/edit_sukettmampu.php")) die ("Sorry Empty Page!"); 
			include "form_edit_surat/edit_sukettmampu.php"; break;	
		case 'edit_sukettmampuv2' :				
			if(!file_exists ("form_edit_surat/edit_sukettmampuu.php")) die ("Sorry Empty Page!"); 
			include "form_edit_surat/edit_sukettmampuu.php"; break;	
		case 'edit_suketrtm' :				
			if(!file_exists ("form_edit_surat/edit_suketrtms.php")) die ("Sorry Empty Page!"); 
			include "form_edit_surat/edit_suketrtms.php"; break;	
		case 'edit_suketpenghasilan' :				
			if(!file_exists ("form_edit_surat/edit_suketpenghasilan.php")) die ("Sorry Empty Page!"); 
			include "form_edit_surat/edit_suketpenghasilan.php"; break;	
		case 'edit_suketortu' :				
			if(!file_exists ("form_edit_surat/edit_suketortu.php")) die ("Sorry Empty Page!"); 
			include "form_edit_surat/edit_suketortu.php"; break;	
		case 'edit_suketanak' :				
			if(!file_exists ("form_edit_surat/edit_suketanak.php")) die ("Sorry Empty Page!"); 
			include "form_edit_surat/edit_suketanak.php"; break;	
		case 'edit_suketmenikah' :				
			if(!file_exists ("form_edit_surat/edit_suketmenikah.php")) die ("Sorry Empty Page!"); 
			include "form_edit_surat/edit_suketmenikah.php"; break;	
		case 'edit_suketkematian' :				
			if(!file_exists ("form_edit_surat/edit_suketmati.php")) die ("Sorry Empty Page!"); 
			include "form_edit_surat/edit_suketmati.php"; break;	
		case 'edit_suketbepergian' :				
			if(!file_exists ("form_edit_surat/edit_suketbepergian.php")) die ("Sorry Empty Page!"); 
			include "form_edit_surat/edit_suketbepergian.php"; break;	
		case 'edit_suketbedaid' :				
			if(!file_exists ("form_edit_surat/edit_suketbedaid.php")) die ("Sorry Empty Page!"); 
			include "form_edit_surat/edit_suketbedaid.php"; break;	
		case 'edit_suketdomisililbg' :				
			if(!file_exists ("form_edit_surat/edit_suketdomisililbg.php")) die ("Sorry Empty Page!"); 
			include "form_edit_surat/edit_suketdomisililbg.php"; break;	
		case 'edit_suketaw' :				
			if(!file_exists ("form_edit_surat/edit_suketaw.php")) die ("Sorry Empty Page!"); 
			include "form_edit_surat/edit_suketaw.php"; break;
		case 'edit_suketlain2' :	
			if(!file_exists ("form_edit_surat/edit_suketlain.php")) die ("Sorry Empty Page!"); 
			include "form_edit_surat/edit_suketlain.php"; break;
		case 'edit_skkb' :	
			if(!file_exists ("form_edit_surat/edit_skkb.php")) die ("Sorry Empty Page!"); 
			include "form_edit_surat/edit_skkb.php"; break;	
		case 'edit_suketdomisili' :				
			if(!file_exists ("form_edit_surat/edit_suketdomisili.php")) die ("Sorry Empty Page!"); 
			include "form_edit_surat/edit_suketdomisili.php"; break;	
		case 'edit_sutarpindah' :				
			if(!file_exists ("form_edit_surat/edit_sutarpindah.php")) die ("Sorry Empty Page!"); 
			include "form_edit_surat/edit_sutarpindah.php"; break;	
		case 'edit_suketkelahiran' :				
			if(!file_exists ("form_edit_surat/edit_suketlahir.php")) die ("Sorry Empty Page!"); 
			include "form_edit_surat/edit_suketlahir.php"; break;	
		case 'edit_suketpenguburan' :				
			if(!file_exists ("form_edit_surat/edit_suketpenguburan.php")) die ("Sorry Empty Page!"); 
			include "form_edit_surat/edit_suketpenguburan.php"; break;
		case 'edit_f121' :				
			if(!file_exists ("form_edit_surat/edit_f121.php")) die ("Sorry Empty Page!"); 
			include "form_edit_surat/edit_f121.php"; break;	

		case 'edit_n1-n6' :				
			if(!file_exists ("form_edit_surat/edit_n1-n6.php")) die ("Sorry Empty Page!"); 
			include "form_edit_surat/edit_n1-n6.php"; break;
		case 'cetak_n1-n6' :				
			if(!file_exists ("form_edit_surat/cetak_n1-n6.php")) die ("Sorry Empty Page!"); 
			include "form_edit_surat/cetak_n1-n6.php"; break;	
		case 'n6' :				
			if(!file_exists ("staff/n6.php")) die ("Sorry Empty Page!"); 
			include "staff/n6.php"; break;
		case 'edit_n6' :				
			if(!file_exists ("form_edit_surat/edit_n6.php")) die ("Sorry Empty Page!"); 
			include "form_edit_surat/edit_n6.php"; break;

		case 'edit_suketpmenikah' :				
			if(!file_exists ("form_edit_surat/edit_suketpmenikah.php")) die ("Sorry Empty Page!"); 
			include "form_edit_surat/edit_suketpmenikah.php"; break;
		case 'edit_belumnikah' :				
			if(!file_exists ("form_edit_surat/edit_suketbmenikah.php")) die ("Sorry Empty Page!"); 
			include "form_edit_surat/edit_suketbmenikah.php"; break;
		case 'edit_dudajanda' :				
			if(!file_exists ("form_edit_surat/edit_dudajanda.php")) die ("Sorry Empty Page!"); 
			include "form_edit_surat/edit_dudajanda.php"; break;
		case 'edit_pstatus' :				
			if(!file_exists ("form_edit_surat/edit_pstatus.php")) die ("Sorry Empty Page!"); 
			include "form_edit_surat/edit_pstatus.php"; break;

			
		case 'edit_sukettanah' :				
			if(!file_exists ("form_edit_surat/edit_sukettanah.php")) die ("Sorry Empty Page!"); 
			include "form_edit_surat/edit_sukettanah.php"; break;													
		case 'edit_sporadik' :				
			if(!file_exists ("form_edit_surat/edit_sporadik.php")) die ("Sorry Empty Page!"); 
			include "form_edit_surat/edit_sporadik.php"; break;
		case 'edit_sewatanah' :				
			if(!file_exists ("form_edit_surat/edit_sewatanah.php")) die ("Sorry Empty Page!"); 
			include "form_edit_surat/edit_sewatanah.php"; break;
		case 'edit_jualbelitanah' :				
			if(!file_exists ("form_edit_surat/edit_jualbelitanah.php")) die ("Sorry Empty Page!"); 
			include "form_edit_surat/edit_jualbelitanah.php"; break;
		case 'edit_gadai' :				
			if(!file_exists ("form_edit_surat/edit_gadai.php")) die ("Sorry Empty Page!"); 
			include "form_edit_surat/edit_gadai.php"; break;
		case 'edit_pass' :				
			if(!file_exists ("data/edit_password.php")) die ("Sorry Empty Page!"); 
			include "data/edit_password.php"; break;

		default:
			if(!file_exists ("main_stf.php")) die ("Empty Main Page!"); 
			include "main_stf.php";						
		break;
	}
}
?>