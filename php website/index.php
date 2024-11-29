<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Health Diagnosis Expert System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Health Diagnosis Expert System</h1>
        <form action="diagnose.php" method="POST">
            <label for="prior">Prior Probability of Disease:</label>
            <input type="text" id="prior" name="prior" required>
            
            <label for="sensitivity">Sensitivity of Test:</label>
            <input type="text" id="sensitivity" name="sensitivity" required>

            <label for="specificity">Specificity of Test:</label>
            <input type="text" id="specificity" name="specificity" required>

            <button type="submit">Diagnose</button>
        </form>
    </div>
</body>
</html>
