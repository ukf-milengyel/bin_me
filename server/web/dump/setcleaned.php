<?php
require_once "../../class/actions/Dump.php";

session_start();

$vals = json_decode(file_get_contents("php://input"));
$id = $vals->i;
$status = $vals->s;

echo Dump::setCleaned($id, $status);