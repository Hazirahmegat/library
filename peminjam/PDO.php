<?php
// Step 1: Connect to the database
$conn = mysqli_connect("localhost", "username", "password", "database_name");

// Step 2: Query the database
$result = mysqli_query($conn, "SELECT * FROM mytable");

// Step 3: Retrieve the data
$rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

// Step 4: Display the data
echo "<table>";
echo "<tr><th>ID</th><th>Name</th><th>Email</th></tr>";
foreach ($rows as $row) {
    echo "<tr><td>".$row['id']."</td><td>".$row['name']."</td><td>".$row['email']."</td></tr>";
}
echo "</table>";

// Step 5: Close the database connection
mysqli_close($conn);
?>
