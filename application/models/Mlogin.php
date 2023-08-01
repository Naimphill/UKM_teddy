<?php
/**
 * 
 */
class Mlogin extends CI_Model
{
    public function cek_login($u, $p)
    {
        $q = $this->db->get_where('tbl_admin', array('username' => $u, 'password' => $p));
        return $q;
    }

    public function get_user($where)
    {
        $sql = "SELECT * from tbl_admin where id_admin = ?";
        $query = $this->db->query($sql, $where);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }
}
?>