<?php

class Channels
{

    public function getChannels($userId)
    {
        $userId = mysql_escape_string($userId);
        $query = "SELECT * FROM Channels WHERE user_id='$userId'";
        $result = mysql_query($query);
        $i = 0;
        while ($array = mysql_fetch_assoc($result))
        {
            $channels[$i] = $array;
            $i++;
        }
        return $channels;
    }

    public function getDataChannel($userId, $channel_id)
    {
        $channel_id = mysql_escape_string($channel_id);
        $query = "SELECT * FROM Channels WHERE id='$channel_id' AND user_id='$userId'";

        $result = mysql_query($query);
        $result = mysql_fetch_array($result);
        return $result;
    }

    public function addChannels($userId, $url, $description, $numNews)
    {
        $userId = mysql_escape_string($userId);
        $url = mysql_escape_string($url);
        $description = mysql_escape_string($description);
        $numNews = mysql_escape_string($numNews);

        $query = "INSERT INTO channels (user_id, url, description, numNews)
            VALUES('$userId', '$url', '$description', '$numNews')";
        mysql_query($query);
    }

    public function deleteChannel($userId, $channelId)
    {
        $channelId = mysql_escape_string($channelId);
        $query = "DELETE FROM channels where id='$channelId' AND user_id='$userId'";
        mysql_query($query);
    }

    public function updateChannel($userId, $channel_id, $url, $description, $numNews)
    {
        $channel_id = mysql_escape_string($channel_id);
        $url = mysql_escape_string($url);
        $description = mysql_escape_string($description);
        $numNews = mysql_escape_string($numNews);

        $query = "UPDATE channels SET url='$url', description = '$description', numNews='$numNews' WHERE id='$channel_id' AND user_id='$userId'";
        mysql_query($query);
    }

}