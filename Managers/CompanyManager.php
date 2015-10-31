<?php
    include "../config.php";
    include "../DataContracts/Pledge.php";
    include "../DataContracts/DbContext.php";
    include "../DatabaseAccess/CompanyAccessor.php";

    $companyAccessor = new CompanyAccessor();

    $dc = new DbContext();
    $dc->ServerName = SERVERNAME;
    $dc->DatabaseName = DATABASENAME;
    $dc->UserName = USERNAME;
    $dc->Password = PASSWORD;
    $dc->Port = DBPORT;

    $result = $companyAccessor->GetCompanyList($dc);

    $companies = array();

    while($row = $result->fetch_array(MYSQL_ASSOC))
    {
        array_push($companies, $row);
    }

    echo json_encode($companies);
 ?>
