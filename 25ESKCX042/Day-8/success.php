<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Onboarding Successful</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background:#f4f7f6;">
    <div class="container mt-5">
        <div class="card shadow border-0">
            <div class="card-header bg-success text-white">
                <h3 class="mb-0">Onboarding Complete</h3>
            </div>
            <div class="card-body">
                <div class="text-center mb-4 mt-3">
                    <h2 class="text-success">✅ Welcome to the Team!</h2>
                    <p class="text-muted">The employee profile has been successfully generated.</p>
                </div>
                
                <div class="row px-4">
                    <div class="col-md-6 mb-2">
                        <p><b>Name:</b> <?php echo htmlspecialchars($_POST['name'] ?? 'N/A'); ?></p>
                        <p><b>Phone:</b> <?php echo htmlspecialchars($_POST['phone'] ?? 'N/A'); ?></p>
                        <p><b>Email:</b> <?php echo htmlspecialchars($_POST['email'] ?? 'N/A'); ?></p>
                        <p><b>Start Date:</b> <?php echo htmlspecialchars($_POST['start_date'] ?? 'N/A'); ?></p>
                    </div>
                    <div class="col-md-6 mb-2">
                        <p><b>Department:</b> <?php echo htmlspecialchars($_POST['department'] ?? 'N/A'); ?></p>
                        <p><b>Shift:</b> <?php echo htmlspecialchars($_POST['shift'] ?? 'N/A'); ?></p>
                        <p><b>Address:</b> <?php echo htmlspecialchars($_POST['address'] ?? 'N/A'); ?></p>
                    </div>
                </div>

                <div class="text-center mt-4 mb-3">
                    <a href="index.html" class="btn btn-outline-dark">Add Another Employee</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>