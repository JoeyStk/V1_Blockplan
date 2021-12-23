<?php 
    require 'C:\xampp\htdocs\Blockplan\projektwoche\projektwoche\code\backend\functions.php';
    $path = 'edit.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../css/styles.css">
    <script src="../../../js/jquery.js"></script>
    <script src="../../../js/script.js"></script>
    <title>Document</title>
</head>
<body>
<div class="container">

    <?php 
    $timetables = getsJSON();
    createTabsInAdmin($timetables);
    ?>

    <div class="layover">
        <div class="layover_content">
            <div class="container">
                <div class="row">
                    <span class="highlighted">Neuen Blockplan anlegen</span>
                    <div class="icon_close layover_close"></div>
                </div>
                <div class="row">
                    <!-- %%PATH%% (action)-->
                    <form method="post" action="..\..\..\..\backend\validation\validate_create.php">
                        <div>
                            <label class="input_label">Titel</label>
                            <input name="form_create_name" class="margin_2" type="text">
                        </div>
                        <div>
                            <input class="margin_2 submit" type="submit" value="Bestätigen">
                        </div>
                        <span>Benennen: Blockplan 2021/22</span>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>