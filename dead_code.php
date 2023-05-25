function isPositive($number) {
    if ($number > 0) {
        return true;
        echo "This line will never be executed.";
    } elseif ($number < 0) {
        return false;
    } else {
        return false;
    }
}

$positive = isPositive(10);
$negative = isPositive(-5);

if ($positive) {
    echo "The number is positive.";
} elseif ($negative) {
    echo "The number is negative.";
} else {
    echo "The number is zero.";
}
