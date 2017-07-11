<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Articles Controller
 *
 *
 * @method \App\Model\Entity\Article[] paginate($object = null, array $settings = [])
 */
class ArticlesController extends AppController
{

  public function initialize(){
    parent::initialize();
    $this->loadComponent('RequestHandler');
  }

  public function beforeFilter(Event $event){
    parent::beforeFilter($event);
  }

  public function all(){
    if($this->request->is('ajax')){
        if($this->request->is('get')){
            $this->RequestHandler->renderAs($this, 'json');

            $query_data = $this->request->query;
            $root_heading = $query_data['root_heading'];
            $articles_wide_banner = $this->Articles->find()
                                       ->contain(['Headings'=>function($q){
                                            return $q->where(['Headings.heading_slug'=>'wide_banner']);},'Headings.RootHeadings'=>function($q)use($root_heading){
                                            return $q->where(['RootHeadings.root_heading_name'=>$root_heading]);
                                       },'ArticleIllustrations'=>function($q){
                                          return $q->where(['ArticleIllustrations.illustration_slug'=>'wide_banner']);
                                       }])
                                       ->last();

            $this->set(compact('articles_wide_banner'));
            $this->set('_serialize',['articles_wide_banner']);
        }
    }
  }

}
