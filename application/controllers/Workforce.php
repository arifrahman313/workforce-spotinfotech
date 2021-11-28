<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Workforce extends CI_Controller {
    
  public function __construct(){
      
     parent::__construct();
     $this->load->library('session');   
     
  }
     

  public function submitData(){
    
     
    
        $hours=[];
        
        if (!empty($_POST['frontendhour'])) {
            
            $hours['frontendhour'] = $_POST['frontendhour'];
             
        }if (!empty($_POST['backendhour'])) {
            
            $hours['backendhour'] = $_POST['backendhour'];
             
        }if (!empty($_POST['fullstackhour'])) {
            
            $hours['fullstackhour'] = $_POST['fullstackhour'];
            
        }if (!empty($_POST['drupaldevhour'])) {
            
            $hours['drupaldevhour'] = $_POST['drupaldevhour'];
             
        }if (!empty($_POST['ecommperhour'])) {
             
            $hours['ecommperhour'] = $_POST['ecommperhour'];
            
        }if (!empty($_POST['uxperhour'])) {
            
            $hours['uxperhour'] = $_POST['uxperhour'];
             
        }if (!empty($_POST['appperhour'])) {
            
            $hours['appperhour'] = $_POST['appperhour'];
             
        }if (!empty($_POST['graphicsperhour'])) {
            
            $hours['graphicsperhour'] = $_POST['graphicsperhour'];
             
        }if(!empty($_POST['dbperhour'])) {
            
            $hours['dbperhour'] = $_POST['dbperhour'];
        }if(!empty($_POST['digitalmarketerhour'])) {
            
            $hours['digitalmarketerhour'] = $_POST['digitalmarketerhour'];
        }if(!empty($_POST['seostathour'])) {
            
            $hours['seostathour'] = $_POST['seostathour'];
        }if(!empty($_POST['pmmhour'])) {
            
            $hours['pmmhour'] = $_POST['pmmhour'];
        }if(!empty($_POST['aehour'])) {
            
            $hours['aehour'] = $_POST['aehour'];
        }if(!empty($_POST['emhour'])) {
            
            $hours['emhour'] = $_POST['emhour'];
        }if(!empty($_POST['smmhour'])) {
            
            $hours['smmhour'] = $_POST['smmhour'];
        }if(!empty($_POST['amhour'])) {
            
            $hours['amhour'] = $_POST['amhour'];
        }if(!empty($_POST['tsmhour'])) {
            
            $hours['tsmhour'] = $_POST['tsmhour'];
        }if(!empty($_POST['bbhour'])) {
            
            $hours['bbhour'] = $_POST['bbhour'];
        }if(!empty($_POST['cchour'])) {
            
            $hours['cchour'] = $_POST['cchour'];
        }if(!empty($_POST['vahour'])) {
            
            $hours['vahour'] = $_POST['vahour'];
        }if(!empty($_POST['abchour'])) {
            
            $hours['abchour'] = $_POST['abchour'];
        }if(!empty($_POST['jaccountant'])) {
            
            $hours['jaccountant'] = $_POST['jaccountant'];
        }if(!empty($_POST['cpahour'])) {
            
            $hours['cpahour'] = $_POST['cpahour'];
        }if(!empty($_POST['cahour'])) {
            
            $hours['cahour'] = $_POST['cahour'];
        }if(!empty($_POST['bkhour'])) {
            
            $hours['bkhour'] = $_POST['bkhour'];
        }if(!empty($_POST['jtphour'])) {
            
            $hours['jtphour'] = $_POST['jtphour'];
        }if(!empty($_POST['btphour'])) {
            
            $hours['btphour'] = $_POST['btphour'];
        }if(!empty($_POST['brdphour'])) {
            
            $hours['brdphour'] = $_POST['brdphour'];
        }if(!empty($_POST['pciehour'])) {
            
            $hours['pciehour'] = $_POST['pciehour'];
        }if(!empty($_POST['liehour'])) {
            
            $hours['liehour'] = $_POST['liehour'];
        }if(!empty($_POST['roahour'])) {
            
            $hours['roahour'] = $_POST['roahour'];
        }if(!empty($_POST['ocahour'])) {
            
            $hours['ocahour'] = $_POST['ocahour'];
        }if(!empty($_POST['erhour'])) {
            
            $hours['erhour'] = $_POST['erhour'];
        }if(!empty($_POST['csrhour'])) {
            
            $hours['csrhour'] = $_POST['csrhour'];
        }if(!empty($_POST['srhour'])) {
            
            $hours['srhour'] = $_POST['srhour'];
        }if(!empty($_POST['smrhour'])) {
            
            $hours['smrhour'] = $_POST['smrhour'];
        }if(!empty($_POST['advehour'])) {
            
            $hours['advehour'] = $_POST['advehour'];
        }
        
        // print_r($hours);
        // exit();
        $this->session->set_userdata('workinghours',$hours);
        $this->session->set_userdata('totalprice',$_POST['totalsum']);
        $this->load->view('templates/header');
        $this->load->view('timezone');
        $this->load->view('templates/footer');
    
  }
  
  public function userData(){
      
        $data = array(
        'price' => $this->session->userdata('totalprice')
        );
        
        $this->load->view('templates/header');
        $this->load->view('clientdata',$data);
        $this->load->view('templates/footer');
     
  }
   
  
  public function timeScheduling(){
    
        $this->session->set_userdata('timezone',$_POST['timezone']);
        $this->session->set_userdata('startingdate',$_POST['startingdate']);
        $data['hours'] = $this->session->userdata('workinghours');
        $this->load->view('templates/header');
        $this->load->view('workinghoursetup', $data);
        $this->load->view('templates/footer');
    
  }
  
  public function payment(){
    
        // $this->load->model('SaveInfo');   
        // $this->SaveInfo->saveData(implode("|",$_POST),implode("|",$this->session->userdata('workinghours')),$this->input->post('stripeToken'),$this->session->userdata('timezone'));
        
        // $this->session->set_userdata('fn',$_POST['firstname']);
        // $this->session->set_userdata('ln',$_POST['lastname']);
        // $this->session->set_userdata('al1',$_POST['addline1']);
        // $this->session->set_userdata('al2',$_POST['addline2']);
        
        // require_once('application/libraries/stripe-php/init.php');
        // \Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));
        // \Stripe\Charge::create ([
        //     "amount" => $this->session->userdata('totalprice') * 100,
        //     "currency" => "usd",
        //     "source" => $this->input->post('stripeToken'),
        //     "description" => "Payment for workforce" 
        // ]);
                
        // $this->load->view('templates/header');
        // $this->load->view('success');
        // $this->load->view('templates/footer');
        
        // $this->load->view('templates/header');
        // $this->load->view('payment');
        // $this->load->view('templates/footer');
        $data['totalprice']=$this->session->userdata('totalprice');
        $this->session->set_userdata('clientinfo',$_POST);
        $this->session->set_userdata('fn',$_POST['firstname']);
        $this->session->set_userdata('ln',$_POST['lastname']);
        $this->session->set_userdata('al1',$_POST['addline1']);
        $this->session->set_userdata('al2',$_POST['addline2']);
        
        $this->load->view('templates/stripe-header');
        $this->load->view('payment',$data);
        $this->load->view('templates/stripe-footer');
        
        
             
  }
  
  public function invoice(){
      
        $data = array(
          'name' => $this->session->userdata('fn')." ".$this->session->userdata('ln'),
          'startingdate' => $this->session->userdata('startingdate'),
          'address_1'  => $this->session->userdata('al1'),
          'address_2'  => $this->session->userdata('al2'),
          'totalprice' => $this->session->userdata('totalprice')
        );
        $data['hours']=$this->session->userdata('workinghours');
        $this->load->view('templates/header');
        $this->load->view('invoice',$data);
        $this->load->view('templates/footer'); 
     
  }
  
  public function customerPayment(){
     
    require_once('application/libraries/stripe-php/init.php');
    \Stripe\Stripe::setApiKey($this->config->item('stripe_secret'));
    $checkout_session  = \Stripe\Charge::create ([
        "amount" => $this->session->userdata('totalprice') * 100,
        "currency" => "usd",
        "source" => $_COOKIE["token"],
        "description" => "Payment for workforce" 
    ]);
    
    $data['status']=$checkout_session['status'];
    $this->load->view('templates/header');
    $this->load->view('success',$data);
    $this->load->view('templates/footer');
        
  
  }
  
  
  
}
