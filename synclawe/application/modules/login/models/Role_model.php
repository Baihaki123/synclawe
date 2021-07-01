<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Role_model extends CI_Model
{

    public function hapusRole($id)
    {
        $this->db->delete('user_role', ['id' => $id]);
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4>Role deleted!</h4>
            </div>');
        redirect('login/Admin/role');
    }
}