<?php
/**
* PHP Programming Exercises with Interactive Forms
* Author: Mavi Angel Viranel O. Caling
*/

echo '<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>🌸 PHP Programming Exercises (with Forms)</title>
<link href="https://fonts.googleapis.com/css2?family=Nexa:wght@300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="styles.css">
</head>
<body>
<div class="container">
<h1>🌸 PHP Programming Exercises 🌸</h1>';

/* -------------------------------------------------------
EXERCISE 1: Introduce Yourself
------------------------------------------------------- */
echo '<div class="exercise">
<h2>👋 Introduce Yourself</h2>
<form method="post">
<label>👤 Name:</label>
<input type="text" name="name" placeholder="Enter your name" required>
<label>🎂 Age:</label>
<input type="number" name="age" min="1" placeholder="Enter your age" required>
<label>🎨 Favorite Color:</label>
<input type="text" name="color" placeholder="e.g., Pink" required>
<input type="submit" name="intro_submit" value="Show Introduction">
</form>';

if (isset($_POST['intro_submit'])) {
$name = htmlspecialchars($_POST['name']);
$age = htmlspecialchars($_POST['age']);
$color = htmlspecialchars($_POST['color']);
echo "<div class='output'>Hi, I'm <span class='highlight'>$name</span>, I'm <span class='highlight'>$age</span> years old, and my favorite color is <span class='highlight'>$color</span>.</div>";
}
echo '</div>';


/* -------------------------------------------------------
EXERCISE 2: Simple Math
------------------------------------------------------- */
echo '<div class="exercise">
<h2>➕ Simple Math</h2>
<form method="post">
<label>Number A:</label>
<input type="number" name="a" required>
<label>Number B:</label>
<input type="number" name="b" required>
<input type="submit" name="math_submit" value="Calculate">
</form>';

if (isset($_POST['math_submit'])) {
$a = $_POST['a'];
$b = $_POST['b'];
echo "<div class='output'>
<div class='calculation'>Sum: $a + $b = " . ($a + $b) . "</div>
<div class='calculation'>Difference: $b - $a = " . ($b - $a) . "</div>
<div class='calculation'>Product: $a × $b = " . ($a * $b) . "</div>
<div class='calculation'>Quotient: $b ÷ $a = " . round($b / $a, 2) . "</div>
</div>";
}
echo '</div>';


/* -------------------------------------------------------
EXERCISE 3: Area and Perimeter of a Rectangle
------------------------------------------------------- */
echo '<div class="exercise">
<h2>📐 Area and Perimeter of a Rectangle</h2>
<form method="post">
<label>Length:</label>
<input type="number" name="length" step="any" required>
<label>Width:</label>
<input type="number" name="width" step="any" required>
<input type="submit" name="rect_submit" value="Compute">
</form>';

if (isset($_POST['rect_submit'])) {
$length = $_POST['length'];
$width = $_POST['width'];
$area = $length * $width;
$perimeter = 2 * ($length + $width);
echo "<div class='output'>
<div class='calculation'>Area: $length × $width = $area</div>
<div class='calculation'>Perimeter: 2 × ($length + $width) = $perimeter</div>
</div>";
}
echo '</div>';


/* -------------------------------------------------------
EXERCISE 4: Temperature Converter
------------------------------------------------------- */
echo '<div class="exercise">
<h2>🌡️ Temperature Converter</h2>
<form method="post">
<label>Temperature (°C):</label>
<input type="number" name="celsius" step="any" required>
<input type="submit" name="temp_submit" value="Convert to °F">
</form>';

if (isset($_POST['temp_submit'])) {
$c = $_POST['celsius'];
$f = ($c * 9 / 5) + 32;
echo "<div class='output'><div class='calculation'>$c°C = $f°F</div></div>";
}
echo '</div>';


