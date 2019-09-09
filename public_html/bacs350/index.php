<?php

    /*
        Create page content by rendering a template.
    */

    $site_title = 'UNC BACS 350';
    
    $page_title = "Nic's Brain";
    
    $content = '
    
    <img src="profile.jpg" alt="profile picture" style="width:300px;height:300px;">
        <p>
            <a href="..">Home</a>
        </p>
        <p> 
            This page is the beginning of an ongoing project in BACS 350.
        </p>
        
        <h3>
    Nicolaus Bomgardner
</h3>

<h3>
    My top skills are coding in C#, mobile app development using Xamarin, and being a student.
</h3>

<h3>
    The skills I am developing are web design, Unity programming, and cooking. 
</h3>

<h4>
    Aspirations - My career goal is to one day work at Microsoft as a program manager for the Xbox division. 
</h4>
        
        <p> 
            It is a custom information manager.
        </p>
        <p> 
            Different rooms within this PHP app will contain different types of info.
        </p>
        
        <ul>
            <li>
                <a href="demo">Code Demos</a>
            </li>
            <li>
                <a href="pattern">Design Patterns</a>
            </li>
            <li>
                <a href="project">Projects</a>
            </li>
        </ul>
    ';

    include 'views.php';
    
    echo render_page($site_title, $page_title, $content);

?>
