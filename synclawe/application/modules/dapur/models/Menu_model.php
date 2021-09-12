<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Menu_model extends CI_Model
{
    public function getSubMenu()
    {
        $query = "SELECT `user_sub_menu`.*, `user_menu`.`menu`
                  FROM `user_sub_menu` JOIN `user_menu`
                  ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                ";
        return $this->db->query($query)->result_array();
    }
    
    public function hapusData($id)
    {
        $this->db->delete('user_menu', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4>Menu deleted!</h4>
            </div>');
        redirect('login/menu');
    }

    public function hapusSubmenu($id)
    {
        $this->db->delete('user_sub_menu', ['id' => $id]);
    }

    function total_user()
    {
        // num_rows = menjumlah jumlah baris dari result sql
        return   $this->db->get('user')->num_rows();
    }

    function total_unit()
    {
        // num_rows = menjumlah jumlah baris dari result sql
        return   $this->db->get('unit')->num_rows();
    }

    function Get_cariData($user)
    {
        $this->db->select('*');
        $this->db->limit(10);
        $this->db->from('user');
        $this->db->like('name', $user);
        return $this->db->get()->result_array();
    }

    public function getpMagang($id_user)
    {
        $this->db->select('user.*, groups.*');
        $this->db->join('user', 'groups.id_user = user.id', 'inner');
        $this->db->where('groups.id_user', $id_user);
        return $this->db->get('groups')->result_array();
    }
}
