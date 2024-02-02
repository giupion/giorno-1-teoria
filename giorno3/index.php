<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}
$contacts = isset($_SESSION['contacts']) ? $_SESSION['contacts'] : [];
// Display all registered accounts
// Your code to fetch and display user accounts goes here
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registered Accounts</title>
    
</head>
<body>
    <!-- Navbar with links to login and registration -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Your App Name</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="register.php">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content to display registered accounts -->
    <div class="container mt-5">
        <h2>Registered Accounts</h2>
        <!-- Display user accounts here -->
        <!-- Contenuto per mostrare gli account registrati -->
    <div class="container mt-5">
        <h2>Account Registrati</h2>
        <table class="table table-dark table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Image</th>
                    <th scope="col">Firstname</th>
                    <th scope="col">Lastname</th>
                    <th scope="col">City</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if (!empty($contacts)) {
                    foreach ($contacts as $key => $contact) { 
                ?>
                    <tr>
                        <th scope="row"><?= $key + 1 ?></th>
                        <td><img src=<?= $contact['Image'] ?> width="50" ></td>
                        <td><?= $contact['Firstname'] ?></td>
                        <td><?= $contact['Lastname'] ?></td>
                        <td><?= $contact['City'] ?></td>
                        <td><?= $contact['Phone'] ?></td>
                        <td><?= $contact['Email'] ?></td>
                    </tr>
                <?php 
                    }
                } else {
                    echo '<tr><td colspan="7">Nessun account registrato</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>
    </div>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</body>
</html>