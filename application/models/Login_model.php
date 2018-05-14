<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Login_model extends CI_Model
{
    
    /**
     * This function used to check the login credentials of the user
     * @param string $nombre : This is nombre of the user
     * @param string $clave : This is encrypted clave of the user
     */
    function loginMe($nombre, $clave)
    {
        $this->db->select("u.id_usuario, u.clave, u.nombre, u.id_rol, r.descripcion as rol,DATE_FORMAT(u.fecha_creacion,'%d-%m-%Y') AS fecha_creacion ");
        $this->db->from('usuario as u');
        $this->db->join('rol as r','r.id_rol = u.id_rol');
        $this->db->where('u.nombre', $nombre);
        $this->db->where('u.activo', 1);
        $query = $this->db->get();
        
        $user = $query->result();
        
        if(!empty($user)){
            //if(verifyHashedPassword($clave, $user[0]->clave)){
            if (md5($clave)==$user[0]->clave) {
                return $user;
            } else {
                return array();
            }
        } else {
            return array();
        }
    }

}

?>
