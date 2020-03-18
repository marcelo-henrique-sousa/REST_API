<?php
try {
    $dbh = new PDO('mysql:host=localhost;dbname=testdb', 'test', 'test');
    foreach($dbh->query('SELECT * from products') as $row) {
        print_r($row);
    }
    $dbh = null;
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}
?>