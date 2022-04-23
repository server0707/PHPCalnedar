<?php
include 'vendor/Calendar.php';
use vendor\Calendar;

$calendar = new Calendar();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Calendar</title>
    <link href="assets/calendar.css" type="text/css" rel="stylesheet"/>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-4">
            <form action="<?= $_SERVER['PHP_SELF'] ?>" class="was-validated">
                <div class="mb-3 mt-3">
                    <label for="year" class="form-label">Year:</label>
                    <input type="number" class="form-control" id="year" placeholder="Enter year number" name="year" required min="1000" max="9999" value="<?= $_GET['year'] ?>">
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Ushbu maydonni to'ldirish va yil raqami to'g'ri yozilishi shart.</div>
                </div>
                <div class="mb-3">
                    <label for="month" class="form-label">Month:</label>
                    <input type="number" class="form-control" id="month" placeholder="Enter month number" name="month" required max="12" min="1" value="<?= $_GET['month'] ?>">
                    <div class="valid-feedback">Valid.</div>
                    <div class="invalid-feedback">Ushbu maydonni to'ldirish va oy raqami to'g'ri yozilishi shart.</div>
                </div>


                <button type="submit" class="btn btn-primary">View</button>
            </form>
        </div>
        <div class="col-8">
            <?php
            echo $calendar->show();
            ?>
        </div>
    </div>

</div>
</body>
</html>