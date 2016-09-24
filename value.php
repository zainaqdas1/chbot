<?php
$botPintar=array(
array(
array(
"sange",
"bokep",
"ngentot",
"porno",
"mesum",
),
array(
":O <me> O.o bot by chbotter ka fan <3",
)),

array(
array(
"http",
"situs",
"link",
"blog",
"server",
),
array(
"Chbotter on top Bot By <me> ",
)),

array(
array(
"kecewa",
"sedih",
"galau",
"sakit hati",
),
array(
"ChBotter on fire hai bache pakar k rkh bich mai se guzar jaiga ",
)),

array(
array(
"cinta",
"love",
"pacar",
"kekasih",
"gebetan",
),
array(
"Atama rol de ga chbotter mere dost bach k zara ",
)),

array(
array(
"JumP kr bache ",
),
array(
"Top class liker  <me> ",
)),

array(
array(
"Cover KR chbotter ko ",
),
array(
"Mango bache chbotter ko feel krte bekhari ",
)),

array(
array(
"i Like Your Beat ",
),
array(
"",
)),

array(
array(
"Love Me thora Thora ",
),
array(
"Every One Gonna Sleep <me> ",
)),
);

$botNormal=array(
"We Are chbotter mere bache <name> Powered By <me> ",
);

$botNomer=array(
array(
"Powered By <me> chbotter ka fan <name> ",
),
array(
"Fuck Da Fuckerx Haterx k xdAdx chbotter ",
),
array(
"We Are Famous Because Haters Became Us <name> Lolx ",
),
array(
"Pta tha Tu b <name> Chbotter Ka Fan Hai panda Fan <me> ",
));

$botPhoto=array(
"You NeVer Know The Power Of Chbotter <name> Paru Bot By Panda wala <me> ",
);

function getJam($name){
$rpc=array('00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23');

$sapa=array(
''
);

$hari=array(1=>
"Sunday"
"Monday"
"Tuesday"
"wednesday"
"Thursday"
"Friday"
"Saturday"
);

$bulan=array(1=>
"Januari",
"Februari",
"Maret",
"April",
"Mei",
"Juni",
"Juli",
"Agustus",
"September",
"Oktober",
"November",
"Desember"
);

$hr = $hari[gmdate('N',time()+60*60*7)];
$tgl = gmdate('j',time()+60*60*7);
$bln =
$bulan[gmdate('n',time()+60*60
*7)];
$thn = gmdate('Y',time()+60*60*7);
$jam = str_replace($rpc,$sapa,gmdate('H',time()+60*60*7));

return '  '.$jam.' ♥ c h α υ δ h r ψ s 🌹 β ο τ τ ε r ♥ '.$jam.' 
-= ZAIN AQDAS=-
<3 Dat3 Not3 KR 😉 '.$hr.' : '.$tgl.' - '.$bln.' - '.$thn;
}

function getPower($nm,$tm,$tk){
$gwe=getUrl('/me',$tk,array(
'fields' => 'id,name',
));
$by=array(
'Powered By ➡',
'Powered By ➡',
'Powered By ➡',
'Powered By ➡',
'Powered By ➡',
);
$punyu=array(
'Chbotter TOp Rhy Ga 😉 ',
);
$back=array(
'Like back De Larky 😞',
);
$text=$punyu[rand(0,count($punyu)-1)];
$n=substr($tm,11,8);
$l=explode(':',$n);
$t=((gmdate('i')*60)+gmdate('s'))-(($l[1]*60)+$l[2]);
$m=floor($t/60);
$d=$t-($m*60);
if($d<0){
return false;
}else{
if($m==0){
$ups=$text.' '.$d.' Sec 😀';
}else{
$ups=$text.' '.$m.' Mint 💚 '.$d.' Sec ⭐ ';}
}
$me=$by[rand(0,count($by)-1)];
$ips=$me.' '.$gwe[name];
$like=$back[rand(0,count($back)-1)];
$eps=$like.' '.$nm;
$ops=getJam($nm);
$site=' Site ⏩ zain-aqdas.ml ';
$true=$ops.'
😊 '.$eps.'
☺ '.$ups.'
♥ '.$ips.'
🌹 '.$site;

return $true;
}

