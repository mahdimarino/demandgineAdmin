<?php
// Database credentials
$servername = "localhost"; // Replace with your server name
$username = "demandgine"; // Replace with your DB username
$password = "DGadmin24$$1"; // Replace with your DB password
$dbname = "demandgine"; // Replace with your database name

// Create connection using PDO
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Set PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully<br>";
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // 1. Get the submitted data
    $title = $_POST['title'];
    $date = $_POST['date'];
    $content = $_POST['content'];

    // 2. Handle file upload
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if file was uploaded
    if ($_FILES['image']['error'] === UPLOAD_ERR_OK) {
        // Only allow specific file types (optional)
        $allowed_types = ['jpg', 'jpeg', 'png', 'gif', 'pdf'];
        if (!in_array($fileType, $allowed_types)) {
            echo "Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed.";
            $uploadOk = 0;
        }

        // If all checks pass, upload the file
        if ($uploadOk) {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.<br>";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        $target_file = null; // No file uploaded
    }

    // 3. Insert the post data into the database
    try {
        $stmt = $conn->prepare("INSERT INTO posts (title, post_date, content, image_path) VALUES (:title, :post_date, :content, :image_path)");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':post_date', $date);
        $stmt->bindParam(':content', $content);
        $stmt->bindParam(':image_path', $target_file);
        $stmt->execute();

        echo "New post created successfully!";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    // Close the connection
    $conn = null;
} else {
    echo "Invalid request.";
}
