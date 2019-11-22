<?php

    /*
        Create page content by rendering a template.
    */

    $site_title = 'UNC BACS 350';
    
    $page_title = "Nic's Project Page";
    
    $content = '
    
        <p>
            <a href="..">Home</a>
        </p>
        
        <ul>
            <li>
                <a href="https://bomg2231.com/">Project 1 (home page)</a>
            </li>
            <li>
                <a href="https://bomg2231.com/bacs350/">Project 2 (self home page)</a>
            </li>
            <li>
                <a href="https://bomg2231.com/bacs350/Superhero/">Project 3 (superhero index)</a>
            </li>
            <li>
                <a href="https://bomg2231.com/bacs350/planner/index.php">Project 4 (planner project)</a>
            </li>
            <li>
                <a href="https://bomg2231.com/bacs350/docman/index.php">Project 5 (docman project)</a>
            </li>
            <li>
                <a href="https://bomg2231.com/bacs350/subscriber/index.php">Project 6 (subscriber database)</a>
            </li>
            <li>
                <a href="https://bomg2231.com/bacs350/superhero/">Project 7 (superhero now a database)</a>
            </li>
            <li>
                <a href="https://bomg2231.com/bacs350/notes/index.php">Project 8 (Notes Database)</a>
            </li>
            <li>
                <a href="https://bomg2231.com/bacs350/review/index.php">Project 9 (Review Manager)</a>
            </li>
            <li>
                <a href="https://bomg2231.com/bacs350/slides/">Project 10 (Slide Show)</a>
            </li>
            <li>
                <a href="https://bomg2231.com/bacs350/">Project 11 (we skipped this)</a>
            </li>
            <li>
                <a href="https://bomg2231.com/bacs350/">Project 12 (Integrated Brain)</a>
            </li>
            <li>
                <a href="https://bomg2231.com/bacs350/">Project 13 (does not exist it)</a>
            </li>
            <li>
                <a href="https://bomg2231.com/bacs350/">Project 14 (does not exist it)</a>
            </li>
        </ul>
    ';

    include '../views.php';
    
    echo render_page($site_title, $page_title, $content);

?>
