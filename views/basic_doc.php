<?php
require_once "html_doc.php";

class BasicDoc extends HtmlDoc
{

    protected function showHeader()
    {
        echo "<h1>This is the header</h1>";
    }
    private function showMenu()
    {
        $pages = ['home', 'about', 'contact', 'register', 'login', 'logout'];
        echo '<ul class="menu">';

        foreach ($pages as $page) {
            echo '<li>
            <a
            href="http://localhost/educom-webshop-oop-1668153190/index.php?page=' . $page . '"
            >' . strtoupper($page) . '</a>
             </li>';
        }

        echo "</ul>";
    }

    protected function showContent()
    {
        echo "<div>Sorry, couldn't find the page you were looking for</div>";
    }
    private function showFooter()
    {
        echo '<footer>
        <div>&copy; 2022 M. Sleeuwenhoek</div>
        </footer>';
    }

    protected function showBodyContent()
    {

        $this->showHeader();
        $this->showMenu();
        $this->showContent();
        $this->showFooter();
    }
}
