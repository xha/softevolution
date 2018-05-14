<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Categoria extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Categoria_model');
        //$this->isLogged();
    } 

    /*
     * Listing of categoria
     */
    function index()
    {
        $data['categoria'] = $this->Categoria_model->get_all_categoria();
        
        $data['_view'] = 'categoria/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new categoria
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0) {   
            $this->form_validation->set_rules('descripcion','Descripción','trim|required|max_length[128]|xss_clean');
            $this->form_validation->set_rules('activo','Activo','trim|required|numeric');
            
            if($this->form_validation->run() == FALSE) {
                $this->add();
            } else {
                $params = array(
                    'descripcion' => $this->input->post('descripcion'),
                    'activo' => $this->input->post('activo'),
                );

                $categoria_id = $this->Categoria_model->add_categoria($params);
                redirect('categoria/index');
            }
        } else {            
            $data['_view'] = 'categoria/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a categoria
     */
    function edit($id_categoria)
    {   
        // check if the categoria exists before trying to edit it
        $data['categoria'] = $this->Categoria_model->get_categoria($id_categoria);
        
        if(isset($data['categoria']['id_categoria']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'descripcion' => $this->input->post('descripcion'),
					'activo' => $this->input->post('activo'),
                );

                $this->Categoria_model->update_categoria($id_categoria,$params);            
                redirect('categoria/index');
            }
            else
            {
                $data['_view'] = 'categoria/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The categoria you are trying to edit does not exist.');
    } 

    /*
     * Deleting categoria
     */
    function remove($id_categoria)
    {
        $categoria = $this->Categoria_model->get_categoria($id_categoria);

        // check if the categoria exists before trying to delete it
        if(isset($categoria['id_categoria']))
        {
            $this->Categoria_model->delete_categoria($id_categoria);
            redirect('categoria/index');
        }
        else
            show_error('The categoria you are trying to delete does not exist.');
    }
    
}