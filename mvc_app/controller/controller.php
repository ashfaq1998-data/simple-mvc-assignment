<?php

require "../model/model.php";
$DB = new DB();

$results = $DB->select(
  "SELECT * FROM `users` WHERE `name` LIKE ? order by `id`",
  ["%{$_POST['search']}%"]
);

echo json_encode(count($results)==0 ? null : $results);