<?php
namespace Blog\Model;

require_once('model/Manager.php');

class ChapterManager extends Manager
{
    public function getChapters()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(content_date, \'%d/%m/%Y à %Hh%i\') AS content_date_fr, SUBSTR(content, 1, 250) AS extract FROM chapter ORDER BY content_date DESC LIMIT 0, 5');

        return $req;
    }

    public function getChapter($chapterId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(content_date, \'%d/%m/%Y à %Hh%i\') AS content_date_fr FROM chapter WHERE id = ?');
        $req->execute(array($chapterId));
        $chapter = $req->fetch();

        return $chapter;
    }

    public function getMaxId()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT MAX(id) AS id_max FROM chapter');
        $req = $req->fetch();

        return $req;
    }
}