<?php require_once 'core/dbConfig.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO_ACTIVITY</title>
</head>
<body>
    
    <?php
    // 1. Fetch All Customers
    /*
    $stmt = $pdo->prepare("SELECT * FROM Customers");
    $stmt->execute();
    $customers = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($customers);
    echo "</pre>";
    */

    // 2. Fetch a Single Customer
    /*
    $stmt = $pdo->prepare("SELECT * FROM Customers LIMIT 1");
    $stmt->execute();
    $customer = $stmt->fetch(PDO::FETCH_ASSOC);
    echo "<pre>";
    print_r($customer);
    echo "</pre>";
    */

    // 3. Insert a New Customer
    /*
    $stmt = $pdo->prepare("INSERT INTO Customers (name, email, phone) VALUES (:name, :email, :phone)");
    $name = 'New Customer';
    $email = 'new@customer.com';
    $phone = '1231231234';
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);
    $stmt->execute();
    echo "New customer inserted successfully.";
    */

    // 4. Delete a Customer
    /*
    $stmt = $pdo->prepare("DELETE FROM Customers WHERE id = :id");
    $id = 1; // Change this ID to the one you want to delete
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    echo "Customer deleted successfully.";
    */

    // 5. Update a Customer
    /*
    $stmt = $pdo->prepare("UPDATE Customers SET name = :name WHERE id = :id");
    $name = 'Updated Name';
    $id = 1; // Change this ID to the one you want to update
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    echo "Customer updated successfully.";
    */

    // 6. Display All Plushies in an HTML Table
    /*
    $stmt = $pdo->prepare("SELECT * FROM Plushies");
    $stmt->execute();
    $plushies = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Type</th><th>Price</th><th>Stock</th></tr>";
    foreach ($plushies as $row) {
        echo "<tr>";
        echo "<td>" . htmlspecialchars($row['id']) . "</td>";
        echo "<td>" . htmlspecialchars($row['name']) . "</td>";
        echo "<td>" . htmlspecialchars($row['type']) . "</td>";
        echo "<td>" . htmlspecialchars($row['price']) . "</td>";
        echo "<td>" . htmlspecialchars($row['stock']) . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    */

    ?>

</body>
</html>
