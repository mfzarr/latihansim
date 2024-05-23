<?php
class datasarpras extends CI_Model
{
    // Function untuk tambah data
    public function insert_data($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    // Function untuk menampilkan table
    public function get_all_data($table)
    {
        return $this->db->get($table);
    }

    // Function untuk menampilkan data
    public function get_data($table, $data)
    {
    return $this->db->get_where($table, $data);
    }

    // Function untuk update data
    public function update_data($table, $set, $where)
    {
    return $this->db->where($where)
    ->update($table, $set);
    }

    // Function untuk delete data
    public function delete_data($table, $where)
    {
    return $this->db->delete($table, $where);
    }
}
