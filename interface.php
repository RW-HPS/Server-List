<?php

switch ($_GET["action"]) {
    case "list" :
        echo getList();
        break;
}




function getList(): string {
    require_once('connectDB.php');
    global $conn;
    $addResultDB = $conn->query("SELECT * FROM List");

    $resultString = "";
    while($row = $addResultDB->fetch_assoc()) {
        $resultDB = array(
            // u_b2264ac4-b38e-40b8-ad6b-8a7badfd57af
            $row["Uuid"],
            // Unnamed
            $row["NameMain"],
            // 151
            $row["VersionCode"],
            // 1.1.1.1
            $row["IP"],
            // 192.168.0.1
            $row["PrivateIP"],
            // 5123
            $row["Port"],
            // true
            IsBoolean($row["RoomPublic"]),
            // Dr
            $row["Name"],
            // false
            IsBoolean($row["NeedPasswd"]),
            // MapName
            $row["MapName"],
            $row["MapType"],
            // ingame
            $row["GameStatus"],
            // 1.14
            $row["Version"],
            // ? - false
            "false",
            // MapName
            $row["MapName"],
            // 1
            $row["PlayerSize"],
            // 10
            $row["PlayerMaxSize"],
            // false / 官方
            IsBoolean($row["Thickening"]),

            $row["Uuid"],

            "true",
            "",
            $row["CheckSum"]
        );

        $resultStringCache = "CORRODINGGAMES[1.0]".PHP_EOL;

        foreach($resultDB as $v) {
            $resultStringCache = $resultStringCache.$v.",";
        }
        $resultString = $resultString.substr($resultStringCache, 0, strlen($resultStringCache) - 1).PHP_EOL;
    }
    return $resultString;
}

function IsBoolean($value): string {
    return filter_var($value, FILTER_VALIDATE_BOOLEAN) ? "true" : "false";
}