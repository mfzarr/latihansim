<?php
class datauser extends CI_Model
{
    public function insert_data($table, $data)
    {
        return $this->db->insert($table, $data);
    }

    public function get_all_data($table)
    {
        return $this->db->get($table);
    }

    public function get_data($table, $data)
    {
    return $this->db->get_where($table, $data);
    }

    public function update_data($table, $set, $where)
    {
    return $this->db->where($where)
    ->update($table, $set);
    }

    public function delete_data($table, $where)
    {
    return $this->db->delete($table, $where);
    }
}
