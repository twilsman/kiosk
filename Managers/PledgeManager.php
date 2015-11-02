<?php
class PledgeManager{
    private  $_pledgeAccessor;

    function __construct(){
        $this->_pledgeAccessor = new PledgeAccessor();
    }

    function CreatePledge(Pledge $pledge, DbContext $dc){
        return $this->_pledgeAccessor->Create($pledge, $dc);
    }

    function GetCompanyList(DbContext $dc){
        return $this->_pledgeAccessor->GetCompanyList($dc);
    }

    function DeletePledge($pledgeId, DbContext $dc){
        $this->_pledgeAccessor->Delete($pledgeId, $dc);
    }

}
 ?>
