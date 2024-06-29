<?php
// Connect to the database
$conn = new mysqli("localhost", "root", "", "campaign_feedback");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the data from the feedback table
$sql = "SELECT * FROM feedback";
$result = $conn->query($sql);

// Display the retrieved data in an HTML table
echo "<table border='1' cellpadding='10' cellspacing='0'>";
echo "<tr><th>Name</th><th>Email</th><th>Feedback</th><th>Rating</th><th>Submission Date</th></tr>";
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["name"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["feedback"] . "</td>";
        echo "<td>" . $row["rating"] . "</td>";
        echo "<td>" . $row["submission_date"] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>No feedback found</td></tr>";
}
echo "</table>";

// Close the database connection
$conn->close();
?>