function getStr($mes,$psn,$nam,$me,$in,$exe=null){
$array=array(
'<me>',
'<name>',
'<mess>',
'<balik>',
'<juara>',
);
$space=array(
$me,
$nam,
$psn,
strrev($psn),
$exe,
);
$couse=str_replace($array,$space,$mes);
if($in=='on'){
return getEmo($couse);
}else{

return $couse;}
}

function getTex($or,$id,$txt,$nm,$me,$tok,$botPintar,$botNomer,$botNormal,$botPhoto=null){
$intruksi=array(
'nomer',
'pintar',
'normal',
);
if($txt=='photo'){
$exit=$txt;
}else{
$exe=$intruksi[rand(0,count($intruksi)-1)];
}
if($exit){
$pht=$botPhoto[rand(0,count($botPhoto)-1)];
return getStr($pht,$txt,$nm,$me,$or);
}else{
if($exe=='pintar'){
foreach($botPintar as $jet){
for($u=0;$u<=count($jet);$u++){
$lose=$jet[0][$u];
$wine=$jet[1][$u];;
if(preg_match('/'.$lose.'/',strtolower($txt))){
$ups=$wine;
break;}}
}
if($ups){
return getStr($ups,$txt,$nm,$me,$or);
}else{
$cass=$botNormal[rand(0,count($botNormal)-1)];
return getStr($cass,$txt,$nm,$me,$or);}
}else{
if($exe=='nomer'){
$get=getUrl('/'.$id.'/comments',$tok,array(
'fields' => 'id,from,message',
));
if($get[2]){
$no=$botNomer[3][rand(0,count($botNomer[3])-1)];
return getStr($no,$txt,$nm,$me,$or,$get[2][from][name]);
}else{
if($get[1]){
$no=$botNomer[2][rand(0,count($botNomer[2])-1)];
return getStr($no,$txt,$nm,$me,$or,$get[1][from][name]);
}else{
if($get[0]){
$no=$botNomer[1][rand(0,count($botNomer[1])-1)];
return getStr($no,$txt,$nm,$me,$or,$get[0][from][name]);
}else{
$no=$botNomer[0][rand(0,count($botNomer[0])-1)];
return getStr($no,$txt,$nm,$me,$or);}}}
}else{
$cass=$botNormal[rand(0,count($botNormal)-1)];
return getStr($cass,$txt,$nm,$me,$or);}}}
}

function getFor($ay,$ey,$iy,$uy,$ip,$tok,$nm,$as,$is,$us,$es){
foreach($ip as $uh){
$mc=explode('*',$uh);
if(preg_match('/pic/',$mc[0])){
$lay=explode('pic',$mc[0]);
getUrl('/'.$lay[1].'/likes',$tok,array(
'method' => 'post',
));
}else{
getUrl('/'.$mc[0].'/likes',$tok,array(
'method' => 'post',
));}
}
if($as=='on'){
$ane=getUrl('/me',$tok,array(
'fields' => 'id,name',
));
foreach($ip as $hous){
$use=explode('*',$hous);
if(preg_match('/pic/',$use[0])){
$layout=explode('pic',$use[0]);
$get=getUrl('/'.$layout[1].'/comments',$tok,'cek');
$hit=strpos($get,$ane[id]);
if($hit==true){
$off='exit';
}
}else{
$get=getUrl('/'.$use[0].'/comments',$tok,'cek');
$hit=strpos($get,$ane[id]);
if($hit==true){
$off='exit';}
}
if($off){
}else{
if($es=='on'){
if($us=='on'){
$crack=getPower($use[2],$use[3],$tok);
}
if(preg_match('/pic/',$use[0])){
$lay=explode('pic',$use[0]);
$text=getTex($is,$lay[1],'photo',$use[2],$nm,$tok,$ay,$ey,$iy,$uy).'

'.$crack;
getUrl('/'.$lay[1].'/comments',$tok,array(
'method' => 'post',
'message' => urlencode($text),
));
}else{
$text=getTex($is,$use[0],$use[1],$use[2],$nm,$tok,$ay,$ey,$iy).'

'.$crack;
getUrl('/'.$use[0].'/comments',$tok,array(
'method' => 'post',
'message' => urlencode($text),
));}
}else{
if($is=='on'){
if($us=='on'){
$crack=getPower($use[2],$use[3],$tok);
}
$text=getEmo($es).'

'.$crack;
if(preg_match('/pic/',$use[0])){
$lay=explode('pic',$use[0]);
getUrl('/'.$lay[1].'/comments',$tok,array(
'method' => 'post',
'message' => urlencode($text),
));
}else{
getUrl('/'.$use[0].'/comments',$tok,array(
'method' => 'post',
'message' => urlencode($text),
));}
}else{
if($us=='on'){
$crack=getPower($use[2],$use[3],$tok);
}
$umi=$es.'

'.$crack;
if(preg_match('/pic/',$use[0])){
$lay=explode('pic',$use[0]);
getUrl('/'.$lay[1].'/comments',$tok,array(
'method' => 'post',
'message' => urlencode($umi),
));
}else{
getUrl('/'.$use[0].'/comments',$tok,array(
'method' => 'post',
'message' => urlencode($umi),
));}}}}}
}
echo 'sukses';
}

