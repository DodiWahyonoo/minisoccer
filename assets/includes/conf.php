<?php
	//set configurasi database
	$dbhost="localhost";
	$dbuser="root";
	$dbpass="root";
	$dbase="db_sppd_bpkd_ciamis";
	
	if (!$conn=mysql_connect($dbhost,$dbuser,$dbpass)) {
		echo mysql_error();
	}	
	mysql_select_db($dbase);
	
	$title_report = "SPPD";
	$footer = "Copyright &copy; 2014-2018 Badan Pengelolaan Keuangan Daerah Kab. Ciamis - All rights reserved.";
	//set page
	$pathpage = "main.php?page=modules";
	$pathprintpage = "modules";
	$pathpagehome = "main.php?page=home.php&set=";
	$pathlogout = "http://$dbhost/etc/modules";
	$pathpagesetting = "main.php?page=welcome.php";
	$pathfile = "../../file/";

	// header di simpan di 'images/content/'
	$pathimg = "images/content/";
	$pathimgphoto = "images/photo/";
	$pathimglogo = "images/logo/";
	$nophoto = "nophoto.jpg";
	
	$bggaris = "bg_garis.gif";
	
	$pending = "warning.gif";
	$apply   = "ok.png";
	$fileimg = "file.gif";
	$send    = "apply.png";
	
	// untuk merubah header tampilan Admin mulai dari $admin_h1 sampai admin_h5
	$pathimghead = "images/header/";
	$admin_h1  = "h1.jpg";
	$admin_hbg = "hbg.jpg";
	$menu      = "bg.gif";
	
	$bgcolorcontent = "#F3F3F3";
	
	$home			= "home.gif";
	$entrydata		= "entrydata2.gif";
	$cetakst		= "cetakst.gif";
	$cetakrekap		= "cetakrekap.gif";
	$cetakrincian	= "cetakrincian.gif";
	$monitoringhp	= "monitoringhp.gif";
	
	//$bgbody			= "bg.png";
	$logout			= "logout.gif";
	$loginform		= "loginform.png";
	$loginformfoot	= "loginformfoot.gif";
	$login			= "key.jpg";
	$garis_menu		= "garis_menu.gif";
	$welcome		= "welcome.jpg";
	// header di simpan di 'images/content/'
	// main_situ1-9.gif
	// untuk merubah header tampilan user mulai dari $main_h1 sampai $main_h7
	$link = "link.png";
	
	// set image setting
	$cpanel = "cpanel.png";
	$set1 = "ok.png";
	$set2 = "ok.png";
	$set3 = "ok.png";
	$set4 = "ok.png";

	//photo content head


	//
	
	$uname = "uname.jpg";
	$passwd ="pwd.jpg";
	$edit = "modify.png";
	$delete = "delete.png";
	$add = "add.png";
	$warning = "warning.png";
	$comment="comment.png";

	
	//photo status
	$single = "single.png";
	$married = "married.png";
	$men = "men.png";
	$women = "women.png";
	
	//photo content
	$print = "print.png";	
	$printtext ="print.jpg";
	$iconfile ="PDF.gif";
	$cancel = "cancel.png";
	
	//table
	$bgtabeltop  = "#F0F0F0";
	$bgtabeldown = "#FFFFFF";
	$mouseon = "#CCCCCC";
	
	//
	
	// text image
	$logoLogin ="garuda-indonesia.jpg";
	
	$dataanggota = "sip_anggota.jpg";
?>