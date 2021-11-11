<?php
// fungsi balikan tanggal

function split_tanggal($sparator,$tanggal){
	list($tgl,$bln,$thn) = explode($sparator,$tanggal);
	return $thn.$sparator.$bln.$sparator.$tgl;
}

// Setting
function kodeJenisSurat($kode){
$sqlGetDescCode = mysql_query("SELECT id,nama FROM situ_jenis_surat WHERE id='$kode'");
$rowGetDescCode = mysql_fetch_row($sqlGetDescCode);
	echo"<a title='$rowGetDescCode[1]'>$rowGetDescCode[0]</a>";		
}

function kodeKeaslianSurat($kode){
$sqlGetDescCode = mysql_query("SELECT id,nama FROM situ_keaslian WHERE id='$kode'");
$rowGetDescCode = mysql_fetch_row($sqlGetDescCode);
	echo"<a title='$rowGetDescCode[1]'>$rowGetDescCode[0]</a>";		
}

function kodeSifatSurat($kode){
$sqlGetDescCode = mysql_query("SELECT id,nama FROM situ_sifat WHERE id='$kode'");
$rowGetDescCode = mysql_fetch_row($sqlGetDescCode);
	echo"<a title='$rowGetDescCode[1]'>$rowGetDescCode[0]</a>";		
}

function kodeKeamananSurat($kode){
$sqlGetDescCode = mysql_query("SELECT id,nama FROM situ_keamanan WHERE id='$kode'");
$rowGetDescCode = mysql_fetch_row($sqlGetDescCode);
	echo"<a title='$rowGetDescCode[1]'>$rowGetDescCode[0]</a>";		
}

function kodePenyampaiannSurat($kode){
$sqlGetDescCode = mysql_query("SELECT id,nama FROM situ_type_penyampaian WHERE id='$kode'");
$rowGetDescCode = mysql_fetch_row($sqlGetDescCode);
	echo"<a title='$rowGetDescCode[1]'>$rowGetDescCode[0]</a>";		
}

function ViewSetting($table,$set,$title_edit,$title_drop){
	$sqlSetting = mysql_query("SELECT * FROM $table ");
	while ($rowSet = mysql_fetch_array($sqlSetting)){
		$bgtabeltop  = "#F0F0F0";
		$bgtabeldown = "#FFFFFF";
		$mouseon = "#CCCCCC";		
		if($i % 2 == 0){ $bg = $bgtabeltop; } else { $bg = $bgtabeldown; } ?>
		  <tr bgcolor="<? echo $bg?>" onmouseover="this.style.backgroundColor='<?=$mouseon;?>'" onmouseout="this.style.backgroundColor=''" >  
                  <td class="tblisi" align="center"><? echo $i+1?>.</td>
                  <td class="tblisi" align="center"><? echo $rowSet[0]?></td>
				  <td class="tblisi" align="left"><? echo $rowSet[1]?></td>			
                  <td class="tblisi" align="center"><a href="main.php?page=../../modules/admin/home.php&set=<?=$set;?>&menu_setting=<?=$title_edit;?>&aksi=edit&idtable=<?=$rowSet[0];?>&table=<?=$table;?>"><img src="../../images/content/edit.png" border="0" title="Edit <?=$rowSet[1];?>"></a></td>
				  <td class="tblisi" align="center"><a href="main.php?page=../../modules/admin/home.php&set=<?=$set;?>&menu_setting=<?=$title_drop;?>&aksi=drop&idtable=<?=$rowSet[0];?>&table=<?=$table;?>"><img src="../../images/content/drop.png" border="0" title="Hapus <?=$rowSet[1];?>"></a></td>
                </tr>
		   <tr>
<? $i++;} 
}

function AddSetting($table,$set,$idtable,$nama,$title){
	echo "<script type='text/javascript'>
		function home(){
			window.location = 'main.php?page=../../modules/admin/home.php&set=$set&menu_setting=$title';
		}
	</script>";
	
	$sqlSetting = mysql_query("INSERT INTO $table values('$idtable','$nama')");
	if($sqlSetting){
		echo "Tambah Data Berhasil Disimpan<br>";
				echo "<input type=\"submit\" name=\"simpan\" value=\"OK\" class=\"frm\" onclick='home();'>";
	}else{
		echo "<font color='red' >Gagal Tambah Data </font><br>";
		echo "<input type=\"submit\" name=\"simpan\" value=\"OK\" class=\"frm\" onclick='javascript:history.go(-1);'>";
	}
}

function DropSetting($table,$set,$idtable,$title){
	echo "<script type='text/javascript'>
		function home(){
			window.location = 'main.php?page=../../modules/admin/home.php&set=$set&menu_setting=$title';
		}
	</script>";
	$sqlSetting = mysql_query("DELETE FROM $table WHERE id ='$idtable'");
	if($sqlSetting){
		echo "Hapus Data Berhasil<br>";
				echo "<input type=\"submit\" name=\"simpan\" value=\"OK\" class=\"frm\" onclick='home();'>";
	}else{
		echo "<font color='red' >Gagal Hapus Data </font><br>";
		echo "<input type=\"submit\" name=\"simpan\" value=\"OK\" class=\"frm\" onclick='javascript:history.go(-1);'>";
	}
}
//close setting
function datediff($startPjm,$endPjm)
{
	 $intervalPjm=strtotime($endPjm) - strtotime($startPjm);
	 $hasilPjm=$intervalPjm/3600;	 
	 $waktuPjm=explode(".",$hasilPjm);
	 $jamPjm=$waktuPjm[0];
	 if ($jamPjm >= 24)
	 {
	 	$hariPjm = round($jamPjm / 24);
	}
	 return $hariPjm;
	 
}

