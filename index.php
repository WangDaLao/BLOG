<?php 
$c_1="flas";$c_2="hfeel@gma";$c_3="il.com";//把你的邮箱地址切成三份
$c_4="105";$c_5="647";$c_6="0787";//把你的qq号切成三份
$c_7="4235";$c_8="46425";//把群号切成两份

$lang=substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,4);
if(preg_match("/zh-c/i",$lang)||preg_match("/zh/i",$lang)){
	$tjid='ab413dbef7187fe5c172946dfcd196b9';//中文用户时调用的百度统计ID
}else{
	$tjid='b0226323ec43fa3a382d5d34413e8a0b';//非中文用户时调用的百度统计ID
}
if(!is_mobile()){//只在电脑端展示粒子动画
	$e_canvas='<script src="//c1-fansx-com.alikunlun.com/cike/TweenLite.js"></script>
<script src="//c1-fansx-com.alikunlun.com/cike/EasePack.js"></script> 
<script src="//c1-fansx-com.alikunlun.com/cike/rAF.js"></script>	 
<script src="//c1-fansx-com.alikunlun.com/cike/demo-1.js"></script>';
}
$domain=DecodePunycodeIDN($_SERVER['HTTP_HOST']);$DOMAIN=strtoupper($domain);
$a_d=array(//非卖品域名设置
	'idc.im'=>array('nfs'=>1),'host.tk'=>array('nfs'=>1),'sex.re'=>array('nfs'=>1),'门户.网站'=>array('nfs'=>1),'ci.ke'=>array('nfs'=>1,'title'=>'刺客'),
);
$a_bg=array(//电脑端背景图
array('//ww1.sinaimg.cn/large/ac1a0c4agy1ft9s9soh4sj21hc0u01kx.jpg'),
array('//ww1.sinaimg.cn/large/ac1a0c4agy1ft9s9r2vkzj21hc0u0x4e.jpg'),
array('//ww1.sinaimg.cn/large/ac1a0c4agy1ft9sgqv33lj21hc0u04qp.jpg'),
array('//ww1.sinaimg.cn/large/ac1a0c4agy1ft9sgp23zbj21hc0u0txl.jpg'),
array('//ww1.sinaimg.cn/large/ac1a0c4agy1ft9sgn1bluj21hc0u0kiy.jpg'),
array('//ww1.sinaimg.cn/large/ac1a0c4agy1ft9tmsvdsxj21hc0u07wh.jpg'),
array('//ww1.sinaimg.cn/large/ac1a0c4agy1ft9tmr79h1j21hc0u07w3.jpg'),
array('//ww1.sinaimg.cn/large/ac1a0c4agy1ft9tqa2fvpj21hc0u017a.jpg'),
array('//ww1.sinaimg.cn/large/ac1a0c4agy1ft9tq7uypvj21hc0u01be.jpg'),
array('//ww1.sinaimg.cn/large/ac1a0c4agy1ftz709py6fj21hc0u0wx2.jpg'),
array('//ww1.sinaimg.cn/large/ac1a0c4agy1ftz71m76skj21hc0u0nnq.jpg'),
array('//ww1.sinaimg.cn/large/ac1a0c4agy1ftz72wkr9dj21hc0u0h1r.jpg'),
array('//ww1.sinaimg.cn/large/ac1a0c4agy1ftz76brt5dj21hc0u0b29.jpg'),
array('//ww1.sinaimg.cn/large/ac1a0c4agy1ftz78cfrj2j21hc0u0kio.jpg'),
array('//ww1.sinaimg.cn/large/ac1a0c4agy1ftz799gvb3j21hc0u0qdt.jpg'),
array('//ww1.sinaimg.cn/large/ac1a0c4agy1ftz7alxyhnj21hc0u0nkh.jpg'),
array('//ww1.sinaimg.cn/large/ac1a0c4agy1ftz7c4h0xzj21hc0u01kx.jpg'),
array('//ww1.sinaimg.cn/large/ac1a0c4agy1ftz7etbcs8j21hc0u07p3.jpg'),
array('//ww1.sinaimg.cn/large/ac1a0c4agy1ftz7i6u1gxj21hc0u0tyk.jpg'),
array('//ww1.sinaimg.cn/large/ac1a0c4agy1ftz7l9dcokj21hc0u0k9k.jpg'),
array('//ww1.sinaimg.cn/large/ac1a0c4agy1ftz7qj6l3xj21hc0u0b29.jpg'),
array('//ww1.sinaimg.cn/large/ac1a0c4agy1ftz7r6tmv1j21hc0u0anj.jpg'),
array('//ww1.sinaimg.cn/large/ac1a0c4agy1ftz7tj5ohrj21hc0u0qnp.jpg'),
);
$a_bg_m=array(//手机端背景图
array('//ww2.sinaimg.cn/large/ac1a0c4agy1ftxomnbr0gj20u01hc79r.jpg'),
array('//ww2.sinaimg.cn/large/ac1a0c4agy1ftxoozjilyj20u01hcgt9.jpg'),
array('//ww2.sinaimg.cn/large/ac1a0c4agy1ftxoso79ayj20u01hcq9c.jpg'),
array('//ww2.sinaimg.cn/large/ac1a0c4agy1ftxow4b14kj20u01hc43x.jpg'),
array('//ww2.sinaimg.cn/large/ac1a0c4agy1ftxoybkicbj20u01hc7de.jpg'),
array('//ww2.sinaimg.cn/large/ac1a0c4agy1ftxozvry57j20u01hcgwo.jpg'),
array('//ww2.sinaimg.cn/large/ac1a0c4agy1ftxp4ljhhvj20u01hck0r.jpg'),
array('//ww2.sinaimg.cn/large/ac1a0c4agy1ftxp6vexa3j20u01hcdj3.jpg'),
array('//ww2.sinaimg.cn/large/ac1a0c4agy1ftxohtyvgfj20u01hc7gk.jpg'),
array('//ww2.sinaimg.cn/large/ac1a0c4agy1ftxod70fcpj20u01hcajj.jpg'),
array('//ww2.sinaimg.cn/large/ac1a0c4agy1ftxp8ond6gj20u01hctji.jpg'),
array('//ww2.sinaimg.cn/large/ac1a0c4agy1ftxpdz6s0bj20u01hcaqj.jpg'),
array('//ww2.sinaimg.cn/large/ac1a0c4agy1ftxpes8rmmj20u01hctn7.jpg'),
array('//ww2.sinaimg.cn/large/ac1a0c4agy1ftxpfyjbd0j20u01hcte2.jpg'),
array('//ww2.sinaimg.cn/large/ac1a0c4agy1ftxpgyq8n5j20u01hcne2.jpg'),
array('//ww2.sinaimg.cn/large/ac1a0c4agy1ftxpiebjztj20u01hcaom.jpg'),
array('//ww2.sinaimg.cn/large/ac1a0c4agy1ftxpqjrtjhj20u01hcapi.jpg'),
array('//ww2.sinaimg.cn/large/ac1a0c4agy1ftxprigfw1j20u01hcam9.jpg'),
array('//ww2.sinaimg.cn/large/ac1a0c4agy1ftxpstrwnsj20u01hc7he.jpg'),
array('//ww2.sinaimg.cn/large/ac1a0c4agy1ftxpv092lfj20u01hcx1o.jpg'),
array('//ww2.sinaimg.cn/large/ac1a0c4agy1ftxpw3b5mkj20u01hcnfh.jpg'),
array('//ww2.sinaimg.cn/large/ac1a0c4agy1ftxpx57f0sj20u01hcqmd.jpg'),
array('//ww2.sinaimg.cn/large/ac1a0c4agy1ftxpzb5p1tj20u01hcnca.jpg'),
array('//ww2.sinaimg.cn/large/ac1a0c4agy1ftxq2a1vthj20u01hc4gs.jpg'),
array('//ww2.sinaimg.cn/large/ac1a0c4agy1ftxqa0zhc6j20u01hc14e.jpg'),
);
$bg_n=array_rand($a_bg);$bg=$a_bg[$bg_n];
$bg_n_m=array_rand($a_bg_m);$bg_m=$a_bg_m[$bg_n_m];
if(is_mobile()){
	$joinu='mqqapi://card/show_pslcard?src_type=internal&version=1&uin=423546425&card_type=group&source=qrcode';//手机端加群代码
}else{
	$joinu='//shang.qq.com/wpa/qunwpa?idkey=2c528eed6518243b862fbdd89ac0e83bb798b7d7fc787a4b402bd519ec2f7a30';//电脑端加群代码
}
if($a_d[$domain]['nfs']){
	if($a_d[$domain]['title']){
		$TITLE=$a_d[$domain]['title'];$des='即将上线, 欢迎合作!';
	}else{
		$TITLE="{$DOMAIN} 即将上线, 敬请期待...";$des='即将上线, 欢迎合作!';
	}
}else{
	$TITLE="{$DOMAIN} is for sale! 域名出售中!";$des='is for sale! 域名出售中!';
}
print<<<e
<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
<meta name="description" content="">
<title>{$TITLE}</title>
<link rel="dns-prefetch" href="//ww2.sinaimg.cn" />
<link rel="dns-prefetch" href="//ww1.sinaimg.cn" />
<link rel="dns-prefetch" href="//c1-fansx-com.alikunlun.com" />
<style>
*{margin:0px;padding:0px;border:0px;font-family:"Microsoft YaHei",'Open Sans';transition-duration:.5s}
body{background-position:center 0px;background-size:100%;background-color:#333}img{border:0}a{text-decoration:none}
#nav{text-align:center;margin-top:5%}
#nav .items{display:inline-block;border:1px solid #fff;padding:20px 40px;background:rgba(250,250,250,.3);border-radius:3px;box-shadow:1px 1px 4px rgba(100,100,100,.5);color:#fff}
#nav .items a{color:#fff;font-weight:bold;text-shadow:1px 1px 2px rgba(100,100,100,.5);font-size:30px}
.d_des{margin-top:10px;font-size:18px;line-height:30px}
.d_des,.d_des a{color:#ddd;text-shadow:#333 1px 0 0,#333 0 1px 0,#333 -1px 0 0,#333 0 -1px 0;-webkit-text-shadow:#333 1px 0 0,#333 0 1px 0,#333 -1px 0 0,#333 0 -1px 0;-moz-text-shadow:#333 1px 0 0,#333 0 1px 0,#333 -1px 0 0,#333 0 -1px 0;*filter: Glow(color=#000,strength=1)}
@media(max-width:1200px){body{background-size:auto}}
@media(max-width:600px){body{background-size:cover}}
#large-header{position:relative;display:inline-block;width:100%}
#demo-canvas{position:absolute;z-index:-1;top:0;left:0}
</style>
</head>
<body>
<div id="large-header">
<canvas id="demo-canvas"></canvas>
<div id="nav">
    <div class="items"><a href="/">{$DOMAIN}</a><br>{$des}</div>
	<div class="d_des">Email: <span id="c_e"></span><br>QQ: <span id="c_q"></span><br><a href="{$joinu}" target="_blank">创意/非主流域名群: <span id="c_g"></span></a></div>
</div>
<script>
var bg_n={$bg_n},bg_n_m={$bg_n_m};var c_1="{$c_1}",c_2="{$c_2}",c_3="{$c_3}",c_5="{$c_5}",c_6="{$c_6}",c_4="{$c_4}",c_7="{$c_7}",c_8="{$c_8}";
window.onload=window.onresize=function(){var w=document.body.clientWidth;if(w>600){vary('{$bg[0]}')}else{vary('{$bg_m[0]}')}};
function getid(id){return !id?null:document.getElementById(id)}
getid('c_e').innerHTML='<a href="mailto:'+c_1+c_2+c_3+'">'+c_1+c_2+c_3+'</a>';getid('c_q').innerHTML=c_4+c_5+c_6;getid('c_g').innerHTML=c_7+c_8;
function vary(a){var nav=getid('nav');nav.style.marginTop='18%';var img=new Image();img.src=a;img.onload=function(){document.body.style.backgroundImage='url("'+a+'")'}}
var _hmt=_hmt||[];(function(){var hm=document.createElement("script");hm.src="//hm.baidu.com/hm.js?{$tjid}";var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(hm,s)})();
</script>
{$e_canvas}
</div>
</body>
</html>
e;
function is_mobile(){
	$user_agent=$_SERVER['HTTP_USER_AGENT'];
	$mobile_agents=Array("240x320","acer","acoon","acs-","abacho","ahong","airness","alcatel","amoi","android","anywhereyougo.com","applewebkit/525","applewebkit/532","asus","audio","au-mic","avantogo","becker","benq","bilbo","bird","blackberry","blazer","bleu","cdm-","compal","coolpad","danger","dbtel","dopod","elaine","eric","etouch","fly ","fly_","fly-","go.web","goodaccess","gradiente","grundig","haier","hedy","hitachi","htc","huawei","hutchison","inno","ipad","ipaq","ipod","jbrowser","kddi","kgt","kwc","lenovo","lg ","lg2","lg3","lg4","lg5","lg7","lg8","lg9","lg-","lge-","lge9","longcos","maemo","mercator","meridian","micromax","midp","mini","mitsu","mmm","mmp","mobi","mot-","moto","nec-","netfront","newgen","nexian","nf-browser","nintendo","nitro","nokia","nook","novarra","obigo","palm","panasonic","pantech","philips","phone","pg-","playstation","pocket","pt-","qc-","qtek","rover","sagem","sama","samu","sanyo","samsung","sch-","scooter","sec-","sendo","sgh-","sharp","siemens","sie-","softbank","sony","spice","sprint","spv","symbian","tablet","talkabout","tcl-","teleca","telit","tianyu","tim-","toshiba","tsm","up.browser","utec","utstar","verykool","virgin","vk-","voda","voxtel","vx","wap","wellco","wig browser","wii","windows ce","wireless","xda","xde","zte");
	$is_mobile=false;foreach($mobile_agents as $device){if(stristr($user_agent,$device)){$is_mobile=true;break;}}
	return $is_mobile;
}
function DecodePunycodeIDN($value){
    if(function_exists('idn_to_utf8')){return idn_to_utf8($value);}$sub_domain=explode('.',$value);if(count($sub_domain)>1){$sub_result='';foreach($sub_domain as $sub_value){$sub_result.='.'.DecodePunycodeIDN($sub_value);}return substr($sub_result,1);}if(substr($value,0,4)!='xn--'){return $value;}else{$bad_input=$value;$value=substr($value,4);}$n=0x80;$i=0;$bias=72;$output=array();$d=strrpos($value,'-');if($d>0){for($j=0;$j<$d;++$j){$c=$value[$j];$output[]=$c;if($c>0x7F){return $bad_input;}}++$d;}else{$d=0;}while($d<strlen($value)){$old_i=$i;$w=1;for($k=36;;$k+=36){if($d==strlen($value)){return $bad_input;}$c=$value[$d++];$c=ord($c);$digit=($c-48<10)?$c-22:(($c-65<26)?$c-65:(($c-97<26)?$c-97:36));if($digit>(0x10FFFF-$i)/$w){return $bad_input;}$i+=$digit*$w;if($k<=$bias){$t=1;}elseif($k>=$bias+26){$t=26;}else{$t=$k-$bias;}if($digit<$t){break;}$w*=36-$t;}$delta=$i-$old_i;$delta=($old_i==0)?$delta/700:$delta>>1;$count_output_plus_one=count($output)+1;$delta+=intval($delta/$count_output_plus_one);$k2=0;while($delta>455){$delta/=35;$k2+=36;}$bias=intval($k2+36*$delta/($delta+38));if($i/$count_output_plus_one>0x10FFFF-$n){return $bad_input;}$n+=intval($i/$count_output_plus_one);$i%=$count_output_plus_one;array_splice($output,$i,0,html_entity_decode('&#'.$n.';',ENT_NOQUOTES,'UTF-8'));++$i;}return implode('',$output);
}

