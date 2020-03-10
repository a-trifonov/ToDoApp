<?php

namespace Note;

use Note\Model\Note;
use Note\Model\NoteTable;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\ModuleManager\Feature\AutoloaderProviderInterface;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module
{

    public function getConfig()
    {
        return include __DIR__ . '/config/module.config.php';
    }
  
    public function getServiceConfig()
    {
        return array(
            'factories' => array(
                'Note\Model\NoteTable' =>  function($sm) {
                    $tableGateway = $sm->get('NoteTableGateway');
                    $table = new NoteTable($tableGateway);
                    return $table;
                },
                'NoteTableGateway' => function ($sm) {
                    $dbAdapter = $sm->get('Zend\Db\Adapter\Adapter');
                    $resultSetPrototype = new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Note());
                    return new TableGateway('note', $dbAdapter, null, $resultSetPrototype);
                },
            ),
        );
    }
  
}