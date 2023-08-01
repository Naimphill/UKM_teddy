<?php
/**
 * 
 */
class Mcrud extends CI_Model
{

    public function cek_login($u, $p)
    {
        $q = $this->db->get_where('tbl_admin', array('username' => $u, 'password' => $p, ));
        return $q;
    }

    public function get_all_data($tabel)
    {
        $q = $this->db->get($tabel);
        return $q;
    }

    public function insert($tabel, $data)
    {
        $this->db->insert($tabel, $data);
    }

    public function get_by_id($tabel, $id)
    {
        return $this->db->get_where($tabel, $id);
    }

    public function update($tabel, $data, $pk, $id)
    {
        $this->db->where($pk, $id);
        $this->db->update($tabel, $data);
    }

    public function hapus_data($where, $tabel)
    {
        $this->db->where($where);
        $this->db->delete($tabel);
    }
    public function join_tbl($tabel, $tbl_join, $join)
    {
        $this->db->join($tbl_join, $join);
        return $this->db->get($tabel);
    }
    public function get_all_new_data($tabel, $id)
    {
        $this->db->order_by($id, 'DESC');
        $this->db->limit(10);
        return $this->db->get($tabel);
    }

}
?>