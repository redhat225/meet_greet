<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;

// Home Controller For Managing Home Tab
class ElementController extends AppController
{

    public function initialize(){
        $this->viewBuilder()->layout('blank');
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }

    public function navbar(){
    }

    public function footer(){

    }

}
