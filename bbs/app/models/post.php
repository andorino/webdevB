<?php
function get_all_posts($pdo)
{
    $stmt = $pdo->query("SELECT * FROM posts ORDER BY created_at DESC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function insert_post(PDO $pdo, int $thread_id, string $name, string $comment): void
{
    try {
        $sql = "INSERT INTO posts (thread_id, name, comment, created_at) VALUES (?, ?, ?, NOW())";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$thread_id, $name, $comment]);
    } catch (PDOException $e) {
        error_log("投稿の挿入に失敗: " . $e->getMessage());
        throw $e; // デバッグ時は例外を再スロー
    }
}


function get_posts_by_thread(PDO $pdo, $thread_id)
{
    $sql = "SELECT * FROM posts WHERE thread_id = ? ORDER BY created_at ASC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$thread_id]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
