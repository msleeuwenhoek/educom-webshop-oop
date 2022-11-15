<?php

class PageModel
{
    public $page;

    public function getRequestedPage()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $this->page = $_POST['page'];
        } else {
            $this->page = (isset($_GET["page"]) ? $_GET["page"] : 'home');
        }
    }

    public function setPage($page)
    {
        $this->page = $page;
    }
}
