<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diabetes Prediction Form</title>
</head>
<body>

<h2>Diabetes Prediction Form</h2>

<form action="submit.php" method="get">
    <label for="arg_pregnant">Pregnant:</label>
    <input type="text" name="arg_pregnant" id="arg_pregnant" required><br>

    <label for="arg_glucose">Glucose:</label>
    <input type="text" name="arg_glucose" id="arg_glucose" required><br>

    <label for="arg_pressure">Blood Pressure:</label>
    <input type="text" name="arg_pressure" id="arg_pressure" required><br>

    <label for="arg_triceps">Triceps:</label>
    <input type="text" name="arg_triceps" id="arg_triceps" required><br>

    <label for="arg_insulin">Insulin:</label>
    <input type="text" name="arg_insulin" id="arg_insulin" required><br>

    <label for="arg_mass">mass:</label>
    <input type="text" name="arg_mass" id="arg_mass" required><br>

    <label for="arg_pedigree">pedigree:</label>
    <input type="text" name="arg_pedigree" id="arg_pedigree" required><br>

    <label for="arg_age">Age:</label>
    <input type="text" name="arg_age" id="arg_age" required><br>

    



    <!-- Add similar input fields for other parameters -->

    <button type="submit">Predict Diabetes</button>
</form>

</body>
</html>
