<?
//////////////////////////////////////////////////////////////////
// 			Fungsi-Fungsi Yang Berkaitan Dengan Tanggal			//
// 					  By Gudel1984@gmail.com					//
// 					  G M F - A e r o A s i a					//
//////////////////////////////////////////////////////////////////

function TanggalMingguIni($format)
{
	$daynr = strftime("%w");
	if ($daynr == 0) $daynr = 7;
    for($i=1; $i<=7; $i++)
	{
      $diff = $i - $daynr;
      $date[] = date($format, strtotime($diff." day"));
    }
    return $date;
}


function TanggalMinggu($week, $year, $format)
{
  $day1time = mktime(0,0,0,1,1,$year);
  $day1nr = date("w", $day1time);
  if ($day1nr == 0) $day1nr = 7;
  ($day1nr < 5) ? $week1 = 1 : $week1 = 0;
  $day1nr--;
  $senin1 = date("Y-m-d", strtotime($year."-01-01 -$day1nr day"));
  $week -= $week1;

  for ($i=0; $i<7; $i++)
  {
    $days = ($week*7)+$i;
    $date[] =  date($format, strtotime("$senin1 $days day"));
  }
    return $date;
}

function jam($hour) //24:29:59 ---> 24:29
{
	$jama = explode(":",$hour);
	$jam_print = $jama[0].":".$jama[1];
	return $jam_print;
}

function FormatTanggal($x) // 2005-05-29 ---> Sunday, May 29th 2005
{
	$tanggal = $x;
	$date = explode("-",$tanggal);
	$nudate = date("l, F jS Y",mktime(0,0,0,$date[1],$date[2],$date[0]));
	return $nudate;
}

function strToDate($stringDate)
{
	$strDate = $stringDate;
	$expldStringDate = explode(",", $stringDate);
	$expldStringDate2 = explode(" ", $expldStringDate[0]);
	$year = trim($expldStringDate[1]);
	$strMonth = trim($expldStringDate2[0]);
	$date = trim($expldStringDate2[1]);
	
	if($strMonth == "Jan" || $strMonth == "January"){
	 $month = 1;
	}
	elseif($strMonth == "Feb" || $strMonth == "February"){
	 $month = 2;
	}
	elseif($strMonth == "Mar" || $strMonth == "March"){
	 $month = 3;
	}
	elseif($strMonth == "Apr" || $strMonth == "April"){
	 $month = 4;
	}
	elseif($strMonth == "May" || $strMonth == "May"){
	 $month = 5;
	}
	elseif($strMonth == "Jun" || $strMonth == "June"){
	 $month = 6;
	}
	elseif($strMonth == "Jul" || $strMonth == "July"){
	 $month = 7;
	}
	elseif($strMonth == "Aug" || $strMonth == "August"){
	 $month = 8;
	}
	elseif($strMonth == "Sep" || $strMonth == "September"){
	 $month = 9;
	}
	elseif($strMonth == "Oct" || $strMonth == "October"){
	 $month = 10;
	}
	elseif($strMonth == "Nov" || $strMonth == "November"){
	 $month = 11;
	}
	elseif($strMonth == "Dec" || $strMonth == "December"){
	 $month = 12;
	}
	$rightDate = date("Y-m-d", mktime(0,0,0,$month,$date,$year));
	return $rightDate;	
}

function KurangTanggal($tanggal1,$tanggal2)
{
	$nuTanggal1 = strtotime($tanggal1);
	$nuTanggal2 = strtotime($tanggal2);
	$HasilunixTime = $nuTangal2 - $nuTanggal1;
	$hasil = strftime("%T",$HasilUnixTime);
	return $hasil;
}

 function time_to_string($t=0)
    {
        if (!$t) return "no time at all";
        if ($t < 0) {
            $neg = 1;
            $t = 0 - $t;
        }

        $days = $t / 86400;
        $days = floor($days);
        $hrs = ($t / 3600) % 24;
        $mins = ($t / 60) % 60;
        $secs = $t % 60;

        $timestring = "";
        if ($neg) $timestring .= "negative ";
        if ($days) {
            $timestring .= "$days day" . ($days==1?"":"s");
            if ($hrs || $mins || $secs) $timestring .= ", ";
        }
        if ($hrs) {
            $timestring .= "$hrs hour" . ($hrs==1?"":"s");
            if ($mins && $secs) $timestring .= ", ";
            if (($mins && !$secs) || (!$mins && $secs)) $timestring .= " and ";
        }
        if ($mins) {
            $timestring .= "$mins min" . ($mins==1?"":"s");
            if ($mins && $secs) $timestring .= ", ";
            if ($secs) $timestring .= " and ";
        }
        if ($secs) $timestring .= "$secs sec" . ($secs==1?"":"s");     
        return $timestring;
    }

