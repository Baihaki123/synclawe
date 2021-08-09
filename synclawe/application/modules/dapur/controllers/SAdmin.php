<?php
defined('BASEPATH') or exit('No direct script access allowed');


class SAdmin extends CI_Controller
{

    public function __construct()
	{
		parent::__construct();
        is_logged_in();
        $this->load->model('Role_model');
	}

    public function index()
    {
        $this->load->model('Menu_model'); //load dulu modelnya
		$data['jml_user'] = $this->Menu_model->total_user();
		$data['jml_unit'] = $this->Menu_model->total_unit();
		// $data['jml_pria'] = $this->Menu_model->total_pria();
		// $data['jml_wanita'] = $this->Menu_model->total_wanita();
		// $data['page'] = 'Home';
		// $this->load->view('Dashboard', $data, FALSE);
        
        $data['title'] = 'Dashboard';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('sadmin/index', $data);
        $this->load->view('templates/footer');
    }



    public function role()
    {
        $data['title'] = 'Role';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $data['role'] = $this->db->get('user_role')->result_array();

        $this->form_validation->set_rules('role', 'Role', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('sadmin/role', $data);
            $this->load->view('templates/footer');
        } else {
            $this->db->insert('user_role', ['role' => $this->input->post('role')]);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4>New role added!</h4>
            </div>');
            redirect('login/SAdmin/role');
        }
        
    }


    public function hapus($id)
    {
        $this->Role_model->hapusRole($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4>Role deleted!</h4>
            </div>');
        redirect('login/SAdmin/role');
    }


    public function editRole()
    {

        $this->form_validation->set_rules('role', 'Role', 'required');
        if ($this->form_validation->run() ==  false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4>Role gagal updated!</h4>
            </div>');
            redirect('login/SAdmin/role');
        } else {
            $id = $this->input->post('id');
            $role = $this->input->post('role');

            $data = array (
                'id' => $id,
                'role' => $role
            );
            
            $this->db->where('id', $id);
            $this->db->update('user_role', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4>Role updated!</h4>
            </div>');
            redirect('login/SAdmin/role');
        }
    }

    


    public function roleAccess($role_id)
    {
        $data['title'] = 'Role Access';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $data['role'] = $this->db->get_where('user_role', ['id' => $role_id])->row_array();

        $this->db->where('id !=', 1);
        $data['menu'] = $this->db->get('user_menu')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('sadmin/role-access', $data);
        $this->load->view('templates/footer');
    }

    public function changeAccess()
    {
        $menu_id = $this->input->post('menuId');
        $role_id = $this->input->post('roleId');

        $data = [
            'role_id' => $role_id,
            'menu_id' => $menu_id
        ];

        $result = $this->db->get_where('user_access_menu', $data);

        if ($result->num_rows() < 1) {
            $this->db->insert('user_access_menu', $data);
        } else {
            $this->db->delete('user_access_menu', $data);
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4>Access Changed!</h4>
            </div>');
    }

    public function user()
    {
        $data['title'] = 'User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Role_model', 'role');

        $data['role'] = $this->role->getRole();
        $data['getrole'] = $this->db->get('user_role')->result_array();
        // $data['userTambah'] = $this->db->get('user')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('sadmin/user', $data);
        $this->load->view('templates/footer');
    }

    public function userTambah()
    {
        $data['title'] = 'User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Role_model', 'role');

        $data['role'] = $this->role->getRole();
        $data['getrole'] = $this->db->get('user_role')->result_array();
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[user.email]', ['is_unique' => 'This Email has already registered!']);
        $this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[3]|matches[password2]', ['matches' => 'Passowrd dont matches!', 'min_length' => 'Password to short !']);
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');
        $this->form_validation->set_rules('role', 'Role', 'required');
        if ($this->form_validation->run() == false) {
        } else {
            $email = $this->input->post('email', true);
            $data = [
                'name' => htmlspecialchars($this->input->post('name', true)),
                'email' => htmlspecialchars($email),
                'image' => 'default.jpg',
                'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
                'role_id' => $this->input->post('role'),
                'is_active' => 1,
                'date_created' => time()

            ];
            $this->db->insert('user', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4>Akun berhasil dibuat!</h4>
            </div>');
            redirect('dapur/SAdmin/user');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('sadmin/tambahUser', $data);
        $this->load->view('templates/footer');
    }

    public function getUser($id)
    {
        $data['title'] = 'User';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $data1['role'] = $this->Role_model->getUserById($id);
        $this->load->model('Role_model', 'role');

        $data['role'] = $this->role->getRole();
        $data['getrole'] = $this->db->get('user_role')->result_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('sadmin/editUser', $data1);
        $this->load->view('templates/footer');
    }

    public function editUser()
    {
        $this->form_validation->set_rules('name', 'Name', 'required|trim');
        $this->form_validation->set_rules('role', 'Role', 'required');
        if ($this->form_validation->run() ==  false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4>User gagal updated!</h4>
            </div>');
            redirect('dapur/SAdmin/user');
        } else {
            $id = $this->input->post('id');
            $name = $this->input->post('name');
            $role = $this->input->post('role');

            $data = array (
                'id' => $id,
                'name' => $name,
                'role_id' => $role,
            );
            
            $this->db->where('id', $id);
            $this->db->update('user', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4>User updated!</h4>
            </div>');
            redirect('dapur/SAdmin/user');
        }
        
    }

    public function hapusUser($id)
    {
        $this->Role_model->hapusUser($id);
        redirect('dapur/SAdmin/user');
    }

    public function kuota()
    { 
        $data['title'] = 'Kuota Unit';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        
        $this->form_validation->set_rules('kuota','Kuota','required|trim',
        [
            'required'=>'*Kuota Tidak Boleh Kosong!!'
        ]);
        $data['menu'] = $this->db->get('kuota_unit')->result_array();

        $this->form_validation->set_rules('unit', 'Unit', 'required');
        $this->form_validation->set_rules('kuota', 'Kuota', 'required');

        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            $this->load->view('sadmin/kuota', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'unit' => $this->input->post('unit'),
                'kuota' => $this->input->post('kuota'),
            ];
            $this->db->insert('kuota_unit', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4>New menu added!</h4>
            </div>');
            redirect('dapur/SAdmin/kuota');
        }
    }

    public function editKuota()
    { 
        $this->form_validation->set_rules('unit', 'Unit', 'required');
        $this->form_validation->set_rules('kuota', 'Kuota', 'required');

        if ($this->form_validation->run() == false) {
        } else {
            $id = $this->input->post('id');
            $unit = $this->input->post('unit');
            $kuota = $this->input->post('kuota');
            $data = [
                'id' => $id,
                'unit' => $unit,
                'kuota' => $kuota
            ];
            $this->db->where('id', $id);
            $this->db->update('kuota_unit', $data);

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4>New menu added!</h4>
            </div>');
            redirect('dapur/SAdmin/kuota');
        }
    }

    public function hapusKuota($id)
    {
        $this->Role_model->hapusKuota($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
        <h4>Kuota deleted!</h4>
        </div>');
        redirect('dapur/SAdmin/kuota');
    }

    public function PMagang()
    {
        $data['title'] = 'Pengajuan Magang';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    
        $data['pengajuan'] = $this->db->get('groups')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('sadmin/PMagang', $data);
        $this->load->view('templates/footer');
    }
}
