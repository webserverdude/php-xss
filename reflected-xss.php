<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reflected XSS Vulnerability</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Reflected XSS Vulnerability</h1>
        <p>This page contains a simple reflected XSS vulnerability.</p>
        <form method="GET">
            <div class="mb-3">
                <label for="inputName" class="form-label">Enter your name:</label>
                <input type="text" class="form-control" id="inputName" name="name">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div class="mt-3">
            <?php
            // Check if 'name' parameter is set
            if(isset($_GET['name'])) {
                // Display the user input without proper sanitization
                echo "<p>Hello, " . $_GET['name'] . "!</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
