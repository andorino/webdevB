<head>
    <meta charset="UTF-8">
    <title>掲示板</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<?php

function get_all_threads(PDO $pdo)
{
    $sql = "SELECT * FROM threads ORDER BY created_at DESC";
    $stmt = $pdo->query($sql);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function create_thread(PDO $pdo, $title)
{
    $sql = "INSERT INTO threads (title, created_at) VALUES (?, NOW())";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute([$title]);
}
function get_thread_by_id(PDO $pdo, int $id)
{
    $stmt = $pdo->prepare("SELECT * FROM threads WHERE id = ?");
    $stmt->execute([$id]);
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
