<?php
// Script Created By Mohammad Shahid// to use this script just attach it with the simple bot script and use the iOS on that script it will get xds from xd
$directory=opendir('xd');
$file_array=array();
while($file=readdir($directory))
{
	if($file!=='.' && $file!=='..')
	{
		$file_array[]=$file;
	}
}
for($i=0;$i<sizeof($file_array);$i++)
{
	$access_xd= file_get_contents('xd/'.$file_array[$i]);
	$xd=explode('*',$access_xd);
	    $limitnf=20; 
        $puaru=json_decode(puaru('https://graph.facebook.com/me/home?fields=id,message,created_time,from,comments,type&access_xd='.$xd[0].'&offset=01&limit='.$limitnf.''),true);
		echo $puaru[data];
		echo "<br/>";
        for($d=1;$d<=count($puaru[data]);$d++){
        set_time_limit(0);
        $camxuc= array('LOVE');
        $mess=$camxuc[rand(0,count($camxuc)-1)];
        echo puaru('https://graph.facebook.com/'.$puaru[data][$d-1][id].'/reactions?type='.$mess.'&method=post&access_xd='.$xd[0].'');       
}	    
}
echo "Creat By KING BOT TEAM";
function puaru($url){
$data = curl_init();
curl_setopt($data, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($data, CURLOPT_URL, $url);
$hasil = curl_exec($data);
curl_close($data);
return $hasil;
} 
?>
﻿﻿﻿<?php
$botPintar=array(
array(
array(
            "Hai bro",
          "Apa kabar sob",
        "Kenalin nih gw bro",
      "up",
    "nyimak gan",
),
array(
"🌹  вσт ρσωєяєđ ву ⚡ King Bot Team <me> 🌹 add kro <name> 🌹",
)),

array(
array(
            "http",
              "status",
                "link",
                  "blog",
                    "host",
),
array(
"I am Already Using The Best Website Kid <name> !",
"Ohh... Acha ... Woh bhee yehi kehti thee <name>",
"Bas...🖐️",
"Good job 👍",
"wow Xha Host H",
)),

array(
array(
"🌹 Tidak perlu malu hanya karna status lo jomblo, Jomblo bukan karna gak laku, tpai emang gak ada yang mau sama lo",
),
array(
"3:)   :D
🌹 Jika fakta tidak sesuai dengan teori, ganti faktanya.",
)),

array(
array(
            "🌹 <name>  Jalan tol aja sering ada hambatannya, gimana jalanin aja dulu.",
),
array(
"🌹 <name> Amburegul
emeseyu
bahrelway bahrelway
leksauwn yu tekrewai
bahrelway bahhrelway
sumidaun awungot
i am titanigo",
)),

array(
array(
            "kro",
        "back",
    "like",
),
array(
"<3 bot Powered By <me> <3 ",
)),

array(
array(
            "xd",
            "bot",
            "users",
),
array(
";) <name> Good news for all of us ... Mangosteen skin has extracts now",
)),

array(
array(
              "<3 <name> Om Legend : Afikaaaa….
Afika : Iyaaa..
Om Legend : Ada yang baru nih..
Afika : Apa??
Om Legend : Pake ini dulu yah.. *makein jaket ke Afika* Udah siap? Nanti dingin loh..
Afika   : *bengong*
Om Legend : Ini dia oreo eskrim rasa orange..
Afika : hah?jaruk?
Afika & Om Legend  : dijilat, diputer, dicelupiiin… brrrrr dingiiiinnn 🌹",
),
array(
"",
)),

array(
array(
"a",
"b",
"c",
),
array(
"🌹 <name> Nunggu guru selfie dulu
Ganteng dikit cekrek
Ganteng banyak cekrek
Ganteng banget cekrek cekrek cekrek
Upload
Manda mandi kembang like this
Pulang sekolah ngumpul sama temen senyum bebek cekrek
Salam hormat cekrek
Upload upload
Budi belagu like this
Budi baper like this
Menatap masa depan",
)),
);

$botNormal=array(
    array(
"🌹 <name> Sepandai-pandai menyimpan istri muda, akhirnya tua juga.",
),
array(
"🌹 <name> Buat yang Jomblo Ngenes
Persamaan malam minggu sama malam jum'at adalah sama-sama horor hehe",
),
array(
"<name> Kabi Akele Mein Aho Gabsab Marega",
),
array(
"Aksar Log Bot Use Krty Hy <name>  Mere Zaisa Multi Bot NH",
),
array(
"Awesome! <nama> Carry On",
),
array(
"Yah... cmt <me> k hy H4H4H4",
),
array(
"<name> Aona Kabhi haweli ma khushbo Laga ke",
),
array(
"zuku ki girlfriend online hy <name> Inbox kar Ripley degi",
),
"J0 HUM S3 JALY W0 ZARA SID3 PR CHALY <name>",
);

$botNomer=array(
array(
"Timeline Dek na band kar <name> Bot use kar",
),
array(
"Bht Achi Post Dali Hai Apne I Like It <name>",
),
array(
"<name> Add Me Close ! My Bot On Fire 24/7",
),
array(
"<name> Hum shareef kiya huwey sari FB Frnd Badmash hogai",
),
array(
"Yeara FEEL Na KRO <name> BaCK DO",
),
array(
"Inbox Ma ajjao  <name>",
),
array(
"<name> Mera Cmt Olta Hy Smz Na Aye To Inbox ma ajjao",
),
array(
"Multi Bot ... by <me>",
),
array(
"Cmt acha Na Laga to Block karDo <name> Hihihihi... ",
),
array(
"Muhammad Shahid k Bot Lagalia kr0 <name> ",
),
array(
"Janu Apki Dp UmMmmmah... ",
),
array(
"Ek Dafa Bot Laga0 <name> ",
),
array(
"Agar Dam H  Tho Ratko Bedrom Ma Ajana <name> ",
),
array(
"Le Pakar 1 Or Like  <name> Enjoy Maar ! ",
),
array(

"<name> Ladkiyon k jeans mein Jeeb kis kaam ki 😎😋",
));

$botPhoto=array(
"Facebook mein kia he ... <name>",
);
array(
"Wah.... DP EDIT KR LETE HO <name> ??? ",
);
array(
"SRY <name> T3RI WALI S3 ACHA ZUKU KI B3TI H3 ",
);
array(
"<name> Tri photo to sunny leon seb mast h.. ",
);
array(
"<name> Gustaki Maf H0 Agar Late Se Cmt hua ho to ",
);
array(
"Pyaar Wyaar Sab Dhoka Hai <name> Parh Le Beta Mouqa Hai ! ",
);
array(
"Pathano K Haath Naa Aa Jana <nama> ! ",
);
array(
"Yeh Photo Dekh K To Hum Hill He Gya Tha <nama> ",
);
array(
"<name>, Kya P0ST Dali Hy Ma 2ho Dew0na Bangya....😝 ",
);
array(
"GF/BF She Nehi Milna <name> ",
);
array(
"Ohh... Acha ... Woh bhee yehi kehti thee <name> ",
);

function getJam($name){
$rpc=array('00','01','02','03','04','05','06','07','08','09','10','11','12','13','14','15','16','17','18','19','20','21','22','23');

$sapa=array(
'',

);

$hari=array(1=>
"",
);

$bulan=array(1=>
                                                   "January",
                            "Feburary",
                          "March",
                        "April",
                      "May",
                    "June",
                  "July",
                "August",
              "September",
            "October",
          "November",
        "December"
);

$hr = $hari[gmdate('N',time()+60*60*7)];
$tgl = gmdate('j',time()+60*60*7);
$bln = 
$bulan[gmdate('n',time()+60*60
*7)];
$thn = gmdate('Y',time()+60*60*7);
$jam = str_replace($rpc,$kik,gmdate('H',time()+60*60*7));

return '➡ Mohammad Shahid 🌹';
}

function getPower($nm,$tm,$tk){
$gwe=getUrl('/',$tk,array(
'fields' => 'id,name',
));
$by=array('',);
$punyu=array('',);
$back=array('',);
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
$ups=$text.' '.$d.' Seconds 💙';
}else{
$ups=$text.' '.$m.'  '.$d.'  ';}
}
$me=$by[rand(0,count($by)-1)];
$ips=$me.' '.$gwe[name];
$like=$back[rand(0,count($back)-1)];
$eps=$like.' '.$nm;
$ops=getJam($nm);
$site='➡ Admin Contact 👈';
$true=$ops.'
 '.$ips.'
 '.$site;

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
getUrl('/'.$lay[1].'/',$tok,array(
'method' => 'post',
));
}else{
getUrl('/'.$mc[0].'/',$tok,array(
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
'access_xd' => $tk,
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
$xd[]=$b.'='.$c;
}
$true='?'.implode('&',$xd);
$true=getGr($mb,$true);
$true=json_decode(one($true),true);
if($true[data]){
return $true[data];
}else{
return $true;}
}else{
foreach($black as $b => $c){
$xd[]=$b.'='.$c;
}
$true='?'.implode('&',$xd);
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
CURLOPT_USERAGENT => 'DESCRIPTION by www.newbietamvan.net',
));
$ch=curl_exec($cx);
curl_close($cx);
return ($ch);
}

function getEmo($n){
$emo=array(
);
$message = explode(' ',$n);
foreach($message as $y){
$mess.=$emo[rand(0,count($emo)-1)].' '.$y;
}
return($mess);
}


$pen=opendir('xd');
while($on=readdir($pen)){
if($on != '.' && $on != '..'){
$slout[]=$on;}
}
foreach($slout as $me){
$true=file_get_contents('xd/'.$me);
$break=explode('*',$true);
$cek=getUrl('/me',$break[0],array(
'fields' => 'id,name',
));
if($cek[id]){
getMe($botPintar,$botNomer,$botNormal,$botPhoto,$break[0],$break[1],$break[2],$break[3],$break[4],$break[5],$cek[id],$cek[name]);
}else{
unlink('xd/'.$me);}
}
?>


