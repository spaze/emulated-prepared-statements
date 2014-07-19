<?php
$db = new PDO('mysql:dbname=test_gbk', 'root', '');
$db->exec('SET character_set_client = GBK'); // Remove this to close the vulnerability
// $db->setAttribute(PDO::MYSQL_ATTR_DIRECT_QUERY, 0); // Or uncomment this

/* SQL Injection Example */
$_POST['username'] = chr(0xbf) . chr(0x27) . " OR 1 -- -";
$_POST['password'] = 'guess';

var_dump($db->getAttribute(PDO::MYSQL_ATTR_DIRECT_QUERY));
var_dump($db->getAttribute(PDO::ATTR_EMULATE_PREPARES));

$stmt = $db->prepare('SELECT * FROM users WHERE username = ? AND password = ?');
$stmt->execute([$_POST['username'], $_POST['password']]);
// This will dump all the rows from the users table
var_dump($stmt->fetchAll());
