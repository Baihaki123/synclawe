<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
        $this->load->model('Menu_model');
    }

    public function index()
    {
        $data['title'] = 'Profil';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
    }

    public function edit()
    {
        $data['title'] = 'Edit Profile';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('name', 'Full Name', 'required|trim');
        if ($this->form_validation->run() == false) {
            $this->load->view('templates/header', $data);
            $this->load->view('templates/sidebar', $data);
            // $this->load->view('user/index', $data);
            $this->load->view('templates/footer');
        } else {
            $name = $this->input->post('name');
            $email = $this->input->post('email');

            // cek jika ada gambar yang akan diupload
            $upload_image = $_FILES['image']['name'];

            if ($upload_image) {
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size']      = '2048';
                $config['upload_path'] = './assets/Template/dist/img/profile/';

                $this->load->library('upload', $config);

                if ($this->upload->do_upload('image')) {
                    $old_image = $data['user']['image'];
                    if ($old_image != 'default.jpg') {
                        unlink(FCPATH . 'assets/Template/dist/img/profile/' . $old_image);
                    }
                    $new_image = $this->upload->data('file_name');
                    $this->db->set('image', $new_image);
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">' . $this->upload->display_errors() . '</div>');
                    redirect('dapur/User');
                }
            }

            $this->db->set('name', $name);
            $this->db->where('email', $email);
            $this->db->update('user');

            $this->session->set_flashdata('message', '<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4>Profil berhasil diubah</h4>
            </div>');
            redirect('dapur/User');
        }
    }

    public function changePassword()
    {
        $data['title'] = 'Change Password';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

        $this->form_validation->set_rules('current_password', 'Current Password', 'required|trim');
        $this->form_validation->set_rules('new_password1', 'New Password', 'required|trim|min_length[3]|matches[new_password2]');
        $this->form_validation->set_rules('new_password2', 'Confirm New Password', 'required|trim|min_length[3]|matches[new_password1]');

        if ($this->form_validation->run() == false) {
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/index', $data);
        $this->load->view('templates/footer');
        } else {
            $current_password = $this->input->post('current_password');
            $new_password = $this->input->post('new_password1');
            if (!password_verify($current_password, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4>Password lama salah</h4>
                </div>');
                redirect('dapur/User/index');
            } else {
                if ($current_password == $new_password) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4>New password cannot be the same as current password!</h4>
                    </div>');
                    redirect('dapur/User/index');
                } else {
                    // password sudah ok
                    $password_hash = password_hash($new_password, PASSWORD_DEFAULT);

                    $this->db->set('password', $password_hash);
                    $this->db->where('email', $this->session->userdata('email'));
                    $this->db->update('user');
                    $this->session->set_flashdata('message', '<div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4>Password changed!</h4>
                    </div>');
                    redirect('dapur/User/index');
                }
            }
        }
    }

    public function pengajuan()
    {
        $data['title'] = 'Pengajuan Magang';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    
        $data['pengajuan'] = $this->db->get('groups')->result_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/pengajuan', $data);
        $this->load->view('templates/footer');
    }

    public function tambahPengajuan()
    {
        $data['title'] = 'Pengajuan Magang';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();


        $this->form_validation->set_rules('nama_group', 'Name', 'required|trim');
        $this->form_validation->set_rules('group_category', 'Kategori', 'required');
        $this->form_validation->set_rules('education_category', 'Kategori Pendidikan', 'required');
        $this->form_validation->set_rules('education', 'Pendidikan', 'required');
        $this->form_validation->set_rules('study_program', 'Program Studi', 'required');
        $this->form_validation->set_rules('start', 'Tanggal Mulai', 'required');
        $this->form_validation->set_rules('end', 'Tanggal Selesai', 'required');
        $this->form_validation->set_rules('pengajuan', 'surat pengajuan', 'required');
        $this->form_validation->set_rules('unit', 'unit', 'required');
        $this->form_validation->set_rules('anggota', 'Anggota', 'required');

        if($this->form_validation->run() == false) {

        } else {
            $query=[
                'id'=> $this->input->post('id'),
                'nama_group'=> $this->input->post('nama_group'),
                'group_category'=> $this->input->post('group_category'),
                'education_category'=> $this->input->post('education_category'),
                'education'=> $this->input->post('education'),
                'study_program'=>$this->input->post('study_program'),
                'start'=>$this->input->post('start'),
                'end'=>$this->input->post('end'),
                'pengajuan'=>$this->input->post('pengajuan'),
                'unit'=>$this->input->post('unit'),
                'anggota'=>$this->input->post('anggota'),
                'anggota1'=>$this->input->post('anggota1'),
                'anggota2'=>$this->input->post('anggota2'),
            ];
            $this->db->insert('groups', $query);
            $this->session->set_flashdata('message','<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4>Pengajuan Berhasil dibuat</h4>
            </div>');
            redirect('dapur/User/tambahPengajuan');
        }
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar', $data);
        $this->load->view('user/tambahPengajuan', $data);
        $this->load->view('templates/footer');
    }

    public function GetData()
    {
        $user = $this->input->get('user');
        $query = $this->Menu_model->Get_cariData($user, 'name');
        echo json_encode($query);
    }
}
