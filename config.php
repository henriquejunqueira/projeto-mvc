<?php

    require "environment.php";
    
    global $config;
    $config = array();
    
    if(ENVIRONMENT == "development"){
        $config['dbname'] = "crud";
        $config['host'] = "localhost";
        $config['dbuser'] = "henrique";
        $config['dbpass'] = "ti_2henrique";
    }else{
        // alterar de acordo com os dados do servidor
        $config['dbname'] = "crud";
        $config['host'] = "localhost";
        $config['dbuser'] = "root";
        $config['dbpass'] = "ti_2henrique";
    }

?>