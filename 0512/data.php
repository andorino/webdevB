<?php
//二次元配列
$people[] = ['name' => '佐藤', 'blood' => 'A'];
$people[] = ['name' => '田中', 'blood' => 'B'];
$people[] = ['name' => '加藤', 'blood' => 'O'];

foreach ($people as $key => $person) {
    echo '名前は' . $person['name'] . '<br>';
}
