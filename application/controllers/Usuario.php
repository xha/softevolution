<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Usuario extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('usuario_model');
    } 

    /*
     * Listing of usuario
     */
    function index()
    {
        $data['usuario'] = $this->usuario_model->get_all_usuario();
        
        $data['_view'] = 'usuario/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new usuario
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
                'clave' => md5($this->input->post('clave')),
                'id_rol' => $this->input->post('id_rol'),
                'activo' => $this->input->post('activo'),
                'nombre' => $this->input->post('nombre'),
            );
            
            $usuario_id = $this->usuario_model->add_usuario($params);
            redirect('usuario/index');
        }
        else
        {            
            $data['roles'] = $this->usuario_model->get_all_rol();
            $data['_view'] = 'usuario/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a usuario
     */
    function edit($id_usuario)
    {   
        // check if the usuario exists before trying to edit it
        $data['usuario'] = $this->usuario_model->get_usuario($id_usuario);
        
        if(isset($data['usuario']['id_usuario']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
                    'clave' => md5($this->input->post('clave')),
                    'id_rol' => $this->input->post('id_rol'),
                    'activo' => $this->input->post('activo'),
                    'nombre' => $this->input->post('nombre'),
                );

                $this->usuario_model->update_usuario($id_usuario,$params);            
                redirect('usuario/index');
            }
            else
            {
                $data['roles'] = $this->usuario_model->get_all_rol();
                $data['_view'] = 'usuario/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The usuario you are trying to edit does not exist.');
    } 

    /*
     * Deleting usuario
     */
    function remove($id_usuario)
    {
        $usuario = $this->usuario_model->get_usuario($id_usuario);

        // check if the usuario exists before trying to delete it
        if(isset($usuario['id_usuario']))
        {
            $this->usuario_model->delete_usuario($id_usuario);
            redirect('usuario/index');
        }
        else
            show_error('The usuario you are trying to delete does not exist.');
    }
    
}
