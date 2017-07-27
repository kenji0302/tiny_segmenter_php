<?php

require('tiny_segmenter.php');
$segmenter = new TinySegmenter(); // インスタンス生成
$segs = $segmenter->segment("私の名前は中野です"); // 単語の配列が返る
var_dump($segs);

