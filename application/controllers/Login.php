<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

/**
 * Class : Login (LoginController)
 * Login class to control to authenticate user credentials and starts user's session.
 * @author : Kishor Mali
 * @version : 1.1
 * @since : 15 November 2016
 */
class Login extends CI_Controller
{
    /**
     * This is default constructor of the class
     */
    public function __construct()
    {
        parent::__construct();
        $this->load->model('login_model');
    }

    /**
     * Index Page for this controller.
     */
    public function index()
    {
        $this->isLoggedIn('dashboard');
    }
    
    /**
     * This function used to logged in user
     */
    public function loginMe()
    {
        $this->load->library('form_validation');
        
        $this->form_validation->set_rules('usuario', 'Usuario', 'required|max_length[128]|trim');
        $this->form_validation->set_rules('clave', 'Password', 'required|max_length[32]');
        
        if($this->form_validation->run() == FALSE)
        {
            $this->index();
        }
        else
        {
            $usuario = $this->input->post('usuario');
            $clave = $this->input->post('clave');
            
            $result = $this->login_model->loginMe($usuario, $clave);

            if(count($result) > 0)
            {
                foreach ($result as $res)
                {
                    $sessionArray = array('id_usuario'=>$res->id_usuario,                    
                                            'id_rol'=>$res->id_rol,
                                            'rol'=>$res->rol,
                                            'nombre'=>$res->nombre,
                                            'fecha_creacion'=>$res->fecha_creacion
                                    );
                                    
                    $this->session->set_userdata($sessionArray);
                    redirect('/dashboard');
                }
            }
            else
            {
                $this->session->set_flashdata('error', 'Error en el Login');
                
                redirect('/login');
            }
        }
    }
    
    function logout() {
        $this->session->sess_destroy ();

        redirect ( '/login' );
    }
}

?>