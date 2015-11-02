<?php
require_once "../../config.php";
require_once "../../DataContracts/Pledge.php";
require_once "../../DataContracts/DbContext.php";
require_once "../../Managers/PledgeManager.php";
require_once "../../DatabaseAccess/PledgeAccessor.php";

$dc = new DbContext();
$dc->ServerName = SERVERNAME;
$dc->DatabaseName = DATABASENAME;
$dc->UserName = USERNAME;
$dc->Password = PASSWORD;
$dc->Port = DBPORT;
?>
