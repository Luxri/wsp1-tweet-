<?php
// tweet.php?id=3
// tweet.php?id=<script>alert("xss")</script>
//$tweetId = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_SPECIAL_CHARS);
$tweetId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);

include 'include/dbinfo.php';
include 'include/db.php';

$sth = $dbh->prepare('SELECT tweet.*, users.name FROM tweet
            JOIN users
            ON tweet.user_id = users.id
            WHERE tweet.id = :tweetId');
$sth->bindParam(':tweetId', $tweetId);
$sth->execute();
$result = $sth->fetch(PDO::FETCH_ASSOC);

$title = "Tweet from " . $row['name'];

include 'views/tweet_layout.php';
?>
