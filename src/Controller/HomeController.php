<?php
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use Cake\Event\Event;

// Home Controller For Managing Home Tab
class HomeController extends AppController
{

    public function initialize(){

    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
    }

    public function index(){
        $title = 'Accueil';

        $this->set(compact('title'));
        $this->set('_serialize',['title']);
    }


    public function home(){
        
    }

}
