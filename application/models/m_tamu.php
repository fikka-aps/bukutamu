<?php
class m_tamu extends CI_Model
{ //baris untuk menerangkah bahwa m_curd adalah sebuah model
    public function tamu_list()
    {
        $this->db->select('*');
        $this->db->from('tamu');
        $query = $this->db->get();
        return $query;
    }
    public function buku_list()
    {
        $this->db->select('*');
        $this->db->from('buku');
        $query = $this->db->get();
        return $query;
    }
    public function edit_user($id)
    {
        $data = [
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password')
        ];
        $this->db->set('name', $data['name']);
        $this->db->where('id', $id);
        $this->db->update('user');
    }
    public function delete_user($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('user');
    }
}
