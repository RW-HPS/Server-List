<?php

switch ($_GET["action"]) {
    case "list" :
        echo getList();
        break;
}

require_once('connectDB.php');

function getList(): string {
    global $conn;
    $addResultDB = $conn->query("SELECT * FROM Uuid");

}
u_b2264ac4-b38e-40b8-ad6b-8a7badfd57af,Unnamed,151,3.130.187.58,172.31.2.164,5133,true,SERVER,false,Auto Server 2+ [US-H #10],skirmishMap,ingame,1.14,false,Auto Server 2+ [US-H #10],9,10,true,u_b2264ac4-b38e-40b8-ad6b-8a7badfd57af,true,,32383