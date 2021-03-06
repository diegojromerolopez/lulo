<?php

require_once LULO_DIR__DB."/db.class.php";

load_local_configuration();

db_connect();


/**
 * Makes database connection Lulo System.
 *  */
function db_connect(){
    $db_settings = get_db_settings();
    lulo\db\DB::connect($db_settings["server"], $db_settings["user"], $db_settings["password"], $db_settings["database"]);
}

/**
 * Load local configuration that contains database access credentials.
 *  */
function load_local_configuration(){
    $local_config_path = __DIR__."/configuration.local.php";
    if(file_exists($local_config_path)){
        require_once $local_config_path;
    }
}

?>