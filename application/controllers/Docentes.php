<?php


class Docentes extends CI_Controller{

    public function index() {
        
        $crud = new Grocery_CRUD();
        $crud->set_table("docentes");
        $form = $crud->render();
        //$this->load->view("crud/index");
        var_dump($form);
    }
}
