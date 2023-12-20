<?php
// Assuming you have a MySQL database
$servername="localhost";
$username="root";
$password="";
$database="employee";
// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to get user details by user ID
function getUserDetails($userID, $conn) {
    // Sanitize the input to prevent SQL injection
    $userID = mysqli_real_escape_string($conn, $userID);

    // SQL query to get user details
    $sql = "SELECT emp_name FROM personal_details WHERE user_id = $userID";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        return $row;
    } else {
        return false; // User not found
    }
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get user ID from HTML input
    $userID = $_POST["user_id"];

    // Get user details
    $userDetails = getUserDetails($userID, $conn);

    if ($userDetails) {
        // Display user details
        echo "User ID: " . $userID . "<br>";
        echo "Username: " . $userDetails["emp_name"] . "<br>";
    } else {
        echo "User not found.";
    }
}

// Close the database connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="user_id">Enter User ID:</label>
        <input type="text" id="user_id" name="user_id" required>
        <button type="submit">Get User Details</button>
    </form>
</body>
</html>
