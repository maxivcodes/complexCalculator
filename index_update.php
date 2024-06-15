<form method="post" action="">
    <div class="form-group">
        <label for="buying_price">Buying Price:</label>
        <input type="number" step="0.01" min="0" id="buying_price" name="buying_price[]" required>
    </div>
    <div class="form-group">
        <label for="vat">VAT Percentage:</label>
        <input type="number" step="0.01" min="0" id="vat" name="vat[]" required>
    </div>
    <div class="form-group">
        <label for="general_expenses">General Expenses Percentage:</label>
        <input type="number" step="0.01" min="0" id="general_expenses" name="general_expenses[]" required>
    </div>
    <div class="form-group">
        <label for="profit_margin">Profit Margin Percentage:</label>
        <input type="number" step="0.01" min="0" id="profit_margin" name="profit_margin[]" required>
    </div>
    <button type="button" id="add_product">Add Another Product</button>
    <button type="submit" name="calculate">Calculate Prices</button>
</form>
