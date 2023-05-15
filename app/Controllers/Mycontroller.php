<?php
 
namespace App\Controllers;

use App\Models\MyModel;

 
class Mycontroller extends BaseController
{
    // Session
    protected $session;
    // Data
    protected $data;
    // Model
    protected $mymodel;
    protected $sd;
 
    // Initialize Objects
    public function __construct(){
        $this->mymodel = new MyModel();
        $this->session= \Config\Services::session();
        $this->data['session'] = $this->session;
        $this->data['page_title']= "Gokul";
    }
 
    // Home Page
    public function index($created=0){
        $this->data['user_created'] = false;
        $this->data['user_updated'] = false;
        if($created == 1){
            $this->data['user_created'] = true;
        }else if($created == 2){
            $this->data['user_updated'] = true;
        }
        $this->data['list'] = $this->mymodel->select('*')->get()->getResult();
        echo view('templates/header', $this->data);
        echo view('crud/home', $this->data);
        echo view('templates/footer');
    }

    public function create(){
        $this->data['page_title'] = "crate page";
        echo view('templates/header', $this->data);
        echo view('crud/add');
        echo view('templates/footer');
    }
    public function store(){
        $this->data['user_created'] = true;
        $createuser =[
            'name'=>$this->request->getPost('name'),
            'email'=>$this->request->getPost('email'),
            'password'=>$this->request->getPost('password'),
        ];
        if($this->mymodel->save($createuser)){
            return redirect()->to(base_url('/1'));
        }else{
            echo view('templates/header', $this->data);
            echo '<p class="text-center my-5 py-5">Bro we got screwed up</p>';
        }
    }
    public function getupdate(){
        $this->data['page_title'] = "crate page";
        echo view('templates/header', $this->data);
        echo view('crud/add');
        echo view('templates/footer');
    }
}