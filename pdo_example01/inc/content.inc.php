<?php

include "pdo_connect.inc.php";

$stmt = $pdo->query("SELECT * FROM student");

$orderby = 'last_name';
$filter = '';

$sql = "SELECT * FROM student";
$result = $pdo->query($sql);

if ($result->rowCount() == 0) {
    echo "<p>There are currently no students to display.</p>";
} else {
    echo "<h2 class=\"mt-4\">Here are the students in the database table ({$result->rowCount()} rows)</h2>";

    echo '<div class="table-responsive">';
    echo '<table class="mt-4 table table-striped table-hover">';
    echo '<thead class="thead-dark"><tr><th><a href="?sortby=student_id">Student ID</a></th><th><a href="?sortby=first_name">First Name</a></th><th><a href="?sortby=last_name">Last Name</a></th><th><a href="?sortby=email">Email</a></th><th><a href="?sortby=phone">Phone</a></th></tr></thead>';
    # $row will be an associative array containing one row of data at a time
    while ($row = $result->fetch()) {
        # display rows and columns of data
        echo '<tr>';
        echo "<td>{$row->student_id}</td>";
        echo "<td><strong>{$row->first_name}</strong></td>";
        echo "<td><strong>{$row->last_name}</strong></td>";
        echo "<td>{$row->email}</td>";
        echo "<td>{$row->phone}</td>";
        echo '</tr>';
    } // end while
    // closing table tag
    echo '</table>';
    echo '</div>';
} // end if

# close the database
$pdo = null;
