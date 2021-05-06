<?php
namespace App\Controller;
use Cake\Event\EventInterface;

class FrontsController extends AppController{

  public function beforeFilter(EventInterface $event)
  {
   // debug($event);
    //exit;
    $this -> viewBuilder()-> setLayout('front'); 
  }
    public function home(){
      //  exit("hello");
      // $this -> viewBuilder()-> setLayout('front'); 
     // $this->loadModel('calls');
      //$call = $this -> calls -> find('all');
      //debug($call);
      //exit();
     // $this->set('phonenumber',$call);
    }

    public function about(){
      //  exit("hello");
      // $this -> viewBuilder()-> setLayout('front'); 
    }

    public function contact(){
      //  exit("hello");
      // $this -> viewBuilder()-> setLayout('front'); 
    }

    public function event(){
      //  exit("hello");
      // $this -> viewBuilder()-> setLayout('front'); 
    }

    public function news(){
      //  exit("hello");
      // $this -> viewBuilder()-> setLayout('front'); 
    }

    public function interviews(){
      //  exit("hello");
      // $this -> viewBuilder()-> setLayout('front'); 
    }
    

    public function speeches(){
      //  exit("hello");
      // $this -> viewBuilder()-> setLayout('front'); 
    }
    
    public function photos(){
      //  exit("hello");
      // $this -> viewBuilder()-> setLayout('front'); 
    }
}