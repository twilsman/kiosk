<?php
    include "../config.php";
    include "../DataContracts/Pledge.php";
    include "../DataContracts/DbContext.php";
    include "../DatabaseAccess/PledgeAccessor.php";

    $pledgeAccessor = new PledgeAccessor();

    $pc = new Pledge();

    $pc->FirstName = $_POST["first_name"];
    $pc->LastName = $_POST["last_name"];
    $pc->Company = $_POST["company"];
    $pc->Email = $_POST["email"];
    $pc->State = $_POST["state"];
    $pc->Twitter = $_POST["twitter"];


    $dc = new DbContext();
    $dc->ServerName = SERVERNAME;
    $dc->DatabaseName = DATABASENAME;
    $dc->UserName = USERNAME;
    $dc->Password = PASSWORD;
    $dc->Port = DBPORT;

    $pledgeAccessor->CreatePledge($pc, $dc);

    header("Location: ../thankyou.html");
 ?>
