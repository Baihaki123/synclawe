<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Role_model extends CI_Model
{
    public function getRole()
    {
        $query = "SELECT `user`.*, `user_role`.`role`
                  FROM `user` JOIN `user_role`
                  ON `user`.`role_id` = `user_role`.`role_id`
                ";
        return $this->db->query($query)->result_array();
    }

    public function hapusRole($id)
    {
        $this->db->delete('user_role', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4>Role deleted!</h4>
            </div>');
        redirect('login/Admin/role');
    }

    public function hapusUser($id)
    {
        $this->db->delete('user', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4>Akun berhasil dihapus</h4>
            </div>');
        redirect('login/SAdmin/user');
    }

    public function getUserById($id)
    {
        return $this->db->get_where('user', ['id' => $id])->result_array(); 
    }
}