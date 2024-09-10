<!DOCTYPE html>
<html>
<head>
    <title>Patterns</title>
    <style>
        .pattern {
            white-space: pre;
            font-family: monospace;
        }
        .label {
            text-align: left;
            margin-top: 10px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php
// Helper function to print a label
function printLabel($label) {
    echo "<div class='label'>$label</div><br/>";
}

// Alphabetic Pyramid
$char = 'A';
for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $char . " ";
    }
    $char++;
    echo "<br>";
}
printLabel("Alphabetic Pyramid");

// Continuous Alphabetic
$char = 'A';
$n = 5;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $char . " ";
        $char++;
    }
    echo "<br>";
}
printLabel("Continuous Alphabetic");

// Diamond Pattern
$n = 5;
for ($i = 1; $i <= $n; $i++) {
    for ($j = $i; $j < $n; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }
    echo "<br>";
}
for ($i = $n - 1; $i >= 1; $i--) {
    for ($j = $n; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }
    echo "<br>";
}
printLabel("Diamond");

// Hourglass Patterns
$n = 5;
for ($i = $n; $i >= 1; $i--) {
    for ($j = $n; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }
    echo "<br>";
}
printLabel("Hourglass Patterns");

// Inverted Triangle Pyramid
$n = 5;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
for ($i = $n - 1; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
printLabel("Inverted Triangle Pyramid");

// Half Diamond
$n = 5;
for ($i = $n; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
printLabel("Half Diamond");

// Inverted Pyramid
$n = 4;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $i . " ";
    }
    echo "<br>";
}
printLabel("Inverted Pyramid");

// Number Pyramid
$n = 5;
for ($i = 1; $i <= $n; $i++) {
    for ($j = $i; $j < $n; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        echo "*";
    }
    echo "<br>";
}
printLabel("Number Pyramid");

// Simple Pyramid
$n = 5;
for ($i = 1; $i <= $n; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
printLabel("Simple Pyramid");

// Palindrome Pyramid Pattern
$rows = 5;
$count = 0;
$count1 = 0;
$k = 0;
for ($i = 1; $i <= $rows; ++$i) {
    for ($space = 1; $space <= $rows - $i; ++$space) {
        echo "&nbsp;&nbsp;";
        ++$count;
    }
    while ($k != 2 * $i - 1) {
        if ($count <= $rows - 1) {
            echo ($i + $k) . "&nbsp;";
            ++$count;
        } else {
            ++$count1;
            echo ($i + $k - 2 * $count1) . "&nbsp;";
        }
        ++$k;
    }
    $count1 = $count = $k = 0;
    echo "<br>";
}
printLabel("Palindrome Pyramid Pattern");

// Inverted Half Diamond Pyramid Pattern
function printRotatedTriangle($n) {
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n - $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for ($k = 1; $k <= $i; $k++) {
            echo "*";
        }
        echo "<br>";
    }
    for ($i = 1; $i <= $n - 1; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "&nbsp;&nbsp;";
        }
        for ($k = 1; $k <= $n - $i; $k++) {
            echo "*";
        }
        echo "<br>";
    }
}
$n = 5;
printRotatedTriangle($n);
printLabel("Inverted Half Diamond Pyramid Pattern");

// Rotated Number Pyramid
?>
<div class="pattern">
<?php
$n = 4;
for ($i = 1; $i <= $n; $i++) {
    for ($space = $n; $space > $i; $space--) {
        echo "&nbsp;&nbsp;";
    }
    $num = $i;
    for ($j = 1; $j <= $i; $j++) {
        echo $num . " ";
        $num++;
    }
    echo "<br>";
}
printLabel("Rotated Number Pyramid");
?>
</div>

<div class="pattern">
<?php
$n = 5;
for ($i = 1; $i <= $n; $i++) {
    for ($space = $n; $space > $i; $space--) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}
printLabel("Flipped Pyramid");
?>
</div>

<?php
// Inverted Flipped Pyramid Pattern
function pypart2($n) {
    $i = $n;
    $j = 0;
    $k = 0;

    while ($i > 0) {
        while ($k < ($n - $i)) {
            echo "&nbsp;&nbsp;";
            $k++;
        }
        $k = 0;

        while ($j < $i) {
            echo "* ";
            $j++;
        }
        $j = 0;

        $i--;
        echo "<br>";
    }
}
$n = 5;
pypart2($n);
printLabel("Inverted Flipped Pyramid Pattern");
?>

</body>
</html>
