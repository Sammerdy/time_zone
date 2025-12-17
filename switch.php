<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <!-- <h1>Hello, world!</h1> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>
<?php
$date = date("l");
switch ($date) {
    case "Monday":
        echo "<h1 class='text-light m-1 p-5 bg-primary border rounded-5 text-center'>ចន្ទ</h1>";
        break;
    case "Tuesday":
        echo "<h1 class='text-light m-1 p-5 bg-primary border rounded-5 text-center'>អង្គារ</h1>";
        break;
    case "Wednesday":
        echo "<h1 class='text-light m-1 p-5 bg-primary border rounded-5 text-center'>ពុធ</h1>";
        break;
    case "Thursday":
        echo "<h1 class='text-light m-1 p-5 bg-primary border rounded-5 text-center'>ព្រហស្បតិ៍</h1>";
        break;
    case "Friday":
        echo "<h1 class='text-light m-1 p-5 bg-primary border rounded-5 text-center'>សុក្រ</h1>";
        break;
    case "Saturday":
        echo "<h1 class='text-light m-1 p-5 bg-primary border rounded-5 text-center'>សៅរ៍</h1>";
        break;
    case "Sunday":
        echo "<h1 class='text-light m-1 p-5 bg-primary border rounded-5 text-center'>អាទិត្យ</h1>";
        break;
    default:
        echo "Unknown day.";
}
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.min.js" integrity="sha384-G/EV+4j2dNv+tEPo3++6LCgdCROaejBqfUeNjuKAiuXbjrxilcCdDz6ZAVfHWe1Y" crossorigin="anonymous"></script>