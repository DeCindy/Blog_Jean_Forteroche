<?php
namespace Blog\Model;

require_once('model/Manager.php');

class CommentManager extends Manager
{
    public function getComments($chapterId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%i\') AS comment_date_fr FROM comments WHERE chapter_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($chapterId));

        return $comments;
    }

    public function getMaxComment($chapterId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT COUNT(*) AS nbr_id FROM comments WHERE chapter_id = ?');
        $req->execute(array($chapterId));
        $req = $req->fetch();

        return $req;
    }
}