<?php

defined('BASEPATH') or exit('No direct script access allowed');

class M_mhs extends CI_Model
{

    public function save($object)
    {
        return $this->db->insert('mahasiswa', $object);
    }

    public function update($id, $object)
    {
        return $this->db->update('mahasiswa', $object, ['id' => $id]);
    }
}

/* End of file M_mhs.php */