function balik_tanggal($tanggalPjm)
{
	list($hariPjm,$bulanPjm,$tahunPjm)=explode('-',$tanggalPjm);
	$tglPjm = $tahunPjm."-".$bulanPjm."-".$hariPjm;
	return $tglPjm;
}

function fmenu($a,$b) {
if($a==$b) { $bg = "background=images/content/btn2.jpg"; } else { $bg = "background=images/content/btn1.jpg"; }
	return $bg;
}
function fnavigasi($path,$no,$back,$next,$page) {
  	if ($no > 1) {
		echo "<a href=\"$path&no=$back\" class=frm><<<</a> ";
	} else {
		echo "<<< ";
	}
	echo "<select name=jump class=frm onChange=\"MM_jumpMenu('parent',this,0)\">";
	for ($i=1; $i<=$page; $i++) {
	echo "<option class=frm value=\"$path&no=$i\"";
		if ($no == $i) { echo " selected";}
		echo ">$i | $page</option>";
		}
		echo "</select>";
		if ($no<$page) {
			echo " <a href=\"$path&no=$next\" class=frm>>>></a>";
		} else {
			echo " >>>";
		}
	}
	
function timer() {
	$time = explode(" ",microtime());
	return $time[1]+$time[0];
}	

function eselon($parent,$hak){
$sqlTujuan = mysql_query ("SELECT * from situ_eselon where eselon_id='$hak'");
	while ($rowTujuan = mysql_fetch_array($sqlTujuan)){
	echo"<option value='$rowTujuan[1]'";
	if($rowTujuan[1]==$parent){ 
		echo "$rowTujuan[1] selected='selected'";
		} 
		echo "'>$rowTujuan[3]</option>"; 
	}
}

function jenisSurat($idJenis){
   $sqlJenisSurat = mysql_query ("SELECT * from situ_jenis_surat");
   while ($rowJenisSurat = mysql_fetch_array($sqlJenisSurat)){
	echo"<option value='$rowJenisSurat[0]'";
	if($rowJenisSurat[0]==$idJenis){ 
		echo "$rowJenisSurat[0] selected='selected'";
	} 
		echo "'>$rowJenisSurat[1]</option>"; 
	}
}

function keaslian($asli){
	$sqlAsli = mysql_query ("SELECT * from situ_keaslian");
	while ($rowAsli = mysql_fetch_array($sqlAsli)){
	echo"<option value='$rowAsli[0]'";
		if($rowAsli[0]==$asli){ 
			echo "$rowAsli[0] selected='selected'";
		} 
		echo "'>$rowAsli[1]</option>"; 
	}
}

function sifatSurat($sifat){
	$sqlSifat = mysql_query ("SELECT * from situ_sifat");
	while ($rowSifat = mysql_fetch_array($sqlSifat)){
	echo"<option value='$rowSifat[0]'";
	if($rowSifat[0]==$sifat){ 
	echo "$rowSifat[0] selected='selected'";
	} 
		echo "'>$rowSifat[1]</option>"; 
	}
}

function keamanan($aman){
	$sqlAman = mysql_query ("SELECT * from situ_keamanan");
	while ($rowAman = mysql_fetch_array($sqlAman)){
	echo"<option value='$rowAman[0]'";
	if($rowAman[0]==$aman){ 
		echo "$rowAman[0] selected='selected'";
		} 
		echo "'>$rowAman[1]</option>"; 
	}
}		

function typePenyampaian($type){
$sqlType = mysql_query ("SELECT * from situ_type_penyampaian");
	while ($rowType = mysql_fetch_array($sqlType)){
	echo"<option value='$rowType[0]'";
	if($rowType[0]==$type){ 
		echo "$rowType[0] selected='selected'";
		}
		echo "'>$rowType[1]</option>"; 
	}
}

function typePengiriman($type){
$sqlType = mysql_query ("SELECT * from situ_via");
	while ($rowType = mysql_fetch_array($sqlType)){
	echo"<option value='$rowType[0]'";
	if($rowType[0]==$type){ 
		echo "$rowType[0] selected='selected'";
		}
		echo "'>$rowType[1]</option>"; 
	}
}

$tglblnyrs=" 
	<select name='nmtgl' class='frm'>
	    <option value='01'>1</option>
		<option value='02'>2</option>
		<option value='03'>3</option>
		<option value='04'>4</option>
		<option value='05'>5</option>
		<option value='06'>6</option>
		<option value='07'>7</option>
		<option value='08'>8</option>
		<option value='09'>9</option>
		<option value='10'>10</option>
		<option value='11'>11</option>
		<option value='12'>12</option>
		<option value='13'>13</option>
		<option value='14'>14</option>
		<option value='15'>15</option>
		<option value='16'>16</option>
		<option value='17'>17</option>
		<option value='18'>18</option>
		<option value='19'>19</option>
		<option value='20'>20</option>
		<option value='21'>21</option>
		<option value='22'>22</option>
		<option value='23'>23</option>
		<option value='24'>24</option>
		<option value='25'>25</option>
		<option value='26'>26</option>
		<option value='27'>27</option>
		<option value='28'>28</option>
		<option value='29'>29</option>
		<option value='30'>30</option>
		<option value='31'>31</option>
  </select> 
  <select name='nmbln' class='frm'>
		<option value='01'>1</option>
		<option value='02'>2</option>
		<option value='03'>3</option>
		<option value='04'>4</option>
		<option value='05'>5</option>
		<option value='06'>6</option>
		<option value='07'>7</option>
		<option value='08'>8</option>
		<option value='09'>9</option>
		<option value='10'>10</option>
		<option value='11'>11</option>
		<option value='12'>12</option>
  </select>
  <input type='text' name='nmthn' maxlength='4' size='4' class='frm'>";
?>