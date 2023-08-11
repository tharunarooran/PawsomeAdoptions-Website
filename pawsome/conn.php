<?php

class Database
{

	private $server = "mysql:host=localhost;dbname=pets_db";
	private $username = "root";
	private $password = "";
	private $options  = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,);
	protected $conn;

	public function open()
	{
		try {
			$this->conn = new PDO($this->server, $this->username, $this->password, $this->options);
			return $this->conn;
		} catch (PDOException $e) {
			echo "There is some problem in connection: " . $e->getMessage();
		}
	}

	public function close()
	{
		$this->conn = null;
	}
}

$pdo = new Database();

class User
{
    protected $errors = array();
    public function create($POST)
    {
        $this->errors = array();

        $username = $POST['username'];
        $email = $POST['email'];
        $password = $POST['password'];

        if(empty($username)){
            $this->errors[] = "Please enter a valid username";
        }

        if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $this->errors[] = "Please enter a valid email";
        }

        if(empty($password) || strlen($password) < 4){
            $this->errors[] = "Password must be atleast 4 characters";
        }

        if(count($this->errors) == 0)
        {
           $POST['password'] = hash("sha256",$POST['password']);
           $query = "insert into users (username,password,email,date) values (:username,:password,:email,:date)";
           $db = new DB();
           $db->write($query,$POST);
        }
        return $this->errors;
    }

    public function login($POST)
    {
        $this->errors = array();

        $POST['password'] = hash("sha256",$POST['password']); 

        $query = "select * from users where email = :email && password = :password limit 1";
        $db = new DB();
        $db->write($query,$POST);
        $data = $db->read($query,$POST);

        if(is_array($data))
        {
            $_SESSION['hashed_user'] = $data[0]['username'];

        }else{
            $this->errors[] = "Wrong username or password";
        }  
        
        return $this->errors;

    }


}
