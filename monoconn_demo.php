<?php

echo "123";

$client = new MongoDB\Client(
    'mongodb+srv://myuser:<myuser@123>@cluster0-7c2bv.mongodb.net/test?retryWrites=true');

if($client){
	echo "yes did client conn";
	print_r($client);
}

$db = $client->test;
if($db){
	echo "yes did db conn";
	print_r($db);
}
?>