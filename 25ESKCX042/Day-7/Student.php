<?php
$name = "Hridyansh";
$college = "Symbiosis Centre for Information Technology (SCIT), Jaipur";
$branch = "BTech Data Science";
$yearOfStudy = "2nd Year";
$bio = "Data Science student with a strong interest in EEG-based machine learning research and full-stack web development.";
 
$currentMonth = date("n");
$currentYear = date("Y");
 
if ($currentMonth < 6) {
    $academicYear = ($currentYear - 1) . "-" . $currentYear;
} else {
    $academicYear = $currentYear . "-" . ($currentYear + 1);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Profile - Mission 2</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow border-primary">
                <div class="card-header bg-primary text-white text-center">
                    <h5 class="mb-0">Student ID Card</h5>
                </div>
                <div class="card-body p-4">
                    <p><strong>Name:</strong> <?= $name ?></p>
                    <p><strong>College:</strong> <?= $college ?></p>
                    <p><strong>Branch:</strong> <?= $branch ?></p>
                    <p><strong>Year of Study:</strong> <?= $yearOfStudy ?></p>
                    <p><strong>Academic Year:</strong> <?= $academicYear ?></p>
                    <hr>
                    <p class="mb-0"><strong>Bio:</strong> <?= $bio ?></p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
 