<?php

require "Classes/Database.php";

$db = new Database();

$db->query("select * from test");
echo $db->number(), "<br>"; //musql_num_rows

if($db->number()==0){
	echo "Empty DataBase";
}else{
	foreach($db->result() as $res){
		echo $res['id'], $res['result'];
	}
}

$db->Disconect();
