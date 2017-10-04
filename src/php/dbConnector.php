<?php
require('src/php/checker.php');

class dbConnector {
  public function insert($id, $name, $price, $image) {
    $message = 'Successfully registered.';

    try{
      $pdo = new PDO("mysql:host=localhost;dbname=dbname;charset=utf8", 'username', 'password');
      $check = new checker();
      $sql = 'insert into tablename values(:id, :name, :price, :image)';

      if($check -> idCheck($id)) {
        $message = 'Already exist ID.';
      } else {
        $exec = $pdo -> prepare($sql);
        $exec -> bindvalue(':id', $id);
        $exec -> bindvalue(':name', $name);
        $exec -> bindvalue(':price', (int) $price);
        $exec -> bindvalue(':image', $image);
        $exec -> execute();
      }

      return $message;
    } catch(Exception $e) {
      print($e);
    }
  }

  public function index() {
    try{
      $pdo = new PDO("mysql:host=localhost;dbname=dbname;charset=utf8", 'username', 'password');
      $sql = 'select * from tablename';

      $exec = $pdo -> prepare($sql);
      $exec -> execute();

      return $exec;
    } catch(Exception $e) {
      print($e);
    }
  }

  public function select($id) {
    try{
      $pdo = new PDO("mysql:host=localhost;dbname=dbname;charset=utf8", 'username', 'password');
      $sql = 'select * from tablename where id = :id';

      $exec = $pdo -> prepare($sql);
      $exec -> bindvalue(':id', $id);
      $exec -> execute();

      return $exec;
    } catch(Exception $e) {
      print($e);
    }
  }

  public function select2($name) {
    try{
      $pdo = new PDO("mysql:host=localhost;dbname=dbname;charset=utf8", 'username', 'password');
      $sql = 'select * from tablename where name like :name';

      $exec = $pdo -> prepare($sql);
      $exec -> bindvalue(':name', '%'.$name.'%');
      $exec -> execute();

      return $exec;
    } catch(Exception $e) {
      print($e);
    }
  }

  public function update($id, $name, $price) {
    $message = 'Successfully updated.';

    try{
      $pdo = new PDO("mysql:host=localhost;dbname=dbname;charset=utf8", 'username', 'password');
      $check = new checker();
      $sql = 'update tablename set name = :name, price = :price where id = :id';

      if(!($check -> idCheck($id))) {
        $message = 'Not exist ID.';
      } else {
        $exec = $pdo -> prepare($sql);
        $exec -> bindvalue(':id', $id);
        $exec -> bindvalue(':name', $name);
        $exec -> bindvalue(':price', (int) $price);
        $exec -> execute();
      }

      return $message;
    } catch(Exception $e) {
      print($e);
    }
  }

  public function update2($id, $name, $price, $image) {
    $message = 'Successfully updated.';

    try{
      $pdo = new PDO("mysql:host=localhost;dbname=dbname;charset=utf8", 'username', 'password');
      $check = new checker();
      $sql = 'update tablename set name = :name, price = :price, image = :image where id = :id';

      if(!($check -> idCheck($id))) {
        $message = 'Not exist ID.';
      } else {
        $exec = $pdo -> prepare($sql);
        $exec -> bindvalue(':id', $id);
        $exec -> bindvalue(':name', $name);
        $exec -> bindvalue(':price', (int) $price);
        $exec -> bindvalue(':image', $image);
        $exec -> execute();
      }

      return $message;
    } catch(Exception $e) {
      print($e);
    }
  }

  public function delete($id) {
    $message = 'Successfully deleted.';

    try {
      $pdo = new PDO("mysql:host=localhost;dbname=dbname;charset=utf8", 'username', 'password');
      $check = new checker();
      $sql = 'delete from tablename where id = :id';

      if(!($check -> idCheck($id))) {
        $message = 'Not exist ID.';
      } else {
        $exec = $pdo -> prepare($sql);
        $exec -> bindvalue(':id', $id);
        $exec -> execute();
      }

      return $message;
    } catch (Exception $e) {
      print($e);
    }
  }
}
?>
