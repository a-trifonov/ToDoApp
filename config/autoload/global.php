<?php

return array(
  
  'db' => array(
      'driver'         => 'Pdo',
      'dsn'            => 'mysql:dbname=trifonov_app;host=mysql',
  ),
  
  'service_manager' => array(
      'factories' => array(
          'Zend\Db\Adapter\Adapter' => 'Zend\Db\Adapter\AdapterServiceFactory',
      ),
  ),

);

?>