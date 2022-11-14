<?php

use FTP\Connection;

session_start();

include 'validations.php';
include 'session_manager.php';

// Determine the requested page
function getRequestedPage()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        return $_POST['page'];
    } else {
        return (isset($_GET["page"]) ? $_GET["page"] : 'home');
    }
}

// Set page & re-route if neccessary
function processRequest($page)
{
    switch ($page) {
        case 'contact':
            $data = validateContact();
            if ($data['valid'] === true) {
                $page = 'contact';
            }
            break;
        case 'register':
            $data = validateRegistration();
            if ($data['valid'] === true) {
                $page = 'login';
            }
            break;
        case 'login':
            $data = validateLogin();
            if ($data['valid'] === true) {
                logUserIn($data);
                $page = 'home';
            }
            break;
        case 'about':
            $page = 'about';
            break;
        case 'home':
            $page = 'home';
            break;
        case 'logout':
            logUserOut();
            $page = 'home';
            break;
        default:
            $page = 'unknown';
    }
    $data['page'] = $page;
    return $data;
}

// Show page content depending on requested page
function showResponsePage($data)
{
    switch ($data['page']) {
        case 'home':
            include_once "./views/home_doc.php";
            $view = new HomeDoc();
            $view->show();
            break;
        case 'about':
            include_once "./views/about_doc.php";
            $view = new AboutDoc();
            $view->show();
            break;
        case 'contact':
            include_once "./views/contact_form.php";
            $view = new ContactForm();
            $view->show();
            break;
        case 'login':
            include_once "./views/login_form.php";
            $view = new LoginForm();
            $view->show();
            break;
        case 'register':
            include_once "./views/registration_form.php";
            $view = new RegistrationForm();
            $view->show();
            break;
        case 'unknown':
            include_once "./views/basic_doc.php";
            $view = new BasicDoc();
            $view->show();
            break;
    }
}

// Main
$page = getRequestedPage();
$data = processRequest($page);
showResponsePage($data);
