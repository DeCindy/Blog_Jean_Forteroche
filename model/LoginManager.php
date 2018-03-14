<?php 
namespace Blog\Model;

require_once('model/Manager.php');

class LoginManager extends Manager
{
	public function getLogin($emailUser, $pwdUser)
	{
		$db = $this->dbConnect();
        $req = $db->prepare('SELECT * FROM login WHERE email = ? AND password = ?');
        $req->execute(array($emailUser, $pwdUser));
        $req = $req->fetch();

        return $req;
	}
}