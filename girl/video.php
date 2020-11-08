<?php

function read(...$filelist) {
    $list = [];
    foreach ($filelist as $file) {
        $handle = fopen($file, 'r');
        while (($line = fgets($handle)) !== false) {
            array_push($list, trim($line));
        }
        fclose($handle);
    }
    return $list;
}

$list = read('https://cdn.jsdelivr.net/gh/sks02/pic/girl/ks.txt');
$url = $list[array_rand($list)];

header("Location: {$url}");
