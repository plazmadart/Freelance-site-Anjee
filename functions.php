<?php
function regUser($mysqli, $surname, $name, $otch, $datebd, $pflink, $phnum, $email, $type, $aboutme, $login, $password)
{
    $stmt = $mysqli->prepare("insert into users(surname, name, otch, dateofbirth, pflink, phnum, email, type, aboutme, login, password) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");   
    $stmt->bind_param('sssssssssss', $surname, $name, $otch, $datebd, $pflink, $phnum, $email, $type, $aboutme, $login, password_hash($password, PASSWORD_DEFAULT));
    $stmt->execute();
}

function checkPassword($mysqli, $login, $password)
{
    $query = "select password from users where login = '$login'";
    $result = $mysqli->query($query);
    $array = $result->fetch_assoc();
    if(password_verify($password, $array['password']))
    {
        return true;
    }
    else
    {
        return false;  
    }
}

function checkUserExists($mysqli, $login, $email)
{
    $stmt = $mysqli->prepare("select * from users where login=? or email=?"); 
    $stmt->bind_param('ss', $login, $email);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}

function getUserInfo($mysqli, $login)
{
    $stmt = $mysqli->prepare("select * from users where login=?");
    $stmt->bind_param('s', $login);
    $stmt->execute();
    $result = $stmt->get_result();
    $userinfo = $result->fetch_all(MYSQLI_ASSOC);
    return $userinfo;
}

function selectOrders($mysqli, $category)
{
    $stmt = $mysqli->prepare("select * from orders where category=?");
    $stmt->bind_param('s', $category);
    $stmt->execute();
    $result = $stmt->get_result();
    $array = $result->fetch_all(MYSQLI_ASSOC);
    return $array;
}

function selectType($mysqli, $id)
{
    $query = "select name from type where id = '$id'";
    $result = $mysqli->query($query);
    $array = $result->fetch_assoc();
    return $array['name'];
}

?>