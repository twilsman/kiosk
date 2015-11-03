<?php
class PledgeAccessor{

    function Create(Pledge $pc, DbContext $dc){
        $mysqli = new mysqli($dc->ServerName,
                             $dc->UserName,
                             $dc->Password,
                             $dc->DatabaseName,
                             $dc->Port);

        if($mysqli->connect_errno){
            echo($mysql->error);
        }
        else{

            $insert_string = "insert into Pledges( first, last, company, email, country, title)
                            values ( '%s', '%s', '%s', '%s', '%s', '%s' )";

            $insert_stmt = sprintf($insert_string,
                                   $mysqli->real_escape_string($pc->FirstName),
                                   $mysqli->real_escape_string($pc->LastName),
                                   $mysqli->real_escape_string($pc->Company),
                                   $mysqli->real_escape_string($pc->Email),
                                   $mysqli->real_escape_string($pc->Country),
                                   $mysqli->real_escape_string($pc->Title) );

            if(!$mysqli->query($insert_stmt)){
                // Log Error
                echo($mysqli->error);
            }

        }
    }

    function Delete($pledgeId, DbContext $dc){
        $mysqli = new mysqli($dc->ServerName,
                             $dc->UserName,
                             $dc->Password,
                             $dc->DatabaseName,
                             $dc->Port);

        if($mysqli->connect_errno){
            echo($mysql->error);
        }
        else{

            $delete_string = "delete from Pledges where id = %d";

            $delete_stmt = sprintf($delete_string,
                                   $mysqli->real_escape_string($pledgeId));

            if(!$mysqli->query($delete_stmt)){
                // Log Error
                echo($mysqli->error);
            }

        }
    }

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

            $select_stmt = "SELECT id, first, last, company, email, country, title FROM Pledges";

            if($result = $mysqli->query($select_stmt)){
                return $result;

            }

        }
    }
}
 ?>
