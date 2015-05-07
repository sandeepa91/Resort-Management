     <?php

class Db_model extends CI_Model {
    
    public function insertData($table, $data) {
        $result = $this->db->insert($table, $data);
        return $result;
    }

    public function updateData($tableName, $dataArra, $whereArr) {

        $this->db->where($whereArr);
        $result = $this->db->update($tableName, $dataArra);
        return $result;
    }
    
    public function getData($fieldset, $tableName, $where = '') {
        if ($where == "") {
            $this->db->select($fieldset)->from($tableName);
        } else {
            $this->db->select($fieldset)->from($tableName)->where($where);
        }


        $query = $this->db->get();
        return $query->result();
    }

    public function getfilteredData($strSQL) {

        $query = $this->db->query($strSQL);
        return $query->result();
    }
public function verification($fieldset, $tableName, $where = '') {

        date_default_timezone_set('Asia/Colombo');
        $date = date('m/d/Y h:i:s a', time());

        $this->db->select($fieldset)->from($tableName)->where($where);
        $abc = $this->db->get();


        if ($abc->num_rows() > 0) {
            foreach ($abc->result() as $row) {
                $userData = array('user' => $row->username, "logtime" => $date);
                $this->session->set_userdata('login_user', $userData);
                redirect(base_url() . 'index.php/File/Room');
            }
        } else {
            //$error = "Invalid user, Please enter correct login information  ";
            //echo "invalid";
           //redirect(base_url() . 'index.php/Login/LoginInvalied', $error);
            $this->load->view('Login/LoginInvalied');
        }
    }
}