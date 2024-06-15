<?php
function calculate_price($buying_price, $vat, $general_expenses, $profit_margin) {
    $vat_amount = ($buying_price * $vat) / 100;
    $general_expenses_amount = ($buying_price * $general_expenses) / 100;
    $profit_margin_amount = ($buying_price * $profit_margin) / 100;
    $selling_price = $buying_price + $vat_amount + $general_expenses_amount + $profit_margin_amount;

    return [
        'vat_amount' => $vat_amount,
        'general_expenses_amount' => $general_expenses_amount,
        'profit_margin_amount' => $profit_margin_amount,
        'selling_price' => $selling_price,
    ];
}

$products = [];

foreach ($_POST['buying_price'] as $index => $buying_price) {
    $vat = $_POST['vat'][$index];
    $general_expenses = $_POST['general_expenses'][$index];
    $profit_margin = $_POST['profit_margin'][$index];

    $calculation = calculate_price($buying_price, $vat, $general_expenses, $profit_margin);
    $products[] = [
        'buying_price' => $buying_price,
        'vat_amount' => $calculation['vat_amount'],
        'general_expenses_amount' => $calculation['general_expenses_amount'],
        'profit_margin_amount' => $calculation['profit_margin_amount'],
        'selling_price' => $calculation['selling_price'],
    ];
}
?>

<h2>Calculated Prices</h2>
<table>
    <thead>
        <tr>
            <th>Buying Price</th>
            <th>VAT Amount</th>
            <th>General Expenses Amount</th>
            <th>Profit Margin Amount</th>
            <th>Selling Price</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo number_format($product['buying_price'], 2); ?></td>
                <td><?php echo number_format($product['vat_amount'], 2); ?></td>
                <td><?php echo number_format($product['general_expenses_amount'], 2); ?></td>
                <td><?php echo number_format($product['profit_margin_amount'], 2); ?></td>
                <td><?php echo number_format($product['selling_price'], 2); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
