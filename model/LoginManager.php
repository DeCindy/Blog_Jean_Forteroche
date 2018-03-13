<?php 
namespace Blog\Model;

require_once('model/Manager.php');

class LoginManager extends Manager
{
	public function getLogin()
	{
		$db = $this->dbConnect();
        $req = $db->query('SELECT email, password FROM login');
        $req = $req->fetch();

        return $req;
	}
}