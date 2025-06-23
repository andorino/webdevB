<?php

$score = rand(0, 100);
echo "スコア:　{$score}\n";

switch (true) {
    case $score >= 80;
        echo "優";
        break;
    case $score >= 60;
        echo "良";
        break;
    default:
        echo "可";
        break;
}
