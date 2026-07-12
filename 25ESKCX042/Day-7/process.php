<?php
$errors = [];
$name = $email = $branch = $phone = "";
 
if ($_SERVER["REQUEST_METHOD"] === "POST") {
 
    $name   = trim($_POST['student_name']);
    $email  = trim($_POST['student_email']);
    $branch = trim($_POST['student_branch']);
    $phone  = trim($_POST['student_phone']);
 
    if (empty($name)) {
        $errors[] = "Name is required.";
    }
 
    if (empty($branch)) {
        $errors[] = "Branch is required.";
    }
 
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Please enter a valid email address.";
    }
 
    if (!is_numeric($phone)) {
        $errors[] = "Phone number should contain only digits.";
    } elseif (strlen($phone) < 10) {
        $errors[] = "Phone number is too short.";
    } elseif (strlen($phone) > 10) {
        $errors[] = "Phone number is too long.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Result</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
 
            <?php if (!empty($errors)): ?>
                <div class="alert alert-danger">
                    <strong>Please fix the following:</strong>
                    <ul class="mb-0">
                        <?php foreach ($errors as $error): ?>
                            <li><?= $error ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <a href="register.html" class="btn btn-outline-primary">Go Back</a>
 
            <?php else: ?>
                <div class="card border-success shadow">
                    <div class="card-body p-4">
                        <h4 class="text-success mb-3">Registration Received</h4>
                        <p class="lead">Welcome, <?= $name ?>!</p>
                        <hr>
                        <p><strong>Name:</strong> <?= $name ?></p>
                        <p><strong>Email:</strong> <?= $email ?></p>
                        <p><strong>Branch:</strong> <?= $branch ?></p>
                        <p><strong>Phone:</strong> <?= $phone ?></p>
                    </div>
                </div>
                <a href="register.html" class="btn btn-outline-primary mt-3">Register Another Student</a>
            <?php endif; ?>
 
        </div>
    </div>
</div>
</body>
</html>