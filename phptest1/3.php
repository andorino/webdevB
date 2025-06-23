<?php

$total = 1000;
$tax = 0.1;
$total_with_tax = $total + ($total * $tax);
echo (int) $total_with_tax;
