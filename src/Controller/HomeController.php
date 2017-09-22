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
        if(!$this->request->is('ajax'))
        {
            $this->request->params['action'] = 'index';
        }
    }

    public function index(){
        $title = 'Accueil';

        $this->set(compact('title'));
        $this->set('_serialize',['title']);
    }

    public function Contact(){
        $title = "Contact";
        
        $this->set(compact('title'));
        $this->set('_serialize',['title']);
    }

    public function home(){
        
    }

    public function wellbeing(){

    }

        public function career(){

    }

    public function business(){
        
    }

    public function relationship(){
        
    }

    public function inspiration(){
        
    }


    public function finance(){
        
    }


}
