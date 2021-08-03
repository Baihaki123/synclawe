<?php
class Utama extends CI_Controller
{
    public function tampil()
    {
        $this->load->model('M_view'); //load dulu modelnya
		$data['kuota'] = $this->M_view->tampil_kuota();
        $this->load->view('front-end/tampil', $data);
    }

    
}
