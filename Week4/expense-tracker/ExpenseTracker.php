<?php
/**
 * This is the Simple Expense Tracker Task
 * Provides add, edit, delete, categorize, and total expense management.
 * Storage: JSON file
 */

class ExpenseTracker {
    private $file;

    public function __construct(string $file = 'expenses.json') {
        $this->file = $file;
        if (!file_exists($file)) {
            file_put_contents($file, json_encode([]));
        }
    }

    /** Load all expenses */
    private function loadExpenses(): array {
        return json_decode(file_get_contents($this->file), true) ?? [];
    }

    /** Save expenses back to file */
    private function saveExpenses(array $expenses): void {
        file_put_contents($this->file, json_encode($expenses, JSON_PRETTY_PRINT));
    }

    /** Add a new expense */
    public function addExpense(string $title, float $amount, string $category): void {
        $expenses = $this->loadExpenses();
        $expenses[] = [
            'id' => uniqid(),
            'title' => $title,
            'amount' => $amount,
            'category' => $category,
            'date' => date('Y-m-d')
        ];
        $this->saveExpenses($expenses);
    }

    /** Edit an expense by ID */
    public function editExpense(string $id, string $title, float $amount, string $category): bool {
        $expenses = $this->loadExpenses();
        foreach ($expenses as &$expense) {
            if ($expense['id'] === $id) {
                $expense['title'] = $title;
                $expense['amount'] = $amount;
                $expense['category'] = $category;
                $this->saveExpenses($expenses);
                return true;
            }
        }
        return false;
    }

    /** Delete an expense by ID */
    public function deleteExpense(string $id): bool {
        $expenses = $this->loadExpenses();
        $filtered = array_filter($expenses, fn($e) => $e['id'] !== $id);
        if (count($filtered) !== count($expenses)) {
            $this->saveExpenses(array_values($filtered));
            return true;
        }
        return false;
    }

    /** Get all expenses */
    public function getExpenses(): array {
        return $this->loadExpenses();
    }

    /** Get total expenses */
    public function getTotal(): float {
        return array_sum(array_column($this->loadExpenses(), 'amount'));
    }

    /** Get totals by category */
    public function getTotalsByCategory(): array {
        $totals = [];
        foreach ($this->loadExpenses() as $expense) {
            $totals[$expense['category']] = ($totals[$expense['category']] ?? 0) + $expense['amount'];
        }
        return $totals;
    }
}
