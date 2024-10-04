<!-- dashboard.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles-dashboard.css">
    <title>Dashboard</title>
</head>
<body>

<?php include('header.php'); ?>

<main>
    <h2>Dashboard</h2>
    <p>Welcome, <?php echo htmlspecialchars($_SESSION['username'] ?? 'Guest'); ?>!</p>
    <br>
    <p> Here is your dashboard overview.</p>
</main>

<?php include('footer.php'); ?>

</body>
</html>
