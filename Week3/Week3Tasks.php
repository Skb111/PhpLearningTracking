<?php

// Calculate tax based on amount and rate
function calculateTax(float $amount, float $rate): float {
    return $amount * ($rate / 100);
}

echo '<pre>';

// Format currency with locale and symbol
function formatCurrency(float $amount, string $currency = 'NGN'): string {
    return number_format($amount, 2) . ' ' . $currency;
}
echo '<pre>';

// Generate a URL-friendly slug from text
function generateSlug(string $text): string {
    $slug = strtolower(trim($text));
    $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);
    return trim($slug, '-');
}
echo '<pre>';
// Calculate age from date of birth
function calculateAge(string $dob): int {
    $birthDate = new DateTime($dob);
    $today = new DateTime();
    $age = $today->diff($birthDate)->y;
    return $age;
}
echo '<pre>';
// Validate email format
function validateEmail(string $email): bool {
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}
echo '<pre>';
// Paginate an array of items
function paginate(array $items, int $page, int $perPage): array {
    $offset = ($page - 1) * $perPage;
    return array_slice($items, $offset, $perPage);
}
echo '<pre>';
// Generate a unique reference string
function generateReference(string $prefix = 'REF'): string {
    return $prefix . strtoupper(uniqid());
}
echo '<pre>';
// Example usage
echo "Tax: " . calculateTax(1000, 7.5) . PHP_EOL;
echo "Currency: " . formatCurrency(1234.56, 'NGN') . PHP_EOL;
echo "Slug: " . generateSlug('Hello World Example!') . PHP_EOL;
echo "Age: " . calculateAge('1990-05-15') . PHP_EOL;
echo "Email valid? " . (validateEmail('test@example.com') ? 'Yes' : 'No') . PHP_EOL;

$items = range(1, 50);
print_r(paginate($items, 2, 10));

echo "Reference: " . generateReference() . PHP_EOL;

