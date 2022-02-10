<?php
session_start();
require_once 'vendor/autoload.php';
use App\classes\Home;
use App\classes\Series;
use App\classes\Register;
use App\classes\Auth;
if (isset($_GET['pages']))
{
    if ($_GET['pages'] == 'home')
    {
        if (isset($_SESSION['id']))
        {
            include 'pages/home.php';
        }else
        {
            $auth =new Auth();
            $auth->login();
//            include 'pages/login.php';
        }
    }
    elseif ($_GET['pages'] == 'series')
    {
        if (isset($_SESSION['id']))
        {
            include 'pages/series.php';
        }else
        {
            $auth =new Auth();
            $auth->login();
//            include 'pages/login.php';
        }

    }
    else if ($_GET['pages']=='register')
    {
        if (isset($_SESSION['id']))
        {
            include 'pages/register.php';
        }else
        {
            $auth =new Auth();
            $auth->login();
//            include 'pages/login.php';
        }

    }
    else if ($_GET['pages']=='login')
    {
        if (isset($_SESSION['id']))
        {
            $home = new Home();
            $home->index();
        }else
        {
            include 'pages/login.php';
        }



    }
    else if ($_GET['pages']=='logout')
    {
        //include 'pages/logout.php';
        $auth = new Auth();
        $auth->logout();
    }
    else if ($_GET['pages'] == 'all-data')
    {
        $register = new Register();
        $result= $register ->allData();
        echo '<pre/>';
        print_r($result);
    }
    else
    {
        if (isset($_SESSION['id']))
        {
            $home = new Home();
            $home->index();
        }else
        {
            $auth = new Auth();
            $auth->login();
        }
    }
}
elseif (isset($_POST['btn']))
{
    $home =new Home($_POST);
   $result = $home ->primeNumber(); //for output
    include 'pages/home.php';
}
elseif (isset($_POST['series_btn']))
{
    $series =new Series($_POST);
    $result = $series ->getSeries(); //for output
    include 'pages/series.php';
}
elseif (isset($_POST['register_btn']))
{
//    $series =new Series($_POST);
//    $result = $series ->getSeries(); //for output
//    include 'pages/series.php';

    $register = new Register($_POST);
    $message = $register->add();
    include 'pages/register.php';
}
elseif (isset($_POST['login_btn']))
{
    $auth =new Auth($_POST);
   $message = $auth->verify();
   include 'pages/login.php';
}

else //for homepage load
{
    $home = new Home();
    $home ->index();
}
