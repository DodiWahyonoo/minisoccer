<script type="text/javascript">

	function MM_jumpMenu(targ,selObj,restore){ //v3.0 
	eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'"); 
		if (restore) selObj.selectedIndex=0; 
	} 
	
	// mail IN
	/////mail archive IN
	function ArchiveMailIn() {
		window.location = "main.php?page=../../modules/user/mail/in/mail.archive.view.php&title=Surat Masuk";}
	
	function SearchArchiveMailIn() {
	    var id   = document.getElementById("perihal").value;
		var tjn  = document.getElementById("tujuan").value;
		window.location = "main.php?page=../../modules/user/mail/in/mail.archive.view.php&cari=1&perihal="+id+"&bid="+tjn+"&title=Surat Masuk";}
	
	function SearchArchiveMailInAll() {
		window.location = "main.php?page=../../modules/user/mail/in/mail.archive.view.php&title=Surat Masuk";}	
	
	///// close mail archive	IN
	function addMailIn() {
		window.location = "main.php?page=../../modules/user/mail/in/mail.add.php&title=Surat Masuk";	}
	
	function MailInEdit() {
	var id   = document.getElementById("idMailIn").value;
		window.location = "main.php?page=../../modules/user/mail/in/mail.edit.php&idMailIn="+id+"&title=Surat Masuk";}	
	
	function backViewMailIn() {
		window.location = "main.php?page=../../modules/user/mail/in/mail.view.php&title=Surat Masuk";}
	
	function SearchMailIn() {
	    var id   = document.getElementById("perihal").value;
		var tjn  = document.getElementById("tujuan").value;
		window.location = "main.php?page=../../modules/user/mail/in/mail.view.php&cari=1&perihal="+id+"&bid="+tjn+"&title=Surat Masuk";}
	
	function SearchMailInAll() {
		window.location = "main.php?page=../../modules/user/mail/in/mail.view.php&title=Surat Masuk";}
		
	function SearchMailInReport() {
	    var id   = document.getElementById("namaagt").value;
		window.location = "main.php?page=moduls/report/report.php&hal=1&cari=1&namaagt="+id;}
	//close mail IN
	
	// mail OUT
	/////mail archive OUT
	function ArchiveMailOut() {
		window.location = "main.php?page=../../modules/user/mail/out/mail.archive.view.php&title=Surat Keluar";	}
	
	function SearchArchiveMailOut() {
	    var id   = document.getElementById("perihal").value;
		var tjn  = document.getElementById("tujuan").value;
		window.location = "main.php?page=../../modules/user/mail/out/mail.archive.view.php&cari=1&perihal="+id+"&bid="+tjn+"&title=Surat Keluar";}
	
	function SearchArchiveMailOutAll() {
		window.location = "main.php?page=../../modules/user/mail/out/mail.archive.view.php&title=Surat Keluar";}	
	
	///// close mail archive	OUT
	function addMailOut() {
		window.location = "main.php?page=../../modules/user/mail/out/mail.add.php&title=Surat Keluar";	}
	
	function MailOutEdit() {
	var id   = document.getElementById("idMailOut").value;
		window.location = "main.php?page=../../modules/user/mail/out/mail.edit.php&idMailOut="+id+"&title=Surat Keluar";}	
	
	function backViewMailOut() {
		window.location = "main.php?page=../../modules/user/mail/out/mail.view.php&title=Surat Keluar";}
	
	function SearchMailOut() {
	    var id   = document.getElementById("perihal").value;
		var tjn  = document.getElementById("tujuan").value;
		window.location = "main.php?page=../../modules/user/mail/out/mail.view.php&cari=1&perihal="+id+"&bid="+tjn+"&title=Surat Keluar";}
	
	function SearchMailOutAll() {
		window.location = "main.php?page=../../modules/user/mail/out/mail.view.php&title=Surat Keluar";}
		
	function SearchMailOutReport() {
	    var id   = document.getElementById("namaagt").value;
		window.location = "main.php?page=moduls/report/report.php&hal=1&cari=1&namaagt="+id;	}
	//close mail OUT
	

	
	// report IN / OUT
	function SearchReportMailOut() {
	    var id   = document.getElementById("perihal").value;
		var tjn  = document.getElementById("tujuan").value;
		window.location = "main.php?page=moduls/report/mail.in.php&cari=1&perihal="+id+"&bid="+tjn;}
	
	function SearchReprotMailOutAll() {
		window.location = "main.php?page=moduls/report/mail.in.php";}
		
	function SearchReportMailOut() {
	    var id   = document.getElementById("perihal").value;
		var tjn  = document.getElementById("tujuan").value;
		window.location = "main.php?page=moduls/report/mail.out.php&cari=1&perihal="+id+"&bid="+tjn;}
	
	function SearchReportMailOutAll() {
		window.location = "main.php?page=moduls/report/mail.out.view.php";}
	//
</script>