class rangoDiasSemana
	{
		function rangoDiasSemana()
		{
			
		}
	
		
		function retornarRangoDiasxSemana($anno, $semana)
		{  
		    
		    $anno = date('Y',mktime(0, 0, 0, 1, 1, $anno));
		    
		    $diaInicial = date('w',mktime(0, 0, 0, 1, 1, $anno));
		    
		    $finSemana = 7-$diaInicial;
		    $diaAño = $diaAño+$finSemana;

		    $diaIni = date('Y/m/d',mktime(0, 0, 0, 1, $diaIni+1, $anno));
		    $diaFin = date('Y/m/d',mktime(0, 0, 0, 1, $finSemana, $anno));
		   
		    
		    if($semana<54)
		    {
			for($sem=2;$sem<=$semana;$sem++)
			{
			    $diaIni = $diaAño + 1;
			    $diaFin = $diaIni + 6;
			    $diaAño = $diaFin;

			    $diaIni = date('Y/m/d',mktime(0, 0, 0, 1, $diaIni, $anno));
			    $diaFin = date('Y/m/d',mktime(0, 0, 0, 1, $diaFin, $anno));
			}
		    }

		    $fechas = array($anno, $diaIni, $diaFin);
		    return $fechas;
		}
	}
	
function stringDate($stringDate)
{
	$strDate = $stringDate;
	$expldStringDate = explode("-", $stringDate);
	$year = trim($expldStringDate[2]);
	$strMonth = trim($expldStringDate[1]);
	$date = trim($expldStringDate[0]);
	
	if($strMonth == "Jan" || $strMonth == "January"){
	 $month = 1;
	}
	elseif($strMonth == "Feb" || $strMonth == "February"){
	 $month = 2;
	}
	elseif($strMonth == "Mar" || $strMonth == "March"){
	 $month = 3;
	}
	elseif($strMonth == "Apr" || $strMonth == "April"){
	 $month = 4;
	}
	elseif($strMonth == "May" || $strMonth == "May"){
	 $month = 5;
	}
	elseif($strMonth == "Jun" || $strMonth == "June"){
	 $month = 6;
	}
	elseif($strMonth == "Jul" || $strMonth == "July"){
	 $month = 7;
	}
	elseif($strMonth == "Aug" || $strMonth == "August"){
	 $month = 8;
	}
	elseif($strMonth == "Sep" || $strMonth == "September"){
	 $month = 9;
	}
	elseif($strMonth == "Oct" || $strMonth == "October"){
	 $month = 10;
	}
	elseif($strMonth == "Nov" || $strMonth == "November"){
	 $month = 11;
	}
	elseif($strMonth == "Dec" || $strMonth == "December"){
	 $month = 12;
	}
	$rightDate = date("Y-m-d", mktime(0,0,0,$month,$date,$year));
	return $rightDate;	
}

function stringDate2($stringDate)
{
	$strDate = $stringDate;
	$expldTime = explode(" ",$stringDate);
	$time = $expldTime[1];
	$expldClusTime = explode(":",$time);
	
	$expldStringDate = explode("-", $stringDate);
	$year = trim($expldStringDate[2]);
	$strMonth = trim($expldStringDate[1]);
	$date = trim($expldStringDate[0]);
	
	if($strMonth == "Jan" || $strMonth == "January"){
	 $month = 1;
	}
	elseif($strMonth == "Feb" || $strMonth == "February"){
	 $month = 2;
	}
	elseif($strMonth == "Mar" || $strMonth == "March"){
	 $month = 3;
	}
	elseif($strMonth == "Apr" || $strMonth == "April"){
	 $month = 4;
	}
	elseif($strMonth == "May" || $strMonth == "May"){
	 $month = 5;
	}
	elseif($strMonth == "Jun" || $strMonth == "June"){
	 $month = 6;
	}
	elseif($strMonth == "Jul" || $strMonth == "July"){
	 $month = 7;
	}
	elseif($strMonth == "Aug" || $strMonth == "August"){
	 $month = 8;
	}
	elseif($strMonth == "Sep" || $strMonth == "September"){
	 $month = 9;
	}
	elseif($strMonth == "Oct" || $strMonth == "October"){
	 $month = 10;
	}
	elseif($strMonth == "Nov" || $strMonth == "November"){
	 $month = 11;
	}
	elseif($strMonth == "Dec" || $strMonth == "December"){
	 $month = 12;
	}
	$rightDate = date("Y-m-d H:i", mktime($expldClusTime[0],$expldClusTime[1],0,$month,$date,$year));
	return $rightDate;	
}
?> 
