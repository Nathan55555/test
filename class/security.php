<?php
namespace App\Date;
class User
{
    private $pdo;
public function __construct(\PDO $pdo)
{
    $this->pdo = $pdo;
}
    public function add_user($nom,$mdp,$id_t)
    {
        $stat = $this->pdo->prepare("insert into user (`name`,`mdp`,`role`,`id_type`) VALUES ('".$nom."','".$mdp."','USER',$id_t)");
        $stat->execute();
    }
    public function connect($id,$nom,$role,$fonc)
    {
        // session_start();
        $_SESSION["id"] = $id;
        $_SESSION["login"] = $nom;
        $_SESSION["role"] = $role;
        $_SESSION["fonction"] = $fonc;
        // $result =  $this->pdo->query("UPDATE `user` set etats = 1 where id = $id")->fetch();

    }
    public function verif_login($nom,$mdp)
    {
        $sql = "SELECT * from user where name = '".$nom."' and mdp = '".$mdp."' LIMIT 1";
        $result =  $this->pdo->query("SELECT u.*,t.nom_t from user u inner join type_user t on t.id = u.id_type where name = '".$nom."' and mdp = '".$mdp."' LIMIT 1")->fetch();
        
     
     
        if($result)
        {
            date_default_timezone_set('Europe/Paris');
    $d = date('h:i:s');
    $id= $result['id'];
            $results =  $this->pdo->query("UPDATE user set etats = 1,time='".$d."' where id = $id")->fetch();

            $this->connect($result['id'],$result['name'],$result['role'],$result['nom_t']);
            return 0;

        }
        else
        {
           return 1;
        }
    }
    public function logout()
    {
        unset($_SESSION["id"]);
        unset($_SESSION["login"]);
      
    }
    public function verif_statut()
    {
        if(isset($_SESSION['id']))
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
    public function liste_user()
    {
        $sql = "SELECT * FROM user";
 
        $statement = $pdo->query($sql);
        $result = $statement->fetchAll();
        if($result)
        {
            return $result;
        }
        else
        {
            return 1;
        }
    }
}
?>