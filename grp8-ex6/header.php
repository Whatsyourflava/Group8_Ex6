
<?php
session_start(); // Start the session to access the username
?>

<header>
    <h1>Welcome to the Dashboard</h1>
    <nav>
        <ul>
            <li><a href="dashboard.php">Home</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="settings.php">Settings</a></li>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </nav>
    <?php if (isset($_SESSION['username'])): ?>
        <p>Hello, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
    <?php endif; ?>
</header>
<hr>