/* -------------------------------------------------------
EXERCISE 5: Swapping Variables
------------------------------------------------------- */
echo '<div class="exercise">
<h2>🔄 Swapping Variables</h2>
<form method="post">
<label>Value of X:</label>
<input type="number" name="x" required>
<label>Value of Y:</label>
<input type="number" name="y" required>
<input type="submit" name="swap_submit" value="Swap Values">
</form>';

if (isset($_POST['swap_submit'])) {
$x = $_POST['x'];
$y = $_POST['y'];
$temp = $x;
$x = $y;
$y = $temp;
echo "<div class='output'><div class='calculation'>After swapping: X = $x, Y = $y</div></div>";
}
echo '</div>';


/* -------------------------------------------------------
EXERCISE 6: Salary Calculator
------------------------------------------------------- */
echo '<div class="exercise">
<h2>💰 Salary Calculator</h2>
<form method="post">
<label>Basic Salary:</label>
<input type="number" name="basic" required>
<label>Allowance:</label>
<input type="number" name="allowance" required>
<label>Deduction:</label>
<input type="number" name="deduction" required>
<input type="submit" name="salary_submit" value="Compute Salary">
</form>';

if (isset($_POST['salary_submit'])) {
$net = $_POST['basic'] + $_POST['allowance'] - $_POST['deduction'];
echo "<div class='output'><div class='highlight'>Net Salary: ₱" . number_format($net) . "</div></div>";
}
echo '</div>';


/* -------------------------------------------------------
EXERCISE 7: BMI Calculator
------------------------------------------------------- */
echo '<div class="exercise">
<h2>⚖️ BMI Calculator</h2>
<form method="post">
<label>Weight (kg):</label>
<input type="number" step="any" name="weight" required>
<label>Height (m):</label>
<input type="number" step="any" name="height" required>
<input type="submit" name="bmi_submit" value="Calculate BMI">
</form>';

if (isset($_POST['bmi_submit'])) {
$w = $_POST['weight'];
$h = $_POST['height'];
$bmi = $w / ($h * $h);
echo "<div class='output'><div class='calculation'>BMI = " . round($bmi, 2) . "</div></div>";
}
echo '</div>';


/* -------------------------------------------------------
EXERCISE 11: Currency Converter
------------------------------------------------------- */
echo '<div class="exercise">
<h2>💱 Currency Converter</h2>
<form method="post">
<label>PHP Amount:</label>
<input type="number" name="php_amount" required>
<input type="submit" name="currency_submit" value="Convert">
</form>';

if (isset($_POST['currency_submit'])) {
$php = $_POST['php_amount'];
$usd = $php * 0.018;
$eur = $php * 0.016;
$jpy = $php * 2.50;
echo "<div class='output'>
<div class='calculation'>USD: $" . round($usd, 2) . "</div>
<div class='calculation'>EUR: €" . round($eur, 2) . "</div>
<div class='calculation'>JPY: ¥" . round($jpy, 2) . "</div>
</div>";
}
echo '</div>';


/* -------------------------------------------------------
EXERCISE 12: Travel Cost Estimator
------------------------------------------------------- */
echo '<div class="exercise">
<h2>🚗 Travel Cost Estimator</h2>
<form method="post">
<label>Distance (km):</label>
<input type="number" step="any" name="distance" required>
<label>Fuel Consumption (km/liter):</label>
<input type="number" step="any" name="consumption" required>
<label>Fuel Price (₱/liter):</label>
<input type="number" step="any" name="price" required>
<input type="submit" name="travel_submit" value="Estimate Cost">
</form>';

if (isset($_POST['travel_submit'])) {
$d = $_POST['distance'];
$c = $_POST['consumption'];
$p = $_POST['price'];
$fuel_needed = $d / $c;
$total = $fuel_needed * $p;
echo "<div class='output'><div class='highlight'>Total Travel Cost: ₱" . round($total, 2) . "</div></div>";
}
echo '</div>';

echo '</div></body></html>';
?>
