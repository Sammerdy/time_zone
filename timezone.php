<html lang="km">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Khmer Date</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-5">

<?php
// Khmer day names
$khmerDays = [
    "Sunday"    => "ថ្ងៃអាទិត្យ",
    "Monday"    => "ថ្ងៃច័ន្ទ",
    "Tuesday"   => "ថ្ងៃអង្គារ",
    "Wednesday" => "ថ្ងៃពុធ",
    "Thursday"  => "ថ្ងៃព្រហស្បតិ៍",
    "Friday"    => "ថ្ងៃសុក្រ",
    "Saturday"  => "ថ្ងៃសៅរ៍"
];

// Khmer month names
$khmerMonths = [
    1  => "មករា",
    2  => "កុម្ភៈ",
    3  => "មីនា",
    4  => "មេសា",
    5  => "ឧសភា",
    6  => "មិថុនា",
    7  => "កក្កដា",
    8  => "សីហា",
    9  => "កញ្ញា",
    10 => "តុលា",
    11 => "វិច្ឆិកា",
    12 => "ធ្នូ"
];

// Get current date parts
$dayName = date("l");
$day     = date("j");
$month   = date("n");
$year    = date("Y");

// Build Khmer date
$khmerDate = $khmerDays[$dayName] . " ទី" . $day . " ខែ" . $khmerMonths[$month] . " ឆ្នាំ" . $year;

// Output
echo "<h1 class='text-light bg-primary p-5 rounded-5 text-center'>";
echo $khmerDate;
echo "</h1>";
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
