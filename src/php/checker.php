<?php
class checker {
  public function idCheck($id) {
    $isID = false;

    try{
      $pdo = new PDO("mysql:host=localhost;dbname=dbname;charset=utf8", 'username', 'password');
      $sql = 'select id from tablename where id = :id';

      $exec = $pdo -> prepare($sql);
      $exec -> bindvalue(':id', $id);
      $exec -> execute();

      if(($exec -> fetch()) > 0) {
        $isID = true;
      }

      return $isID;
    } catch(Exception $e) {
      print($e);
    }
  }

  public function nameCheck($name) {
    $isID = false;

    try{
      $pdo = new PDO("mysql:host=localhost;dbname=dbname;charset=utf8", 'username', 'password');
      $sql = 'select name, price, image from tablename where name like :name';

      $exec = $pdo -> prepare($sql);
      $exec -> bindvalue(':name', '%'.$name.'%');
      $exec -> execute();

      if(($exec -> fetch()) > 0) {
        $isID = true;
      }

      return $isID;
    } catch(Exception $e) {
      print($e);
    }
  }
}
?>
