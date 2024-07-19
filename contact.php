<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <!-- Add navigation here (same as index.php) -->
    </header>

    <main>
        <h1>Contact Us</h1>
        <form action="process_contact.php" method="post">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit">Send</button>
        </form>
    </main>

    <footer>
        <p>&copy; 2024 Online Course Website. All rights reserved.</p>
    </footer>

    <script src="script.js"></script>
</body>
</html>