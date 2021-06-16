<?php
date_default_timezone_set('PRC');

$supportFormat = [
    "Y-m-d H:i:s",
    "Y-m-d",
    "Y年m月d日 H点i分s秒", 
    "Y年m月d日"
];

// 获取参数
$query = "";
if ($argc >= 2) {
    for ($i = 1;$i < $argc; $i++) {
        if ($i > 1) {
            $query .= " ";
        }
        $query .= $argv[$i];
    }
}

$items = [];
if ($query == "now") {
    // 如果参数为now，返回当前时间戳，以及相关格式化
    $now = time();
    for ($i = 0; $i < sizeof($supportFormat); $i++) { 
        $items[] = [
            "title"    => date($supportFormat[$i], $now),
            "subtitle" => "单击复制",
            "icon"     => "icon.png",
            "arg"      => date($supportFormat[$i], $now),
            "valid"    => true
        ];
    }
} else {
    // 否则返回时间戳与格式化时间的互转
    if (is_numeric($query) && $query > 0) {
        for ($i = 0; $i < sizeof($supportFormat); $i++) { 
            $items[] = [
                "title"    => date($supportFormat[$i], $query),
                "subtitle" => "单击复制",
                "icon"     => "icon.png",
                "arg"      => date($supportFormat[$i], $query),
                "valid"    => true
            ];
        }
    } else {
        $t = strtotime($query);
        if ($t != false) {
            for ($i = 0; $i < sizeof($supportFormat); $i++) { 
                if (date($supportFormat[$i], $t) != $query) {
                    continue;
                } else {
                    $items[] = [
                        "title"    => $t,
                        "subtitle" => "单击复制",
                        "icon"     => "icon.png",
                        "arg"      => $t,
                        "valid"    => true
                    ];
                }
            }
        }
    }
}

echo json_encode(["items" => $items]);