<?php
namespace Blog\Model;

require_once('model/Manager.php');

class CommentManager extends Manager
{
    public function getComments($chapterId)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('SELECT *, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%i\') AS comment_date_fr FROM comments WHERE chapter_id = ? ORDER BY comment_date DESC');
        $comments->execute(array($chapterId));

        return $comments;
    }

    public function getComment($idComment)
    {
        $db = $this->dbConnect();
        $comment = $db->prepare('SELECT *, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%i\') AS comment_date_fr FROM comments WHERE id = ?');
        $comment->execute(array($idComment));
        $comment = $comment->fetch();

        return $comment;
    }

    public function getAllComments()
    {
        $db = $this->dbConnect();
        $comments = $db->query('SELECT *, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%i\') AS comment_date_fr FROM comments ORDER BY comment_date DESC');

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

    public function chapterComment($postId, $author, $comment)
    {
        $db = $this->dbConnect();
        $comments = $db->prepare('INSERT INTO comments(chapter_id, author, comment, comment_date, report) VALUES(?, ?, ?, NOW(),0)');
        $affectedLines = $comments->execute(array($postId, $author, $comment));

        return $affectedLines;
    }

    public function deleteComment($idComment)
    {
        $db = $this->dbConnect();
        $comment = $db->prepare('DELETE FROM comments WHERE id=?');
        $comment->execute(array($idComment));

        return $comment;
    }

    public function updateComment($idComment, $comment)
    {
        $db = $this->dbConnect();
        $update = $db->prepare('UPDATE `comments` SET `comment`=?, `report`=0 WHERE id=?');
        $update->execute(array($comment, $idComment));

        return $update;
    }

    public function reportComment($idComment)
    {
        $db = $this->dbConnect();
        $report = $db->prepare('UPDATE `comments` SET `report`=1 WHERE id=?');
        $report->execute(array($idComment));

        return $report;
    }

    public function testReport()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT * FROM `comments` WHERE `report`=1');
        $req = $req->fetch();

        return $req;
    }

    public function getReport()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT *, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%i\') AS comment_date_fr  FROM `comments` WHERE `report`=1 ORDER BY comment_date DESC');

        return $req;
    }
}