<?php
require_once('conf/ConfigureFromEnv.php');
function pp($input,$name=NULL){
    static $awhina;
    if(is_null($awhina)){
        $awhina = new awhina();
    }

    // Awhina is disabled by default.  So enable it for dev environment
    if(Director::isDev()) {
        $awhina->access = true;
    }

    // print_r($awhina);
    if($input){
        $awhina->print_p($input,$name);
    }
}
