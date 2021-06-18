<?php

require('YoudaoTranslate.php');

$keys = [
    ['key' => '541488500',  'keyfrom'=>'ScentRemains'],
    ['key' => '164530784',  'keyfrom'=>'SeekBetterMe'],
    ['key' => '1813511369', 'keyfrom'=>'Bro2Win'],
    ['key' => '2046568483', 'keyfrom'=>'SanXiShi']
];

$translator = new YoudaoTranslate($keys);
echo $translator->translate($argv[1]);

?>