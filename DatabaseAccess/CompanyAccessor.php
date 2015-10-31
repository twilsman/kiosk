<?php
    class CompanyAccessor{

        function GetCompanyList(DbContext $dc){

            $mysqli = new mysqli($dc->ServerName,
                                 $dc->UserName,
                                 $dc->Password,
                                 $dc->DatabaseName,
                                 $dc->Port);

            if($mysqli->connect_errno){
                echo($mysql->error);
            }
            else{

                $select_stmt = "select distinct company from Pledges";

                if($result = $mysqli->query($select_stmt)){
                    return $result;
                }

            }
        }
    }
 ?>
