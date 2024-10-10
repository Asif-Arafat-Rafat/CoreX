<?php
include '../database/connection.php'; // Including the database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Fetching form data
    $phone = $_POST['phone'];
    $part = $_POST['part'];
    $otherComponent = isset($_POST['otherComponent']) ? $_POST['otherComponent'] : '';
    $urgency = $_POST['urgency'];
    $description = $_POST['description'];

    // Check if the 'Others' option is selected, and use the 'otherComponent' value
    $component = ($part === 'Others') ? $otherComponent : $part;

    // SQL query to insert the data into the 'pc_repair' table
    $sql = "INSERT INTO pc_repair (phone_number, urgency, components, details) 
            VALUES (:phone, :urgency, :component, :description)";

    // Prepare and execute the query
    try {
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':phone', $phone);
        $stmt->bindParam(':urgency', $urgency);
        $stmt->bindParam(':component', $component);
        $stmt->bindParam(':description', $description);
        $stmt->execute();

        header('Location: ../../successful.php');
    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
?>
