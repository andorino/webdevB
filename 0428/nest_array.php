<?php
$people[] = ['name' => '佐藤', 'blood' => 'A'];
$people[] = ['name' => '田中', 'blood' => 'B'];
$people[] = ['name' => '加藤', 'blood' => 'O'];

var_dump($people);

echo $people[0]['blood'] . '<br>';
echo $people[2]['name'] . '<br>';

foreach ($people as $people_key => $person) {
    echo '順番は' . $people_key . "<br>";
    foreach ($person as $person_key => $value) {
        echo 'キーは' . $person_key . '、値は' . $value . '<br>';
    }
};

#二次元配列を作ってください
$people2 = [
    ['name' => '佐藤', 'blood' => 'A'],
    ['name' => '田中', 'blood' => 'B'],
    ['name' => '加藤', 'blood' => 'O'],
    ['name' => '鈴木', 'blood' => 'AB'],
];

//最後の値を全部とる
foreach ($people2 as $person) {
    // echo $person['name'] . '<br>';
    echo $person['blood'] . '<br>';
}
