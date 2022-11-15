<?php

require_once "./models/page_model.php";


class PageController
{
    private $model;
    public function __construct($PageModel)
    {
        $this->model = $PageModel;
    }

    private function getRequest()
    {
        $this->model->getRequestedPage();
    }


    private function processRequest()
    {
        switch ($this->model->page) {
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
        $this->model->setPage($page);
    }

    private function showResponsePage()
    {
        switch ($this->model->page) {
            case 'home':
                include_once "./views/home_doc.php";
                $view = new HomeDoc();
                break;
            case 'about':
                include_once "./views/about_doc.php";
                $view = new AboutDoc();
                break;
            case 'contact':
                include_once "./views/contact_form.php";
                $view = new ContactForm();
                break;
            case 'login':
                include_once "./views/login_form.php";
                $view = new LoginForm();
                break;
            case 'register':
                include_once "./views/registration_form.php";
                $view = new RegistrationForm();
                break;
            case 'unknown':
                include_once "./views/basic_doc.php";
                $view = new BasicDoc();
                break;
        }
        $view->show();
    }




    public function handleRequest()
    {
        $this->getRequest();
        $this->processRequest();
        $this->showResponsePage();
    }
}
