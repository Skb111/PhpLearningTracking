<?php
require 'ExpenseTracker.php';
$tracker = new ExpenseTracker();

$id = $_GET['id'] ?? null;
if ($id) {
    $tracker->deleteExpense($id);
}
header("Location: index.php");
exit;
