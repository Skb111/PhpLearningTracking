<?php
require 'ExpenseTracker.php';
$tracker = new ExpenseTracker();
$expenses = $tracker->getExpenses();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Expense Tracker</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 8px; text-align: left; }
        th { background: #f4f4f4; }
        a { text-decoration: none; color: blue; }
    </style>
</head>
<body>
<h1>Expense Tracker</h1>
<a href="add.php">➕ Add Expense</a>
<table>
    <tr>
        <th>Title</th><th>Amount</th><th>Category</th><th>Date</th><th>Actions</th>
    </tr>
    <?php foreach ($expenses as $expense): ?>
        <tr>
            <td><?= htmlspecialchars($expense['title']) ?></td>
            <td><?= number_format($expense['amount'], 2) ?></td>
            <td><?= htmlspecialchars($expense['category']) ?></td>
            <td><?= $expense['date'] ?></td>
            <td>
                <a href="edit.php?id=<?= $expense['id'] ?>">Edit</a> |
                <a href="delete.php?id=<?= $expense['id'] ?>">Delete</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<h2>Totals</h2>
<p><strong>Overall:</strong> <?= number_format($tracker->getTotal(), 2) ?></p>
<ul>
    <?php foreach ($tracker->getTotalsByCategory() as $cat => $total): ?>
        <li><?= htmlspecialchars($cat) ?>: <?= number_format($total, 2) ?></li>
    <?php endforeach; ?>
</ul>
</body>
</html>
