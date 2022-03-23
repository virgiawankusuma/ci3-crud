<?php


defined('BASEPATH') or exit('No direct script access allowed');

class Macaks extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->model('M_mhs');
    }

    // List all your items
    public function index($id = false)
    {
        if ($id) {
            $data = [
                'title' => 'Macaks title',
                'mhs' => $this->db->get_where('mahasiswa', ['id' => $id])->row()
            ];
            // var_dump($data['mhs']);
            $this->load->view('detail_view', $data);
        } else {
            $data = [
                'title' => 'Macaks title',
                'mahasiswa' => $this->db->get('mahasiswa')->result()
            ];
            $this->load->view('macaks_view', $data);
        }
    }

    // Add a new item
    public function add()
    {
        $data = [
            'title' => 'Add a new macak',
        ];
        $this->load->view('add_view', $data);
    }

    public function save()
    {
        $object = [
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'prodi' => $this->input->post('prodi'),
            'alamat' => $this->input->post('alamat')
        ];
        $this->M_mhs->save($object);
        redirect(base_url(), 'refresh');
    }

    //Update one item
    public function edit($id)
    {
        $data = [
            'title' => 'Edit a macak',
            'mahasiswa' => $this->db->get_where('mahasiswa', ['id' => $id])->row()
        ];
        $this->load->view('edit_view', $data);
    }

    public function update($id)
    {
        $object = [
            'nim' => $this->input->post('nim'),
            'nama' => $this->input->post('nama'),
            'prodi' => $this->input->post('prodi'),
            'alamat' => $this->input->post('alamat')
        ];
        $this->M_mhs->update($id, $object);
        redirect(base_url(), 'refresh');
    }

    //Delete one item
    public function delete($id)
    {
        // var_dump($id);
        // die;
        $this->db->where('id', $id)->delete('mahasiswa');
        redirect(base_url(), 'refresh');
    }
}

/* End of file Macaks.php */
