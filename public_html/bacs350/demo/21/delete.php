<?php

    // Connect to the database
    require_once 'subscriber_db.php';

    // Get the Id of the record to delete
    $Id = filter_input(INPUT_GET, 'Id');

    // Attempt to remove the record
    delete_subscriber($db, $Id);

    // Return to the list
    header("Location: index.php");
?>
