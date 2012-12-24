<?php

class Articles
{

    public function getActicles($userId, $startNumber, $endNumber)
    {
        $userId = mysql_escape_string($userId);
        $startNumber = mysql_escape_string($startNumber);
        $endNumber = mysql_escape_string($endNumber);

        $query = "SELECT * FROM Articles WHERE user_id=$userId LIMIT $startNumber, $endNumber";
        $result = mysql_query($query);
        $i = 0;
        while ($array = mysql_fetch_assoc($result))
        {
            $articles[$i] = $array;

            $i++;
        }

        return $articles;
    }

    public function addArticle($userId, $header, $description, $body)
    {
        $userId = mysql_escape_string($userId);
        $header = mysql_escape_string($header);
        $description = mysql_escape_string($description);
        $body = mysql_escape_string($body);
        $query = "INSERT INTO articles (user_id, header, description, body)
            VALUES('$userId', '$header', '$description', '$body')";
        mysql_query($query);
    }

    public function deleteArticle($articleId, $userID)
    {
        $articleId = mysql_escape_string($articleId);
        $userID = mysql_escape_string($userID);

        $query = "DELETE FROM articles WHERE id='$articleId' AND user_id='$userID'";
        mysql_query($query);
    }

    public function getArticle($articleId, $userID)
    {
        $articleId = mysql_escape_string($articleId);
        $userID = mysql_escape_string($userID);
        $query = "SELECT * FROM Articles WHERE id='$articleId' AND user_id=$userID";
        $result = mysql_query($query);
        $array = mysql_fetch_assoc($result);
        if(strlen($array['body'])<4) $array['body']=$array['description'];
        return $array;
    }

}