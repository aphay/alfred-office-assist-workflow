<?php


$items = [];

// 获取ip地址，子网掩码，组播地址
exec('ifconfig | grep "inet "|grep -v 127.0.0.1', $out, $stats);
if (!empty($out)) {
    $outArr = explode(" ", $out[0]);
    if (sizeof($outArr) >= 2) {
        $items[] = [
            "title"    => $outArr[1],
            "subtitle" => "本机ip",
            "icon"     => "icon.png",
            "arg"      => $outArr[1],
            "valid"    => true
        ];
    }
    if (sizeof($outArr) >= 4) {
        $items[] = [
            "title"    => $outArr[3],
            "subtitle" => "子网掩码",
            "icon"     => "icon.png",
            "arg"      => $outArr[3],
            "valid"    => true
        ];
    }
    if (sizeof($outArr) >= 6) {
        $items[] = [
            "title"    => $outArr[5],
            "subtitle" => "组播地址",
            "icon"     => "icon.png",
            "arg"      => $outArr[3],
            "valid"    => true
        ];
    }
}

exec('ifconfig | grep "inet6 "|grep en0', $out1, $stats);
if (!empty($out1)) {
    $outArr1 = explode(" ", str_replace("%", " ", $out1[0]));
    if (sizeof($outArr1) >= 2) {
        $items[] = [
            "title"    => $outArr1[1],
            "subtitle" => "本机ipv6",
            "icon"     => "icon.png",
            "arg"      => $outArr1[1],
            "valid"    => true
        ];
    }
}

echo json_encode(["items" => $items]);