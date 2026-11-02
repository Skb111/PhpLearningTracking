<?php
require 'ExpenseTracker.php';
$tracker = new ExpenseTracker();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tracker->addExpense($_POST['title'], (float)$_POST['amount'], $_POST['category']);
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head><title>Add Expense</title></head>
<body>
<h1>Add Expense</h1>
<form method="post">
    Title: <input type="text" name="title" required><br><br>
    Amount: <input type="number" step="0.01" name="amount" required><br><br>
    Category: <input type="text" name="category" required><br><br>
    <button type="submit">Save</button>
</form>
</body>
</html>
