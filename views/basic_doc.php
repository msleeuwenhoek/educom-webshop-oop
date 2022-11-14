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
            href="http://localhost/educom-webshop-basis-1667987701/index.php?page=' . $page . '"
            >' . strtoupper($page) . '</a>
             </li>';
        }

        echo "</ul>";
    }

    protected function showContent()
    {
        echo "<div>This is the content of the page</div>";
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
