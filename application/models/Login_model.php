<?php

class Login_model extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    function get_user($username, $password) {
        $sql = "SELECT
user_role.id_user,
user_role.id_user_level,
user_role.id_station,
`user`.fullname,
`user`.nickname,
user_level.`name`,
station.`name`
FROM
user_role
INNER JOIN `user` ON `user`.id = user_role.id_user
INNER JOIN user_level ON user_level.id = user_role.id_user_level
LEFT JOIN station ON station.id = user_role.id_station

WHERE 

CONCAT(user_role.id_station,user_role.id_user) = '$username' AND `user`.`password` = '$password'

LIMIT 1";
        $query = $this->db->query($sql);
        if ($query->num_rows()) {
            return $query->row();
        }
    }

}

?>