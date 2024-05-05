<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stored XSS Vulnerability</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Stored XSS Vulnerability</h1>
        <p>This page contains a simple stored XSS vulnerability.</p>
        <form method="POST">
            <div class="mb-3">
                <label for="inputComment" class="form-label">Leave a comment:</label>
                <textarea class="form-control" id="inputComment" name="comment" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        <div class="mt-3">
            <h2>Comments:</h2>
            <?php
            // Check if form is submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Save the comment to a file (vulnerable to XSS)
                file_put_contents('comments.txt', $_POST['comment'] . PHP_EOL, FILE_APPEND);
            }

            // Display comments (vulnerable to XSS)
            $comments = file_get_contents('comments.txt');
            echo nl2br($comments);
            ?>
        </div>
    </div>
</body>
</html>
