<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Usuario_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get usuario by id_usuario
     */
    function get_usuario($id_usuario)
    {
        return $this->db->get_where('usuario',array('id_usuario'=>$id_usuario))->row_array();
    }
        
    /*
     * Get all usuario
     */
    function get_all_usuario()
    {
        $this->db->order_by('id_usuario', 'desc');
        return $this->db->get('usuario')->result_array();
    }
    
    function get_all_rol()
    {

        $query = $this->db->query('SELECT id_rol,descripcion FROM rol where activo=1 ORDER BY descripcion');
        return json_encode($query->result());
    }
        
    /*
     * function to add new usuario
     */
    function add_usuario($params)
    {
        $this->db->trans_start();
        $this->db->insert('usuario', $params);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();

        return $insert_id;
    }
    
    /*
     * function to update usuario
     */
    function update_usuario($id_usuario,$params)
    {
        $this->db->trans_start();
        $this->db->where('id_usuario',$id_usuario);
        $valor = $this->db->update('usuario',$params);
        $this->db->trans_complete();

        return $valor;
    }
    
    /*
     * function to delete usuario
     */
    function delete_usuario($id_usuario)
    {
        //return $this->db->delete('usuario',array('id_usuario'=>$id_usuario));
        $this->db->trans_start();
        $this->db->where('id_usuario',$id_usuario);
        $params = array(
            'activo' => 0,
        );
        $valor = $this->db->update('usuario',$params);
        $this->db->trans_complete();

        return $valor;
    }
}
