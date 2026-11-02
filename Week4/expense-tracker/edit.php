<?php
require 'ExpenseTracker.php';
$tracker = new ExpenseTracker();
$expenses = $tracker->getExpenses();

$id = $_GET['id'] ?? null;
$expense = array_filter($expenses, fn($e) => $e['id'] === $id);
$expense = $expense ? array_values($expense)[0] : null;

if (!$expense) { die("Expense not found."); }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tracker->editExpense($id, $_POST['title'], (float)$_POST['amount'], $_POST['category']);
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head><title>Edit Expense</title></head>
<body>
<h1>Edit Expense</h1>
<form method="post">
    Title: <input type="text" name="title" value="<?= htmlspecialchars($expense['title']) ?>" required><br><br>
    Amount: <input type="number" step="0.01" name="amount" value="<?= $expense['amount'] ?>" required><br><br>
    Category: <input type="text" name="category" value="<?= htmlspecialchars($expense['category']) ?>" required><br><br>
    <button type="submit">Update</button>
</form>
</body>
</html>
