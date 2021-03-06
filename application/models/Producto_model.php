<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Producto_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get producto by id_producto
     */
    function get_producto($id_producto)
    {
        return $this->db->get_where('producto',array('id_producto'=>$id_producto))->row_array();
    }
        
    /*
     * Get all producto
     */
    function get_all_producto()
    {
        $this->db->order_by('id_producto', 'desc');
        return $this->db->get('producto')->result_array();
    }
        
    function get_all_marca()
    {

        $query = $this->db->query('SELECT id_marca,descripcion FROM marca where activo=1 ORDER BY descripcion');
        return json_encode($query->result());
    }
    
    function get_all_categoria()
    {

        $query = $this->db->query('SELECT id_categoria,descripcion FROM categoria where activo=1 ORDER BY descripcion');
        return json_encode($query->result());
    }
    /*
     * function to add new producto
     */
    function add_producto($params)
    {
        $this->db->trans_start();
        $this->db->insert('producto', $params);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();

        return $insert_id;
    }
    
    /*
     * function to update producto
     */
    function update_producto($id_producto,$params)
    {
        $this->db->trans_start();
        $this->db->where('id_producto',$id_producto);
        $valor = $this->db->update('producto',$params);
        $this->db->trans_complete();

        return $valor;
    }
    
    /*
     * function to delete producto
     */
    function delete_producto($id_producto)
    {
        //return $this->db->delete('producto',array('id_producto'=>$id_producto));
        $this->db->trans_start();
        $this->db->where('id_producto',$id_producto);
        $params = array(
            'activo' => 0,
        );
        $valor = $this->db->update('producto',$params);
        $this->db->trans_complete();

        return $valor;
    }
}
