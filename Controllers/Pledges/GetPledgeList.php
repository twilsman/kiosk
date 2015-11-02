<?php
// Contains necessary includes and Creates DbContext $dc.
include_once("InitPledgeAction.php");

$pledgeManager = new PledgeManager();
$result = $pledgeManager->GetCompanyList($dc);

$pledges = array();

while($row = $result->fetch_array(MYSQL_ASSOC))
{
    array_push($pledges, $row);
}

echo json_encode($pledges);
?>
