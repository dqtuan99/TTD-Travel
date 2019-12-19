<?php
namespace account\model;
use core\data\model\PDOData;

require_once("core/data/PDOData.php");

class Account {
	public function __contruct() {
    }

    public function checkAccount($username, $password) {
    	$db = new PDOData();
        $hashed = hash('sha256', $password);
        $data = $db->doPreparedQuery("
        select *
        from user
        where username like ? and password like ?;
        ", array($username, $hashed));

        if (count($data) > 0) return true;

        return false;
    }

    public function getAccountFullname($username) {
        $db = new PDOData();
        $fullname = $db->doPreparedQuery("
        select fullname
        from user
        where username like ?;
        ", array($username));

        return $fullname[0]["fullname"];
    }
}
