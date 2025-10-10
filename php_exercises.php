<?php
/**
 * PHP Programming Exercises with Interactive Calculators
 * Author: Mavi Angel Viranel O. Caling
 * Description: Complete implementation of 12 PHP programming exercises with working calculators
 */


echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Programming Exercises</title>
    <link href="https://fonts.googleapis.com/css2?family=Nexa:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1>🌸 PHP Programming Exercises 🌸</h1>';

// Exercise 1: Introduce Yourself (Static - No calculation needed)
$name = "Mavi Angel Viranel O. Caling";
$age = 21;
$favorite_color = "pink";
echo '<div class="exercise">
        <h2>1. 👋 Introduce Yourself</h2>
        <div class="output">
            <p>Hi, I\'m <span class="highlight">' . $name . '</span>, I am <span class="highlight">' . $age . '</span> years old, and my favorite color is <span class="highlight">' . $favorite_color . '</span>.</p>
        </div>
      </div>';

// Exercise 2: Simple Math
$a = 23;
$b = 61;
echo '<div class="exercise">
        <h2>2. ➕ Simple Math</h2>
        <div class="output">
            <div class="calculation">Sum: ' . $a . ' + ' . $b . ' = ' . ($a + $b) . '</div>
            <div class="calculation">Difference: ' . $b . ' - ' . $a . ' = ' . ($b - $a) . '</div>
            <div class="calculation">Product: ' . $a . ' × ' . $b . ' = ' . ($a * $b) . '</div>
            <div class="calculation">Quotient: ' . $b . ' ÷ ' . $a . ' = ' . round($b / $a, 2) . '</div>
        </div>
      </div>';

// Exercise 3: Area and Perimeter of a Rectangle
$length = 8;
$width = 4;
$area = $length * $width;
$perimeter = 2 * ($length + $width);
echo '<div class="exercise">
        <h2>3. 📐 Area and Perimeter of a Rectangle</h2>
        <div class="output">
            <p><strong>Dimensions:</strong> Length = ' . $length . ', Width = ' . $width . '</p>
            <div class="calculation">Area: ' . $length . ' × ' . $width . ' = ' . $area . '</div>
            <div class="calculation">Perimeter: 2 × (' . $length . ' + ' . $width . ') = ' . $perimeter . '</div>
        </div>
      </div>';

// Exercise 4: Temperature Converter
$celsius = 16;
$fahrenheit = ($celsius * 9/5) + 32;
echo '<div class="exercise">
        <h2>4. 🌡️ Temperature Converter</h2>
        <div class="output">
            <div class="calculation">' . $celsius . '°C = ' . $fahrenheit . '°F</div>
            <p><em>Formula: F = (C × 9/5) + 32</em></p>
        </div>
      </div>';

// Exercise 5: Swapping Variables (Static - No calculation needed)
$x = 52;
$y = 21;
echo '<div class="exercise">
        <h2>5. 🔄 Swapping Variables</h2>
        <div class="output">
            <p><strong>Before swapping:</strong> x = ' . $x . ', y = ' . $y . '</p>';
$temp = $x;
$x = $y;
$y = $temp;
echo '            <div class="calculation">After swapping: x = ' . $x . ', y = ' . $y . '</div>
            <p><em>Used temporary variable for swapping</em></p>
        </div>
      </div>';

// Exercise 6: Salary Calculator
$basic_salary = 50000;
$allowance = 20000;
$deduction = 10000;
$net_salary = $basic_salary + $allowance - $deduction;
echo '<div class="exercise">
        <h2>6. 💰 Salary Calculator</h2>
        <div class="output">
            <div class="calculation">Basic Salary: ₱' . number_format($basic_salary) . '</div>
            <div class="calculation">Allowance: ₱' . number_format($allowance) . '</div>
            <div class="calculation">Deduction: ₱' . number_format($deduction) . '</div>
            <div class="highlight">Net Salary: ₱' . number_format($net_salary) . '</div>
        </div>
      </div>';

// Exercise 7: BMI Calculator
$weight = 53; // kg
$height = 1.6256; // meters
$bmi = $weight / ($height * $height);
echo '<div class="exercise">
        <h2>7. ⚖️ BMI Calculator</h2>
        <div class="output">
            <div class="calculation">Weight: ' . $weight . ' kg</div>
            <div class="calculation">Height: ' . $height . ' m</div>
            <div class="calculation">BMI = ' . $weight . ' ÷ (' . $height . ' × ' . $height . ') = ' . round($bmi, 2) . '</div>
        </div>
      </div>';

