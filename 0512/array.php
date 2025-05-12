<?php

$players =
    [
        [
            'rank' => 1,
            'name' => '山本',
            'team' => 'ドジャーズ',
            'era' => 1.80,
        ],
        [
            'rank' => 2,
            'name' => 'ルサルド',
            'team' => 'フィリーズ',
            'era' => 2.11,
        ],
        [
            'rank' => 3,
            'name' => 'ペラルタ',
            'team' => 'ブリュワーズ',
            'era' => 2.18,
        ],
        [
            'rank' => 4,
            'name' => 'キング',
            'team' => 'パドレス',
            'era' => 2.22,
        ],
        [
            'rank' => 5,
            'name' => 'キャニング',
            'team' => 'メッツ',
            'era' => 2.357,
        ]
    ];

//foreach文を使って選手の名前だけを表示

foreach ($players as $players) {
    echo $players['name'] . "\n" . "<br>";
};

//サンリオのキャラクターで二次元配列を作成してください
$characters = [
    [
        'name' => 'ハローキティ',
        'age' => 50,
        'birthplace' => '英',
    ],
    [
        'name' => 'ケロロ',
        'age' => 10,
        'birthplace' => '日本',
    ],
    [
        'name' => 'ハム太郎',
        'age' => 5,
        'birthplace' => '日本',
    ],
    [
        'name' => 'ポムポムプリン',
        'age' => 25,
        'birthplace' => '日本',
    ],
    [
        'name' => 'シナモロール',
        'age' => 15,
        'birthplace' => '日本',
    ]
];

foreach ($characters as $characters) {
    echo $characters['age'] . "\n" . "<br>";
};

//foreach文を使って、キャラクターの名前だけを表示してください

foreach ($characters as $characters) {
    foreach ($characters as $key => $value) {
        if ($key == 'name') {
            echo $value . "\n" . "<br>";
        }
    }
};
