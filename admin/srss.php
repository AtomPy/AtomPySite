<head><meta http-equiv="refresh" content="5" ></head><?php
//$lat = isset($_GET['lat'])?$_GET['lat']:'';    //either get nav or clear the string
//$long = isset($_GET['long'])?$_GET['long']:'';    //either get nav or clear the string
//$offset = isset($_GET['offset'])?$_GET['offset']:'';    //either get nav or clear the string
//$type = isset($_GET['type'])?$_GET['type']:'0';    //either get nav or clear the string
$lat = 42.285;
$long = -85.626;
$offset = -5;
$zenith=90+50/60;
date_default_timezone_set("America/New_York");

$AMturnon = strtotime(date("Y-m-d"))+19800;      // 05:30 turn on time
$sunrisetimelong = strtotime(date("M d Y"). " " .date_sunrise(time(), SUNFUNCS_RET_STRING, $lat, $long, $zenith, $offset));
$sunsettimelong = strtotime(date("M d Y"). " " .date_sunset(time(), SUNFUNCS_RET_STRING, $lat, $long, $zenith, $offset));
$PMturnoff = strtotime(date("Y-m-d"))+82800;      // 23:00 turn off time
$midnight = strtotime(date("Y-m-d"))+86400;
//$AM0 = strtotime(date("M d Y"), " " .date_sunrise(time(), SUNFUNCS_RET_STRING, $lat, $long, $zenith, $offset));
        
if ($lat == '' or $long == '' or $offset == ''){echo "error";}
else{

    
    //$vaue=strtotime(date("M d Y"). " " .date_sunrise(time(), SUNFUNCS_RET_STRING, $lat, $long, $zenith, $offset));
    //$val2=($vaue+18000);
    //$sunrise_on=strtotime(date("M d Y"))+19800;
    echo "<br>Current time ".date("h:i:s A")." &nbsp;&nbsp;(".date("H:i:s").")";
    //echo "<p><p>Sunrise- ".date_sunrise(time(), SUNFUNCS_RET_STRING, $lat, $long, $zenith, $offset);
    //echo "<br>Sunset- ".date_sunset(time(), SUNFUNCS_RET_STRING, $lat, $long, $zenith, $offset);
    //echo "<br>";
    //echo date("M d Y"). " " .date_sunrise(time(), SUNFUNCS_RET_STRING, $lat, $long, $zenith, $offset);
    //echo "<br>";
    //echo strtotime(date("M d Y"). " " .date_sunrise(time(), SUNFUNCS_RET_STRING, $lat, $long, $zenith, $offset));
    //echo "<br>";
    //echo "$val2";
    //echo "<br>Sunrise_on-";
    //echo "$sunrise_on";
    //echo "<br><P>";
    //echo $PM3;
    //echo "<br><p>";
    //echo time($PM3);
    echo "<br><p>";
    if (strtotime(date("Y-m-d H:i:s"))>$AMturnon)  // 05:30
      {
        echo "After 5:30AM";
        $AM1 = true;
      }
    else
      {
        echo "Before 5:30AM";
        $AM1 = false;
      }
    echo "<br>";
    if (strtotime(date("Y-m-d H:i:s"))>(strtotime(date_sunrise(time(), SUNFUNCS_RET_STRING, $lat, $long, $zenith, $offset))))
      {
        echo "After Sunrise - ".date_sunrise(time(), SUNFUNCS_RET_STRING, $lat, $long, $zenith, $offset);
        $AM2 = true;
      }
    else
      {
        echo "Before Sunrise - ".date_sunrise(time(), SUNFUNCS_RET_STRING, $lat, $long, $zenith, $offset);
        $AM2 = false;
      }
    echo "<br>";
    if (strtotime(date("Y-m-d H:i:s"))>(strtotime(date_sunset(time(), SUNFUNCS_RET_STRING, $lat, $long, $zenith, $offset))))
      {
        echo "After Sunset - ".date_sunset(time(), SUNFUNCS_RET_STRING, $lat, $long, $zenith, $offset);
        $PM1 = true;
      }
    else
      {
        echo "Before Sunset - ".date_sunset(time(), SUNFUNCS_RET_STRING, $lat, $long, $zenith, $offset);
        $PM1 = false;
      }
    echo "<br>";
    if (strtotime(date("Y-m-d H:i:s"))>(strtotime(date("Y-m-d"))+82800))  // 23:00
      {
        echo "After 10:00PM";
        $PM2 = true;
      }
    else
      {
        echo "Before 10:00PM";
        $PM2 = false;
      }
    //echo "<br>";
    //echo date("Y-m-d H:i:s");
   

}
echo "<p>";
if ($AM1 === true and $AM2 === false){echo "Lights are ON-am &nbsp;&nbsp;(".date("H:i:s").") &nbsp;&nbsp;Will Change in ".gmdate("H:i:s", $sunrisetimelong-time());}
else if ($PM1 === true and $PM2 === false){echo "Lights are ON-pm &nbsp;&nbsp;(".date("H:i:s").") &nbsp;&nbsp;Will Change in ".gmdate("H:i:s", $PMturnoff-time());}
else {echo "Lights are OFF";}

if ($AM1 === false){echo "<br>Lights off early AM ".date("h:i:s A")." &nbsp;&nbsp;(".date("H:i:s").") &nbsp;&nbsp;Will Change in ".gmdate("H:i:s", $AMturnon-time());}
if ($AM2 === true and $PM1 === false){echo "<br>Lights off mid day ".date("h:i:s A")." &nbsp;&nbsp;(".date("H:i:s").") &nbsp;&nbsp;Will Change in ".gmdate("H:i:s", $sunsettimelong-time());}
if ($PM2 === true){echo "<br>Lights are off late PM ".date("h:i:s A")." &nbsp;&nbsp;(".date("H:i:s").") &nbsp;&nbsp;Will Change in ".gmdate("H:i:s", $midnight-time());}
//echo "<br>".time();
//echo "<br>".$AMturnon;
echo "<p>AM1=".$AM1;
echo "<br>AM2=".$AM2;
echo "<br>PM1=".$PM1;
echo "<br>PM2=".$PM2;
?>