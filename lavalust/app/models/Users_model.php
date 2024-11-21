<?php
defined('PREVENT_DIRECT_ACCESS') or exit('No direct script access allowed');
class Users_model extends Model
{
    public function add_users(
        $lastname,
        $firstname,
        $email,
        $gender,
        $address
    ) {
        $data = array(
            'ecf_last_name' => $lastname,
            'ecf_first_name' => $firstname,
            'ecf_email' => $email,
            'ecf_gender' => $gender,
            'ecf_address' => $address,
        );
        return $this->db->table('ecf_users')->insert($data);
    }

    public function get_all_users(){
		return $this->db->table('ecf_users')
                    ->get_all(); 
	}

    public function get_user_by_id($id)
    {
        return $this->db->table('ecf_users')->where('id', $id)->get(); // Adjust to your primary key name
    }

    public function update_user($id, $lastname, $firstname, $email, $gender, $address)
    {
        $data = array(
            'ecf_last_name' => $lastname,
            'ecf_first_name' => $firstname,
            'ecf_email' => $email,
            'ecf_gender' => $gender,
            'ecf_address' => $address,
        );

        return $this->db->table('ecf_users')->where('id', $id)->update($data); // Adjust to your primary key name
    }

    public function delete_users($id)
    {
        return $this ->db->table('ecf_users')->where ("id",$id)->delete();
    }

}
?>