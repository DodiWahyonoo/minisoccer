<script type="text/javascript" language="javascript">
	function confirmDel(id){
		if(confirm('Delete Data ? ' +id)){
			return true;
		} else {
			return false;
		}
	}
	
	function confirmUpdate(id){
		if(confirm('Update Data ? ' +id)){
			return true;
		} else {
			return false;
		}
	}

	function srchDataHere(mod,filename){
		var data   = document.getElementById("srchData").value;
		window.location = 'main.php?page=modules/'+mod+'/'+filename+'&srchData='+data+'&search=ON';
	}
	
	function cekData(mod,filename){
		var datanrp   = document.getElementById("nrp").value;
		window.location = 'main.php?page=modules/'+mod+'/'+filename+'&nrp='+datanrp;
	}
	
	function MM_jumpMenu(targ,selObj,restore){ //v3.0 
	eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'"); 
		if (restore) selObj.selectedIndex=0; 
	} 
	
	function pageOn(mod,filename) {
		window.location = 'main.php?page=modules/'+mod+'/'+filename;
	}
	
	function pagePrintPreview(mod,filename) {
		window.location = 'modules/'+mod+'/'+filename;
	}

</script>
<?
function settingAddr($table,$id){
	$sql = mysql_query("SELECT nama FROM $table WHERE id='$id'");
	$row = mysql_fetch_row($sql);
	echo "$row[0]";
}

function ViewSetting($table,$set,$title_edit,$title_drop){
	$sqlSetting = "SELECT * FROM $table";
	$res = mysql_query($sqlSetting);
	$jumlah = mysql_num_rows($res);
	mysql_free_result($res);
	
	if (!$no) $no = 1;
	$batas = ($no - 1) * 10;
	$kel = $jumlah/10;
	if($kel==floor($jumlah/10)) { $page = $kel; } else { $page = floor($jumlah/10)+1; }
	
	$next = $no+1;
	$back = $no-1;
	$sqlP = mysql_query($sqlSetting." LIMIT $batas, 5");
	while ($rowSet = mysql_fetch_array($sqlP)){
		$bgtabeltop  = "#F0F0F0";
		$bgtabeldown = "#FFFFFF";
		$mouseon = "#CCCCCC";		
		if($i % 2 == 0){ $bg = $bgtabeltop; } else { $bg = $bgtabeldown; } ?>
		  <tr bgcolor="<? echo $bg?>" onmouseover="this.style.backgroundColor='<?=$mouseon;?>'" onmouseout="this.style.backgroundColor=''" >  
                  <td class="tblisi" align="center"><? echo $i+1?>.</td>
                  <td class="tblisi" align="center"><? echo $rowSet[0]?></td>
				  <td class="tblisi" align="left"><? echo $rowSet[1]?></td>			
                  <td class="tblisi" align="center"><a href="main.php?page=home.php&set=<?=$set;?>&menu_setting=<?=$title_edit;?>&aksi=edit&idtable=<?=$rowSet[0];?>&table=<?=$table;?>"><img src="images/content/edit.png" border="0" title="Edit <?=$rowSet[1];?>"></a></td>
				  <td class="tblisi" align="center"><a href="main.php?page=home.php&set=<?=$set;?>&menu_setting=<?=$title_drop;?>&aksi=drop&idtable=<?=$rowSet[0];?>&table=<?=$table;?>"><img src="images/content/drop.png" border="0" title="Hapus <?=$rowSet[1];?>" onClick="return confirmDel('<? print $rowSet[1];?>')"></a></td>
                </tr>
		   <tr>
<? $i++;} 
}

function AddSetting($table,$set,$idtable,$nama,$title){
	$sqlSetting = mysql_query("INSERT INTO $table values('$idtable','$nama')");
	if($sqlSetting){
		echo "	<script>
					alert('Input Data Succesful .');
					window.location = 'main.php?page=home.php&set=$set&menu_setting=$title';
				</script>";
	}else{
		echo "	<script>
					alert('Failed Input Data.');
					window.location = 'main.php?page=home.php&set=$set&menu_setting=$title';
				</script>";
	}
}

function DropSetting($table,$set,$idtable,$title){
	$sqlSetting = mysql_query("DELETE FROM $table WHERE id ='$idtable'");
	if($sqlSetting){
		echo "	<script>
					alert('Succesful Deleted.');
					window.location = 'main.php?page=home.php&set=$set&menu_setting=$title';
				</script>";
	}else{
		echo "	<script>
					alert('Failed Deleted.');
					window.location = 'main.php?page=home.php&set=$set&menu_setting=$title';
				</script>";
	}
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


function DateToIndo($date) { // fungsi atau method untuk mengubah tanggal ke format indonesia
   // variabel BulanIndo merupakan variabel array yang menyimpan nama-nama bulan
		$BulanIndo = array("Januari", "Februari", "Maret",
						   "April", "Mei", "Juni",
						   "Juli", "Agustus", "September",
						   "Oktober", "November", "Desember");
	
		$tahun = substr($date, 0, 4); // memisahkan format tahun menggunakan substring
		$bulan = substr($date, 5, 2); // memisahkan format bulan menggunakan substring
		$tgl   = substr($date, 8, 2); // memisahkan format tanggal menggunakan substring
		
		$result = $tgl . " " . $BulanIndo[(int)$bulan-1] . " ". $tahun;
		return($result);
}
	
	//echo(DateToIndo("2011-08-25")); //Akan menghasilkan 25 Agustus 2011
	
function DateToDay($date){
	//$tanggal = "2001-09-11"; // tgl yang akan dicari nama harinya
 
	$query = "SELECT datediff('$date', CURDATE()) as selisih";
	$hasil = mysql_query($query);
	$data  = mysql_fetch_array($hasil);
	 
	$selisih = $data['selisih'];
	 
	$x  = mktime(0, 0, 0, date("m"), date("d")+$selisih, date("Y"));
	$namahari = date("l", $x);
	 
	if ($namahari == "Sunday") $namahari = "Minggu";
	else if ($namahari == "Monday") $namahari = "Senin";
	else if ($namahari == "Tuesday") $namahari = "Selasa";
	else if ($namahari == "Wednesday") $namahari = "Rabu";
	else if ($namahari == "Thursday") $namahari = "Kamis";
	else if ($namahari == "Friday") $namahari = "Jumat";
	else if ($namahari == "Saturday") $namahari = "Sabtu";
	return($namahari);
}
?>