<?php
namespace account\model;
use core\data\model\PDOData;

require_once("core/data/PDOData.php");

class Account {
  public function __contruct() {
  }

  public function checkAccount($username, $password) {
    $db = new PDOData();
    $hashed = hash("sha256", $password);
    $data = $db->doPreparedQuery("
      select *
      from user
      where username like ? and password like ?;
    ", array($username, $hashed));

    if (count($data) > 0) return true;

    return false;
  }

  // public function getAccountFullname($username) {
  //   $db = new PDOData();
  //   $fullname = $db->doPreparedQuery("
  //     select fullname
  //     from user
  //     where username like ?;
  //   ", array($username));
  //
  //   return $fullname[0]["fullname"];
  // }

  public function checkExistUsername($username) {
    $db = new PDOData();
    $data = $db->doPreparedQuery("
      select *
      from user
      where username like ?;
    ", array($username));

    if (count($data) == 0) return true;

    return false;
  }

  public function checkExistEmail($email) {
    $db = new PDOData();
    $data = $db->doPreparedQuery("
      select *
      from user
      where email like ?;
    ", array($email));

    if (count($data) == 0) return true;

    return false;
  }

  public function createAccount($username, $password, $fullname, $email) {
    $db = new PDOData();
    $hashed = hash("sha256", $password);
    $count = $db->doPrepareSql("
      insert into user (username, password, fullname, email)
      values (?, ?, ?, ?);
    ", array($username, $hashed, $fullname, $email));

    if ($count > 0) return true;

    return false;
  }

  public function getAccountInfomation($username) {
    $db = new PDOData();
    $data = $db->doPreparedQuery("
      select username, fullname, email, avatarPath, description, isAdmin
      from user
      where username = ?;
    ", array($username));

    return $data[0];
  }

}