// Exercise 8: String Manipulation (Static - No calculation needed)
$sentence = "This is a sample sentence for string manipulation.";
echo '<div class="exercise">
        <h2>8. 📝 String Manipulation</h2>
        <div class="output">
            <p><strong>Original sentence:</strong> "' . htmlspecialchars($sentence) . '"</p>
            <div class="calculation">Number of characters: ' . strlen($sentence) . '</div>
            <div class="calculation">Number of words: ' . str_word_count($sentence) . '</div>
            <div class="calculation">Uppercase: ' . htmlspecialchars(strtoupper($sentence)) . '</div>
            <div class="calculation">Lowercase: ' . htmlspecialchars(strtolower($sentence)) . '</div>
        </div>
      </div>';

// Exercise 9: Bank Account Simulation (Static - No calculation needed)
$balance = 10000;
$deposit = 5000;
$withdraw = 2000;
echo '<div class="exercise">
        <h2>9. 🏦 Bank Account Simulation</h2>
        <div class="output">
            <div class="calculation">Initial balance: ₱' . number_format($balance) . '</div>
            <div class="calculation">Deposit: +₱' . number_format($deposit) . '</div>
            <div class="calculation">Withdrawal: -₱' . number_format($withdraw) . '</div>';
$balance = $balance + $deposit - $withdraw;
echo '            <div class="highlight">Final balance: ₱' . number_format($balance) . '</div>
        </div>
      </div>';

// Exercise 10: Simple Grading System
$math = 85;
$english = 92;
$science = 78;
$average = ($math + $english + $science) / 3;
if ($average >= 90) {
    $grade = "A";
} elseif ($average >= 80) {
    $grade = "B";
} elseif ($average >= 70) {
    $grade = "C";
} elseif ($average >= 60) {
    $grade = "D";
} else {
    $grade = "F";
}
echo '<div class="exercise">
        <h2>10. 📊 Simple Grading System</h2>
        <div class="output">
            <div class="calculation">Math: ' . $math . '</div>
            <div class="calculation">English: ' . $english . '</div>
            <div class="calculation">Science: ' . $science . '</div>
            <div class="calculation">Average: ' . round($average, 2) . '</div>
            <div class="highlight">Grade: ' . $grade . '</div>
        </div>
      </div>';

// Exercise 11: Currency Converter
$php_amount = 1000;
$usd_rate = 0.018; // 1 PHP = 0.018 USD
$eur_rate = 0.016; // 1 PHP = 0.016 EUR
$jpy_rate = 2.50;  // 1 PHP = 2.50 JPY
$usd = $php_amount * $usd_rate;
$eur = $php_amount * $eur_rate;
$jpy = $php_amount * $jpy_rate;
echo '<div class="exercise">
        <h2>11. 💱 Currency Converter</h2>
        <div class="output">
            <p><strong>PHP Amount:</strong> ₱' . number_format($php_amount) . '</p>
            <p><strong>Exchange Rates:</strong></p>
            <div class="calculation">USD: ₱1 = $' . $usd_rate . '</div>
            <div class="calculation">EUR: ₱1 = €' . $eur_rate . '</div>
            <div class="calculation">JPY: ₱1 = ¥' . $jpy_rate . '</div>
            <p><strong>Converted Amounts:</strong></p>
            <div class="calculation">USD: $' . round($usd, 2) . '</div>
            <div class="calculation">EUR: €' . round($eur, 2) . '</div>
            <div class="calculation">JPY: ¥' . round($jpy, 2) . '</div>
        </div>
      </div>';

// Exercise 12: Travel Cost Estimator
$distance = 200; // km
$fuel_consumption = 12; // km per liter
$fuel_price = 55; // PHP per liter
$fuel_needed = $distance / $fuel_consumption;
$total_cost = $fuel_needed * $fuel_price;
echo '<div class="exercise">
        <h2>12. 🚗 Travel Cost Estimator</h2>
        <div class="output">
            <div class="calculation">Distance: ' . $distance . ' km</div>
            <div class="calculation">Fuel consumption: ' . $fuel_consumption . ' km/liter</div>
            <div class="calculation">Fuel price: ₱' . $fuel_price . ' per liter</div>
            <div class="calculation">Fuel needed: ' . round($fuel_needed, 2) . ' liters</div>
            <div class="highlight">Total travel cost: ₱' . round($total_cost, 2) . '</div>
        </div>
      </div>';

echo '    </div>
</body>
</html>';
?>
