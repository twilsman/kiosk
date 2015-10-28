<?php
    class PledgeAccessor{

        function CreatePledge(Pledge $pc, DbContext $dc){

            $mysqli = new mysqli($dc->ServerName,
                                 $dc->UserName,
                                 $dc->Password,
                                 $dc->DatabaseName,
                                 $dc->Port);

            if($mysqli->connect_errno){
                echo($mysql->error);
            }
            else{

                $insert_string = "insert into Pledges( first, last, company, email, state, twitter)
                                values ( '%s', '%s', '%s', '%s', '%s', '%s' )";

                $insert_stmt = sprintf($insert_string,
                                       $mysqli->real_escape_string($pc->FirstName),
                                       $mysqli->real_escape_string($pc->LastName),
                                       $mysqli->real_escape_string($pc->Company),
                                       $mysqli->real_escape_string($pc->Email),
                                       $mysqli->real_escape_string($pc->State),
                                       $mysqli->real_escape_string($pc->Twitter) );

                echo($insert_stmt);

                if(!$mysqli->query($insert_stmt)){
                    // Log Error
                    echo($mysqli->error);
                }

            }
        }
    }
 ?>
