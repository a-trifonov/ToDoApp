<?php

namespace Note\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class NoteController extends AbstractActionController
{
    
    protected $noteTable;  
  
    public function indexAction()
    {
        return new ViewModel(array(
            'notes' => $this->getNoteTable()->fetchAll(),
        ));
    }

    public function addAction()
    {
    }

    public function editAction()
    {
    }

    public function deleteAction()
    {
    }
  
    public function getNoteTable()
    {
        
        phpinfo();
        if (!$this->noteTable) {
            $sm = $this->getServiceLocator();
            $this->noteTable = $sm->get('Note\Model\NoteTable');
        }
        return $this->noteTable;
    }
  
}