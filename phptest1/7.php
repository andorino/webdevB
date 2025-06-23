<?php

$users = [
    ['name' => 'Ken', 'age' => 20, 'score' => 85],
    ['name' => 'Yui', 'age' => 22, 'score' => 78],
    ['name' => 'Taro', 'age' => 19, 'score' => 55]
];

foreach ($users as $users) {
    $name = $users['name'];
    $age = $users['age'];
    $score = $users['score'];

    if ($score >= 80) {
        $judgment = "優";
    } elseif ($score >= 60) {
        $judgment = "良";
    } else {
        $judgment = "可";
    }


    echo "{$name}: {$age}歳, スコア:{$score}, 判定{$judgment}<br>";
}
