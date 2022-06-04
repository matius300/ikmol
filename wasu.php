<?php
system("rm -rf .run.php");
error_reporting(0);

function gass(){
echo "Enter ApiKey : ";
$apikey = trim(fgets(STDIN));
system("clear");
banner();
while(true){
system("rm -rf cookie.txt");
$jancok = file("ua")[rand(0,1037)];
$head = str_replace("\n","",$jancok);
$ua = array("User-Agent: $head");
$url = "http://api.scraperapi.com?api_key=".$apikey."&url=http://kinaumubanu.space/cuwik";
$url1 = "http://api.scraperapi.com?api_key=".$apikey."&url=http://kinaumubanu.space/as2.php";
$inn = curl($url,$ua,"get");
$data = "post";
$end = curl($url1,$ua,"post",$data);
$one = explode('<b>',$end);
$ip = explode('</b>',$one[3])[0];

$cek = strpos($end, "We have successfully sent a commission");
if($cek){
echo "[$ip]berhasil visit...\n";
}
}
}
function curl($url, $headers, $mode="get", $data=0)
        {
        if ($mode == "get" || $mode == "Get" || $mode == "GET")
{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);
}
        elseif ($mode == "post" || $mode == "Post" || $mode == "POST")
{
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie.txt");
$result = curl_exec($ch);
}
        else
{
$result = "Not define";
}
        return $result;
        }
function banner(){
$sc_name = "cashwallet.site";
$sc_version = "1.0";
$banner =
 "\033[1;37m┌\033[1;37m───────────────\033[1;35m•\033[1;32m◥\033[1;33mೋೋ\033[1;32m◤\033[1;35m•\033[1;37m───────────────\033[1;37m┐
\033[1;37m│\033[1;36m╦╔═╦ ╦╔═╗═╗ ╦  ╔═╗╦ ╦╔═╗╔╗╔╔╗╔╔═╗╦  \033[1;37m│
\033[1;37m│\033[1;32m╠╩╗╠═╣╚═╗╔╩╦╝  ║  ╠═╣╠═╣║║║║║║║╣ ║  \033[1;37m│
\033[1;37m│\033[1;36m╩ ╩╩ ╩╚═╝╩ ╚═  ╚═╝╩ ╩╩ ╩╝╚╝╝╚╝╚═╝╩═╝\033[1;37m│
\033[1;37m├\033[1;37m────────────────────────────────────\033[1;37m┘
\033[1;37m│              \033[1;34m[\033[1;33mINFO\033[1;34m]
\033[1;37m│\033[1;31m[\033[1;37mScript : \033[1;32m$sc_name\033[1;31m]
\033[1;37m│\033[1;31m[\033[1;37mScript By : \033[1;32mAga katoroik\033[0;31m[\033[1;32mKhsx\033[0;31m]\033[1;31m]
\033[1;37m│\033[1;31m[\033[1;37mChannel : \033[1;32mKhsx channel\033[1;31m]
\033[1;37m│\033[1;31m[\033[1;37mScript Version : \033[1;32m$sc_version\033[1;31m]
\033[1;37m│\033[1;31m[\033[1;37mDate : \033[1;32m".date("Y-m-d")."\033[1;31m]
\033[1;37m│\033[1;31m[\033[1;37mTelegram : \033[1;32m@OwlCamp\033[1;37m\033[1;31m]
\033[1;37m└\033[1;37m────────────────────────────────────┘\n";

echo $banner;}
?>
