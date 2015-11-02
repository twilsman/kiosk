<?php
// Contains necessary includes and Creates DbContext $dc.
include_once("InitPledgeAction.php");
$pledge = new Pledge();

$pledge->FirstName = $_POST["first_name"];
$pledge->LastName = $_POST["last_name"];
$pledge->Company = $_POST["company"];
$pledge->Email = $_POST["email"];
$pledge->Country = $_POST["country"];
$pledge->Title = $_POST["title"];

$pledgeManager = new PledgeManager();
$result = $pledgeManager->CreatePledge($pledge, $dc);

header("Location: ../../thankyou.html");
?>
