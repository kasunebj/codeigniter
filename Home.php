<?php


class Home extends CI_Controller
{
    public function index(){
        $this->load->view('home');
    }
    public function add(){
       $this->load->model('user');
      $response=  $this->user->add();
        if ($response){
            $this->session->set_flashdata('msg', 'successful');
            redirect('Home/index');
        }
    }

    public function get(){
        $this->load->model('user');
        $result['a']=  $this->user->get();


        $this->load->view('results_view', $result);

    }
    public function search(){
        $this->load->model('user');
        $result['b'] = $this->user->search();
        $this->load->view('search', $result);
    }

}