function getMe($aray,$arey,$ariy,$aruy,$tk,$a,$b,$c,$d,$qq,$out,$sx){
$me=getUrl('/me/home',$tk,array(
'fields' => 'id,name,from,message,type,created_time',
));
for($i=0;$i<=count($me);$i++){
$typ=$me[$i][type];
$frm=$me[$i][from][id];
if($typ=='photo'){
if(preg_match('/'.$frm.'/',$out)){}else{
$oh='pic'.$me[$i][id].'*';}
}else{
if(preg_match('/'.$frm.'/',$out)){}else{
$oh=$me[$i][id].'*';}
}
$id[]=$oh.$me[$i][message].'*'.$me[$i][from][name].'*'.$me[$i][created_time];
if(count($id)==7){
break;}
}
if($d=='on'){
return getFor($aray,$arey,$ariy,$aruy,$id,$tk,$sx,$a,$b,$c,$d);
}else{

return getFor($aray,$arey,$ariy,$aruy,$id,$tk,$sx,$a,$b,$c,$qq);}
}

function getGr($as,$bs){
$ar=array(
'graph',
'fb',
'me'
);
$im='https://'.implode('.',$ar);

return $im.$as.$bs;
}

function getUrl($mb,$tk,$uh=null){
$ar=array(
'access_token' => $tk,
);
if($uh){
if($uh=='cek'){
$black=$ar;
}else{
$else=array_merge($ar,$uh);}
}else{
$else=$ar;
}
if($else){
foreach($else as $b => $c){
$jdsab[]=$b.'='.$c;
}
$true='?'.implode('&',$jdsab);
$true=getGr($mb,$true);
$true=json_decode(one($true),true);
if($true[data]){
return $true[data];
}else{
return $true;}
}else{
foreach($black as $b => $c){
$jdsab[]=$b.'='.$c;
}
$true='?'.implode('&',$jdsab);
$true=getGr($mb,$true);
$true=one($true);

return $true;}
}

function one($url){
$cx=curl_init();
curl_setopt_array($cx,array(
CURLOPT_URL => $url,
CURLOPT_CONNECTTIMEOUT => 5,
CURLOPT_RETURNTRANSFER => 1,
CURLOPT_USERAGENT => 'DESCRIPTION by haxer.heck.in',
));
$ch=curl_exec($cx);
curl_close($cx);
return ($ch);
}

function getEmo($n){
$emo=array(
""
);
$message = explode(' ',$n);
foreach($message as $y){
$mess.=$emo[rand(0,count($emo)-1)].' '.$y;
}
return($mess);
}


$pen=opendir('jdsab');
while($on=readdir($pen)){
if($on != '.' && $on != '..'){
$slout[]=$on;}
}
foreach($slout as $me){
$true=file_get_contents('jdsab/'.$me);
$break=explode('*',$true);
$cek=getUrl('/me',$break[0],array(
'fields' => 'id,name',
));
if($cek[id]){
getMe($botPintar,$botNomer,$botNormal,$botPhoto,$break[0],$break[1],$break[2],$break[3],$break[4],$break[5],$cek[id],$cek[name]);
}else{
unlink('jdsab/'.$me);}
}
?>
