<?php

    /*
        Create page content by rendering a template.
    */

    $site_title = 'UNC BACS 350';
    
    $page_title = "Project Team";
    
    $content = '
        <h2>Project Team</h2>
        
        <table class="table table-hover">
            <th>Name</th>
            <th>Email</th>
            <th>Domain</th>
            <th>Github</th>
            <th>Issues</th>
            <tr>
                <td>Nic Bomgardner</td>
                <td>bomg2231@bears.unco.edu</td>
                <td><a href="http://bomg2231.com/bacs350/">Domain</a></td>
                <td><a href="https://github.com/Bomg2231/UNC-BACS350-2019-Fall">Github</a></td>
                <td><a href="https://github.com/Bomg2231/UNC-BACS350-2019-Fall/issues">Issues</a></td>
            </tr>
            <tr>
                <td>Bryan Aguilar</td>
                <td>agui3142@bears.unco.edu</td>
                <td><a href="http://baguilar.net/bacs350/index.php">Domain</a></td>
                <td><a href="https://github.com/bryanaguilar22/bacs350">Github</a></td>
                <td>Unknown</td>
            </tr>
            <tr>
                <td>Mandeep Signh</td>
                <td>sing3112@bears.unco.edu</td>
                <td><a href="http://mandeep.online/bacs350/index.php">Domain</a></td>
                <td>Unknown</td>
                <td>Unknown</td>
            </tr>
            <tr>
                <td>John Warden</td>
                <td>ward2974@bears.unco.edu</td>
                <td><a href="https://wardenworkshop.com/bacs350/index.php">Domain</a></td>
                <td><a href="https://github.com/Ward2974/UNC-BACS350-Demo">Github</a></td>
                <td><a href="https://github.com/Ward2974/UNC-BACS350-Demo/issues">Issues</a></td>
            </tr>
        </table>

    ';

    include 'views.php';
    
    echo render_page($site_title, $page_title, $content);

?>
