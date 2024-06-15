<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hypermarket Product Pricing</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Hypermarket Product Pricing Calculator</h1>
        <form method="post" action="">
            <div class="form-group">
                <label for="buying_price">Buying Price:</label>
                <input type="number" step="0.01" id="buying_price" name="buying_price[]" required>
            </div>
            <div class="form-group">
                <label for="vat">VAT Percentage:</label>
                <input type="number" step="0.01" id="vat" name="vat[]" required>
            </div>
            <div class="form-group">
                <label for="general_expenses">General Expenses Percentage:</label>
                <input type="number" step="0.01" id="general_expenses" name="general_expenses[]" required>
            </div>
            <div class="form-group">
                <label for="profit_margin">Profit Margin Percentage:</label>
                <input type="number" step="0.01" id="profit_margin" name="profit_margin[]" required>
            </div>
            <button type="button" id="add_product">Add Another Product</button>
            <button type="submit" name="calculate">Calculate Prices</button>
        </form>

        <?php if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['calculate'])): ?>
            <?php include 'calculate.php'; ?>
        <?php endif; ?>
    </div>

    <script>
        document.getElementById('add_product').addEventListener('click', function() {
            let form = document.querySelector('form');
            let newFormGroup = form.children[form.children.length - 4].cloneNode(true);
            form.insertBefore(newFormGroup, form.children[form.children.length - 2]);
        });
    </script>
</body>
</html>
