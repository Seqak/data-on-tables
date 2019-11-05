<?php

namespace DBConfig;

class DBConfig{
    
    public function getConfig(){
        return array(
            'dbHost' => 'localhost',
            'dbUser' => 'root',
            'dbPassword' => 'vertrigo',
            'dbName' => 'data_on_tables'
        );
    }
}