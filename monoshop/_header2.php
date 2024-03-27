<?php
require_once __DIR__. '/db.class.php';
require_once __DIR__. '/like.class.php';

require 'db.class.php';

require 'like.class.php';
$DB = new DB();

$like = new like($DB);
?>