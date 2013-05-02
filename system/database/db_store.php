<?php
class DB_Store
{
    private $_DriverContainer;
    private $_TableDriverMap;
    private $_CiLoader;
    
    public function __construct($loader)
    {
        $this->_CiLoader = $loader;
        $this->_initializeConnections();
    }
    
    public function getDriverForTable($tableName)
    {
        if(isset($this->_TableDriverMap[$tableName]) && isset($this->_DriverContainer[$this->_TableDriverMap[$tableName]]))
        {
            return $this->_DriverContainer[$this->_TableDriverMap[$tableName]];
        }
        else
        {
            return FALSE;
        }
    }
    
    private function _initializeConnections()
    {
        include_once(APPPATH.'config/database'.EXT);
        include_once(BASEPATH.'database/pdo'.EXT);
        include_once(BASEPATH.'database/db_active_rec'.EXT);
        foreach($db as $database)
        {
            if($database['dbdriver'] === "mysql")
            {
                include_once(BASEPATH.'database/drivers/pdo_mysql'.EXT);
                $this->_registerDriver(new DB_Driver_Mysql($database));
            }
        }
        
    }
    
    private function _registerDriver($driver)
    {
        $UID = md5($driver->getDatabase());
        if(!isset($this->_DriverContainer[$UID]))
        {
            $this->_DriverContainer[$UID] = $driver;
            $driver->setUID($UID);
            $tables = $driver->run("SHOW TABLES",NULL)->fetchAll();
            foreach($tables as $table)
            {
                if(!isset($this->_TableDriverMap[$table[0]]))
                {
                    $this->_TableDriverMap[$table[0]] = $UID;
                }
            }
        }
    }
}
?>