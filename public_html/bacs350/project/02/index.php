<?php

    /*
        Create page content with a template.
    */

    $site_title = "Nic Bomgardner";
    
    $page_title = "Nic's Brain";

    $content = '
        <p>
            <a href="/bacs350">Home</a>
        </p>
        <p> 
            <img src="profile.jpg" alt="profile picture" style="width:300px;height:300px;">
        </p>
        
        <p>This page is the beginning of an ongoing project in BACS 350.</p>

        <p>It is a custom information manager.</p>

        <p>Different rooms within this PHP app will contain different types of info.</p>
        
        <ul>
            <li>
                <a href="https://unco-bacs.org/bacs350/demo/">Code Demos</a>
            </li>
            <li>
                <a href="https://unco-bacs.org/bacs350/pattern/">Design Patterns</a>
            </li>
            <li>
                <a href="https://unco-bacs.org/bacs350/project/">Projects</a>
            </li>
        </ul>
        
        
    ';

    include '../../views.php';

    echo render_page($site_title, $page_title, $content);

?>
