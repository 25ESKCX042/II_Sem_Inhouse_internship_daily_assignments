<?php
$name = "Hridyansh";
$favouriteLanguage = "JavaScript";
$currentDate = date("Y-m-d");
$currentTime = date("H:i:s");
$visitorIP = $_SERVER['REMOTE_ADDR'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome - Mission 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow">
                <div class="card-body p-4">
                    <h3 class="mb-4">Welcome Page</h3>
                    <p><strong>Name:</strong> <?= $name ?></p>
                    <p><strong>Current Date:</strong> <?= $currentDate ?></p>
                    <p><strong>Current Time:</strong> <?= $currentTime ?></p>
                    <p><strong>Favourite Programming Language:</strong> <?= $favouriteLanguage ?></p>
                    <p class="text-muted">You are visiting from: <?= $visitorIP ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
 