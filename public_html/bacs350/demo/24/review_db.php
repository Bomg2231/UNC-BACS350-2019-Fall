<?php

    /* -------------------------------
        CRUD OPERATIONS
    ------------------------------- */

    // Add a new record
    function add_review($db, $designer, $url, $report, $score, $date) {
        try {
            $query = "INSERT INTO reviews (designer, url, report, score, date) VALUES (:designer, :url, :report, :score, :date);";
            $statement = $db->prepare($query);
            $statement->bindValue(':designer', $designer);
            $statement->bindValue(':url', $url);
            $statement->bindValue(':report', $report);
            $statement->bindValue(':score', $score);
            $statement->bindValue(':date', $date);
            $statement->execute();
            $statement->closeCursor();
            return true;
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Error: $error_message</p>";
            die();
        }
    }


     // Lookup Record using ID
    function get_review($db, $id) {
//        try {
//            $query = "SELECT * FROM reviews WHERE id = :id";
//            $statement = $db->prepare($query);
//            $statement->bindValue(':id', $id);
//            $statement->execute();
//            $record = $statement->fetch();
//            $statement->closeCursor();
//            return $record;
//        } catch (PDOException $e) {
//            $error_message = $e->getMessage();
//            echo "<p>Error: $error_message</p>";
//            die();
//        }
       
    }
       

    // Query for all reviews
    function list_reviews ($db) {
//       try {
//            $query = "SELECT * FROM reviews";
//            $statement = $db->prepare($query);
//            $statement->execute();
//            return $statement->fetchAll();
//        } catch (PDOException $e) {
//            $error_message = $e->getMessage();
//            echo "<p>Error: $error_message</p>";
//            die();
//        }
//        
    }


    // Delete Database Record
    function delete_review($db, $id) {
//        try {
//            $query = "DELETE from reviews WHERE id = :id";
//            $statement = $db->prepare($query);
//            $statement->bindValue(':id', $id);
//            $statement->execute();
//            $statement->closeCursor();
//            return true;
//        } catch (PDOException $e) {
//            $error_message = $e->getMessage();
//            echo "<p>Error: $error_message</p>";
//            die();
//        }
    }


    // Update the database
    function update_review ($db, $id, $report, $designer, $date) {
//        try {
// // Modify database row
// $query = "UPDATE reviews SET db=:db, designer=:designer, date=:date WHERE id = :id";
// $statement = $db->prepare($query);
//
// $statement->bindValue(':id', $id);
// $statement->bindValue(':report', $report);
// $statement->bindValue(':designer', $designer);
// $statement->bindValue(':date', $date);
//
// $statement->execute();
// $statement->closeCursor();
//
// return true;
// } catch (PDOException $e) {
// $error_message = $e->getMessage();
// echo "<p>Error: $error_message</p>";
// die();
// }
//
    }




    /* -------------------------------
        DATABASE CONNECT
    ------------------------------- */

    // Connect to Bluehost database 
    function review_database($host, $dbname, $username, $password) {
        try {
            $db_connect = "mysql:host=$host;dbname=$dbname";
            return new PDO($db_connect, $username, $password);
        } catch (PDOException $e) {
            $error_message = $e->getMessage();
            echo "<p>Error: $error_message</p>";
            die();
        }
    }


    // Connect to the Bluehost database
    function bluehost_connect() {
        $dbname = 'bomgtwot_review';
        $username = 'bomgtwot';
        $password = 'Devilarm555.';
        $port = '3306';
        $host = "localhost:$port";
        return review_database($host, $dbname, $username, $password);
    }


    // Create a database connection
    $db = bluehost_connect(); 

?>
