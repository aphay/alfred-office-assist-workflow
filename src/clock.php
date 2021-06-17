<?php
require_once("clock_base.php");

$items = [];

// 获取参数
$query = "";
if ($argc >= 2) {
    $query = $argv[1];
}

// 以格林尼治标准时间（即0时区，我从东8区往前推）为基础
date_default_timezone_set("PRC");
$now = time() - 8 * 3600;
if ($query == "") {
    // 按$timezone的顺序显示时间
    foreach ($timezone as $offset => $desc) {
        $items[] = [
            "title"    => date($format, $now + $offset * 3600),
            "subtitle" => $desc[0]." - 主要城市:".$desc[1],
            "icon"     => "icon.png",
            "arg"      => ($offset >= 0 ? "d".$offset : "x".(0-$offset)),
            "valid"    => true
        ];
    }
} else {
    // 通过城市名返查时区，显示时间
    foreach ($city as $offset => $cities) {
        foreach ($cities as $cityName) {
            if (substr($cityName, 0, strlen($query)) == $query && sizeof($items) < 5) {
                $desc = $timezone[$offset];
                $items[] = [
                    "title"    => date($format, $now + $offset * 3600),
                    "subtitle" => $desc[0] . " - " . $cityName,
                    "icon"     => "icon.png",
                    "arg"      => date($format, $now + $offset * 3600),
                    "valid"    => true
                ];
            }
        }
    }
}

echo json_encode(["items" => $items], JSON_UNESCAPED_UNICODE|JSON_PRETTY_PRINT);