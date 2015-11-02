<?php
// Contains necessary includes and Creates DbContext $dc.
include_once("InitPledgeAction.php");

$pledgeId = $_GET["pledgeId"];

$pledgeManager = new PledgeManager();
$pledgeManager->DeletePledge($pledgeId, $dc);

header("Location: ../../delete.php");
?>
