<?php
    /*
        Superhero Project Workshop
    */
    // Get the render_page and render_card functions
    include 'views.php';
    // Set custom settings
    $site_title = 'UNC BACS 350';
    $page_title = 'Superhero Gallery';
    $content =
        render_card("Batman", "The Dark Knight") .
        render_card("Superman", "Man of Steel")  . 
        render_card("Green Lantern", "In Brightest Day, In Blackest Night");
    // Create HTML and output the page
    echo render_page($site_title, $page_title, $content);
?>