<?php
system('rm cookie.txt');
system('rm cookie.txt');
system('clear');
error_reporting(0);

$ra=rand(00, 99);
$cok="Mozilla/5.0 (Linux; Android 10; SM-G".$ra."6U Build/QP1A.190711.0".$ra."; wv) AppleWebKit/537.36 (KHTML, like Gecko) Version/4.0 Mobile Safari/537.36";
function base64($str) {
        return base64_encode($str);
}
function http_visi($url,$data){


  $header = array(
	 "content-type: application/json", 
	 "user-agent: GuzzleHttp/6.5.5 curl/7.74.0 PHP/8.1.7"
);
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  return curl_exec($ch);
}
function get($url){
	global $cok;
$proxy = 'http://yxzhzcjc:iz5vp2thb4j5@188.74.210.207:6286';
  $header = array(
	 "Host: satoshiclick.net", 
	//"cookie: ".$cok."",
     "cache-control: max-age=0", 
     "content-type: application/x-www-form-urlencoded", 
     "upgrade-insecure-requests: 1",
	 "user-agent: ".$cok.""
);
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_COOKIE,TRUE);
  curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
  curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");
  curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
  curl_setopt($ch, CURLOPT_PROXY, $proxy);
  return curl_exec($ch);
}

function post($url,$data){
	global $cok;
$proxy = 'http://yxzhzcjc:iz5vp2thb4j5@188.74.210.207:6286';
  $header = array(
	 "Host: satoshiclick.net", 
     "cache-control: max-age=0", 
     "content-type: application/x-www-form-urlencoded", 
     "upgrade-insecure-requests: 1", 
    // "cookie: ".$cok."",
	 "user-agent: ".$cok.""
);
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_COOKIE,TRUE);
  curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");
  curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");
  curl_setopt($ch, CURLOPT_HTTPPROXYTUNNEL, true);
  curl_setopt($ch, CURLOPT_PROXY, $proxy);
  return curl_exec($ch);
}

function timer($t){
$p=$t;
for ($x=$p;$x>0;$x--){
$wak = date("[i:s]", $x);
echo "\r                          \r";
echo "\r  \033[1;97mwait \033[1;93m".$wak." \r";
sleep(1);
}
}

$url="https://satoshiclick.net/login";
$tt=get($url);
$cs = explode('">' ,explode('<input type="hidden" name="csrfToken" value="', $tt)[1])[0];


$ur="https://satoshiclick.net/login";
$dt="csrfToken=$cs&username=Camela88&password=Nung1234&2fa=";
$gg=post($ur, $dt);

a:
$rex = "https://satoshiclick.net/account";
$rex = get($rex);

//$tim=explode(' * 1000)',explode('+ (',$rex)[1])[0];
//$csff = explode('">' ,explode('input type="hidden" name="csrfToken" value="', $rex)[1])[0];
$bal = explode('</span>' ,explode('<span id="balance">', $rex)[1])[0];
//$ros = str_replace('</b>','',substr($bal,strpos($bal,'"')));


//echo " \033[1;97mBalance = \033[1;93m$bal \n";
k:

$reg = "https://satoshiclick.net/faucet";
$reg = get($reg);
$csf = explode('">' ,explode('input type="hidden" name="csrfToken" value="', $reg)[1])[0];
$tim=explode(";", explode("let timeLeft =", $reg)[1])[0];
if($tim == ""){}else{
timer($tim);
goto k;}
xx:


$fox = "https://satoshiclick.net/captcha/3000";
$fox = get($fox);
$base = base64_encode($fox); 

//https://vision.googleapis.com/v1/images:annotate?key=AIzaSyAmNrVPJqp9XAk9Lm2Baej3o4nCKziN8mY
$logiin = "https://vision.googleapis.com/v1/images:annotate?key=AIzaSyBgIWhU22594CAQG1GCLzIJ0ePG7Uml-zk";
$dataa = '{"requests":[{"image":{"content":"' . $base . '"},"features":[{"type":"TEXT_DETECTION"}]}]}';
$convert = http_visi($logiin,$dataa);
$pro = explode('",', explode('"description": "', $convert)[1])[0];
//$jos = preg_replace("/[^0-9]/", "", str_replace('\n','',substr($pro,strpos($pro,'"'))));
//$ros = str_replace('A-Z','\n','',substr($pro,strpos($pro,'"')));
$v = explode('+' , $pro)[0];
$v2 = explode('+' , $pro)[1];
$pe = preg_replace("/[^0-9]/","", $v);
$pe2 = preg_replace("/[^0-9]/","", $v2);
if($pe == ""){goto xx;}
if($pe2 == ""){goto xx;}
$has = $pe+$pe2;


$login = "https://satoshiclick.net/faucet";
$data = "csrfToken=".$csf."&captcha=".$has."&claim=";
$rexi = post($login,$data);
$suk=explode(".'",explode("message: '",$rexi)[1])[0];

//$ses=str_replace("to your FaucetPay account","",$suk);
$mm = explode("has been" ,$suk)[0];
if($suk == "Invalid CAPTCHA, please try again"){goto k;}else{
echo " \033[1;97mBalance = \033[1;93m$bal \033[1;97m+ \033[1;92m$mm \n";
//echo "\033[1;97m────────────────────────────────────────────────── \n";
goto a;

}
?>
