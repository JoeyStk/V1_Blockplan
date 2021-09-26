<?php 
    $path = '../../../../backend/validation/validate_filter.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- To be deleted -->
    <link rel="stylesheet" href="../../../css/styles.css"></link>
    <!-- <link rel="stylesheet" href="C:\xampp2\htdocs\projektwoche\projektwoche\code\frontend\css\styles.css"> -->
    <script src="../../../js/jquery.js"></script> 
    <script src="../../../js/script.js"></script> 
    <!-- To be deleted -->
</head>
<body>
    <div>
        <form method="POST" action="<?= $path ?>">
            <div class="display--flex">
                <div class="position_relative">
                    <label class="input_label">Beruf</label>
                    <select name="form_filter_job" type="text">
                        <option value="it">IT-Berufe</option>
                        <option value="electro">Elektro-Berufe</option>
                    </select>
                </div>
                <div class="margin_l_4 position_relative">
                    <label class="input_label">Jahrgangsstufe</label>
                    <select name="form_filter_class" type="text">
                        <option>10. Jahrgangsstufe</option>
                        <option>11. Jahrgangsstufe</option>
                        <option>12. Jahrgangsstufe</option>
                        <option>13. Jahrgangsstufe</option>
                    </select>
                </div>
                <div class="margin_l_4 position_relative">
                    <label class="input_label">Block</label>
                    <select name="form_filter_group" type="text">
                        <option>A-Block</option>
                        <option>B-Block</option>
                        <option>C-Block</option>
                    </select>
                </div>
                <div class="margin_l_4 position_relative">
                    <label class="input_label">Schuljahr</label>
                    <select name="form_filter_year" type="text">
                        <option></option>
                    </select>
                </div>
            </div>
            <div class="margin_2">
                <input class="button rounded" type="submit" value="Bestätigen">
            </div>
        </form>
    </div>
    
</body>
</html>

