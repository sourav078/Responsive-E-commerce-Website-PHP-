<?php

require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\User;
use App\classes\Auth;

$home = new Home();

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'category')
    {
        $home->subMenuProduct($_GET['id']);
    }
    elseif ($_GET['page'] == 'home')
    {
        $home->index();
    }
    elseif ($_GET['page'] == 'about')
    {
        $home->about();
    }
    elseif ($_GET['page'] == 'contact')
    {
        $home->contact();
    }
    elseif ($_GET['page'] == 'detail')
    {
        $home->productDetail($_GET['id']);
    }
    elseif ($_GET['page'] == 'login')
    {
        $home->login();
    }
    elseif ($_GET['page'] == 'logout')
    {
        $auth = new Auth();
        $auth->logout();
    }
    elseif ($_GET['page'] == 'dashboard')
    {
        $home->dashboard();
    }
}
elseif (isset($_POST['login_btn']))
{
    $auth = new Auth();
    $message = $auth->login($_POST);
    $home->login($message);
}
