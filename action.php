<?php

require_once 'vendor/autoload.php';
use App\classes\Calculator;
use App\classes\Home;
use App\classes\Series;
use App\classes\Summation;
use App\classes\Even_odd;

if (isset($_GET['page']))
{
    if ($_GET['page'] == 'home')
    {
        include 'pages/home.php';
    }
    elseif ($_GET['page'] == 'about')
    {
        include 'pages/about.php';
    }
    elseif ($_GET['page'] == 'service')
    {
        include 'pages/service.php';
    }
    elseif ($_GET['page'] == 'contact')
    {
        include 'pages/contact.php';
    }
}
elseif(isset($_POST['btn']))
{
    if ($_POST['btn'] == 'Submit')
    {
        $calculator = new Calculator($_POST);
        $result = $calculator->index();
        include 'pages/home.php';
    }
    elseif ($_POST['btn'] == 'Generate')
    {
        $series = new Series($_POST);
        $result = $series->index();
        include 'pages/about.php';
    }
    elseif ($_POST['btn'] == 'Sigma')
    {
        $sum = new Summation($_POST);
        $result = $sum->index();
        include 'pages/service.php';
    }
    elseif ($_POST['btn'] == 'Sure')
    {
        $sure = new Even_odd($_POST);
        $result = $sure->index();
        include 'pages/contact.php';
    }
}
else
{
    $home = new Home();
    $home->index();
}

