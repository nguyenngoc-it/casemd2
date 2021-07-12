<?php


namespace App\Model;


use mysql_xdevapi\Exception;

class UserModel
{
    private $userConnect;

    /**
     * UserModel constructor.
     * @param $userConnect
     */
    public function __construct()
    {
        $this->userConnect = new DBConnect();
    }


    public function saveUser($request)
    {
        try {
            $sql = "insert into `users`(`username`, `password`, `email`) values (?,?,?)";
            $stmt = $this->userConnect->connect()->prepare($sql);
            $stmt->bindParam(1, $request['user']);
            $stmt->bindParam(2, $request['email']);
            $stmt->bindParam(3, $request['pass']);
            $stmt->execute();
        } catch (\PDOException $exception) {
            $exception->getMessage();
        }


    }

    public function login($request)
    {
        try {

            $name = $request['user'];
            $pass = $request['pass'];
            $sql = "select * from `users` where `username`=? and `password`=?";
            $stmt = $this->userConnect->connect()->prepare($sql);
            $stmt->bindParam(1, $request['user']);
            $stmt->bindParam(2, $request['pass']);
            $stmt->execute(array($name,$pass));
            $user = $stmt->fetchAll(\PDO::FETCH_OBJ);
//            var_dump($user);

            if ($user[0]->role==1){
                header('location: home.php');
            }

            else if($user[0]->role==0){
                header('location: test.php');
            }
        } catch (\PDOException $exception) {
            echo $exception->getMessage();
        }
    }

}