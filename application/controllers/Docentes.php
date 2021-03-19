
     <?php


class Docentes extends CI_Controller{
    
    public function index() {
        $crud = new Grocery_CRUD();
        $crud->set_table("docentes");
        
        $crud->display_as("dataingresso", "Data de Ingresso");
        $crud->display_as("numeromatricula", "Número da Matrícula");
        $crud->display_as("titulacao", "Titulação");
        $crud->display_as("situacao", "Situação");
        $crud->display_as("periodo", "Período");
        $crud->display_as("tipocarreira", "Tipo de Carreira");
        
        
        $crud->set_relation("classe_idclasse", "classe", "classe");
        $crud->set_relation("nivel_idnivel", "nivel", "nivel");
        
        $crud->display_as("classe_idclasse", "Classe");
        $crud->display_as("nivel_idnivel", "Nível");

        
        $form = $crud->render();
        $this->load->view("crud/index", $form);
    }
}

