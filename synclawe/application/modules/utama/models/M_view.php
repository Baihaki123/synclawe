<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class M_view extends CI_Model
{
    public function tampil_kuota()
    {
        return $this->db->get('kuota_unit')->result();
    }
}