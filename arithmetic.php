<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operations</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            padding-top: 70px;
            font-size: 24px;
            text-align: center;
        }
        .container {
            max-width: 600px;
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
            text-align: center;
        }
        #result {
            margin-top: 30px;
            font-size: 24px;
            text-align: center;
        }
        #ruel {
            font-size: 24px;
            text-align: center;
        }
    </style>
</head>
<body>
    
<p id="ruel"> RUEL'S CALCULATOR
    
    </p>

    <div class="container text-center">
        <h2>Arithmetic Operations</h2>
        <form id="calcForm">
            <div class="mb-3">
                <label for="num1" class="form-label">Enter first number:</label>
                <input type="number" class="form-control" id="num1" required>
            </div>
            <div class="mb-3">
                <label for="num2" class="form-label">Enter second number:</label>
                <input type="number" class="form-control" id="num2" required>
            </div>
            <button type="submit" class="btn btn-primary">Calculate</button>
        </form>

        <div id="result" class="alert alert-info" role="alert" style="display: none;">
            <p id="sum"></p>
            <p id="difference"></p>
            <p id="product"></p>
            <p id="quotient"></p>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        document.getElementById('calcForm').addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent form from submitting normally

            // Get the values of the two numbers
            const num1 = parseFloat(document.getElementById('num1').value);
            const num2 = parseFloat(document.getElementById('num2').value);

            // Calculate results
            const sum = num1 + num2;
            const difference = num1 - num2;
            const product = num1 * num2;
            const quotient = num2 !== 0 ? (num1 / num2).toFixed(2) : 'Cannot divide by zero';

            // Display the results
            document.getElementById('sum').innerText = `Sum: ${sum}`;
            document.getElementById('difference').innerText = `Difference: ${difference}`;
            document.getElementById('product').innerText = `Product: ${product}`;
            document.getElementById('quotient').innerText = `Quotient: ${quotient}`;

            // Show the results div
            document.getElementById('result').style.display = 'block';
        });
    </script>
</body>