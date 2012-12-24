<?

class Users
{

    public function getUser($login, $password)
    {
        $login = mysql_escape_string($login);
        $password = mysql_escape_string($password);
        $query = "SELECT * FROM users WHERE login='$login' AND pass='$password'";

        $result = mysql_query($query);
        $user = mysql_fetch_assoc($result);
        return $user;
    }

    public function existsUser($id, $password)
    {
        $id = mysql_escape_string($id);
        $password = mysql_escape_string($password);
        $query = "SELECT * FROM users WHERE id='$id' AND pass='$password'";
        $result = mysql_query($query);
        $user = mysql_fetch_assoc($result);
        if ($user)
            return true;
        else
            return false;
    }

    public function addUser($login, $password, $email)
    {
        $login = mysql_escape_string($login);
        $password = mysql_escape_string($password);
        $email = mysql_escape_string($email);
        $query = "INSERT INTO users (login, pass, email)  VALUES('$login', '$password', '$email')";
        mysql_query($query);
        $articles = new Articles();
        $u=$this->getUser($login, $password);
       $description = "Здесь будут отображаться ваши новости. Для того, чтобы начать работу добавьте канал!";
        $articles->addArticle($u['id'], "Добавьте канал", $description, "");
        
    }

    public function existsUserFromLogin($login)
    {
        $id = mysql_escape_string($id);
        $password = mysql_escape_string($password);
        $query = "SELECT * FROM users WHERE login='$login'";
        $result = mysql_query($query);
        $user = mysql_fetch_assoc($result);
        if ($user)
            return true;
        else
            return false;
    }

}