<?php 
// Access render_page from library
require '../views.php';

// Display the HTML with Style
echo render_page('Nic Bomgardner UNC BACS 350', "Project 6 Subscriber List", $list);
?>

<h1>Subscriber Database - Step 1</h1>

<p>This page demonstrates a connection to an actual database at Bluehost.</p>
<p>This is the expanded and instrumented code.</p>
<p>Once the database is connect a list of subscribers is obtained and converted into HTML.</p>

<p>
    <a href="index.php">Subscriber List Code</a>
</p>

<h3>CONNECT to Subscriber Database</h3>

<?php

    // Connect subscriber database
    $port = '3306';
    $dbname = 'bomgtwot_subscribers';
    $db_connect = "mysql:host=localhost:$port;dbname=$dbname";
    $username = 'bomgtwot';
    $password = 'Devilarm555.';
    
    echo "<h3>$db_connect</h3>";
    
    $db = new PDO($db_connect, $username, $password);

    echo "<h2>CONNECTED</h2>";


    // Get a list of records into an array
    $query = "SELECT * FROM subscribers";
    $statement = $db->prepare($query);
    $statement->execute();
    $subscribers = $statement->fetchAll();

    echo "<h2>QUERY DONE</h2>";

    // Create an HTML list on the output
    echo '<ul>';
    foreach($subscribers as $row) {
        echo "<li><b>$row[name]</b> - email: $row[email]</li>";
    }
    echo '</ul>';

    echo "<h2>LIST CREATED</h2>";

?>
