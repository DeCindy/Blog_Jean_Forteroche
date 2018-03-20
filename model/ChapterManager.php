<?php
namespace Blog\Model;

require_once('model/Manager.php');

class ChapterManager extends Manager
{
    public function getChapters()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT *, DATE_FORMAT(content_date, \'%d/%m/%Y à %Hh%i\') AS content_date_fr, SUBSTR(content, 1, 400) AS extract FROM chapter ORDER BY content_date DESC');

        return $req;
    }

    public function getChapter($chapterId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT *, DATE_FORMAT(content_date, \'%d/%m/%Y à %Hh%i\') AS content_date_fr FROM chapter WHERE id = ?');
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

    public function addChapter($content, $title)
    {
        $db = $this->dbConnect();
        $chapter = $db->prepare('INSERT INTO `chapter`(`title`, `content`, `content_date`) VALUES (?,?,NOW())');
        $chapter->execute(array($title, $content));

        return $chapter;
    }

    public function deleteChapter($idChapter)
    {
        $db = $this->dbConnect();
        $chapter = $db->prepare('DELETE FROM chapter WHERE id=?');
        $chapter->execute(array($idChapter));

        return $chapter;
    }

    public function updateChapter($idChapter, $contentChapter, $titleChapter)
    {
        $db = $this->dbConnect();
        $chapter = $db->prepare('UPDATE `chapter` SET `title`=?,`content`=? WHERE id=?');
        $chapter->execute(array($titleChapter, $contentChapter, $idChapter));

        return $chapter;
    }
}