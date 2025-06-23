<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $zip1 = isset($_POST['zip1']) ? htmlspecialchars($_POST['zip1'], ENT_QUOTES, 'UTF-8') : '';
    $zip2 = isset($_POST['zip2']) ? htmlspecialchars($_POST['zip2'], ENT_QUOTES, 'UTF-8') : '';
    $zip = $zip1 . '-' . $zip2;
    $pattern = '/^\d{3}-\d{4}$/';
    if (preg_match($pattern, $zip)) {
        echo "郵便番号は正しい形式です: {$zip}";
    } else {
        echo "郵便番号の形式が正しくありません。正しい形は「XXX-XXXX」です。";
    }
}
