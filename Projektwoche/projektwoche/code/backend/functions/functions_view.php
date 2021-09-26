<?php 
require_once 'functions_control.php';

// function createTable(array $data) {
//     var_dump($data);
// }

function createTabsInAdmin(array $files) {
    $path = 'edit.php';
    ?>
    <ul class="tabs">
    <?php for ($i = 0; $i < sizeof($files);) {
        $file = json_decode($files[$i]);
        $i++; ?>
                <li class="tab-link" data-tab="tab-<?= $i ?>"><?= $file->name ?> </li>
            </ul>

            <div id="tab-<?= $i ?>" class="tab-content current">
                <?php renderTimetable('12') ?>
            </div>
        <?php
    }?>
    <div class="row button_group">
        <div>
            <a href="" class="button disabled ">Blockplan online stellen</a>
            <a href="<?= $path ?>?hash=<?= $file->hash ?>" class="disabled button button_ghost">Blockplan bearbeiten</a>
        </div>
        <div>
            <a class="link layover_open">Weiteren Blockplan anlegen</a>
        </div>
    </div>
    <?php
}

function createTabsOnUserSide() {
    $path =  __DIR__ . '/../../frontend/templates/elements/form/form_filter.php';
    ?>
    <ul class="tabs">
        <li class="tab-link" data-tab="tab-search">Suche</li>
        <li class="tab-link" data-tab="tab-timetable">Blockplan 2021/22</li>
    </ul>

    <div id="tab-search" class="tab-content current">
        <?php
        // var_dump(__DIR__);
            $path = '/Projektwoche/projektwoche/code/backend\validation\validate_filter.php';
            // $path = 'C:\xampp\htdocs\Projektwoche\projektwoche\code\backend\validation\validate_filter.php';
            form_filter_form($path);
        ?>
    </div>

    <div id="tab-timetable" class="tab-content">
        <?php renderTimetable() ?>
    </div>
    <?php
}

function renderTimetable($number = null) {
    ?>
    <table>
        <tr>
            <th rowspan="3" class="rotate_left">Jahreswoche</th>
            <th rowspan="3" class="rotate_left">Schulwoche</th>
            <th colspan="2">Zeitraum</th>
            <th rowspan="3">Schultage</th>
            <th colspan="4">Elektro-Berufe</th>
            <th>Bemerkungen</th>
            <th colspan="9">IT-Berufe</th>
        </tr>
        <tr>
            <th rowspan="2">Von</th>
            <th rowspan="2">Bis</th>
            <th colspan="3">10-12</th>
            <th>13</th>
            <th rowspan="2"></th>
            <th colspan="3">10</th>
            <th colspan="3">11</th>
            <th colspan="3">12</th>
        </tr>
        
        <tr>
            <th>a</th>
            <th>b</th>
            <th>c</th>
            <th></th>
            <th>a</th>
            <th>b</th>
            <th>c</th>
            <th>a</th>
            <th>b</th>
            <th>c</th>
            <th>a</th>
            <th>b</th>
            <th>c</th>
        </tr>
<?php
    $json = getsJSON();
    renderTimetableRows($json, $number);
?>
    </table>
    <?php
}

function renderTimetableRows($json, $number = null ) {
    foreach ($json as $files) {
        $file = json_decode($files);
        $i = 0;
        foreach ($file as $row) {
            $i++;            
            ?>
            <tr>
                <td></td>
                <td><?= $i ?></td>
                <td><?= $row->from ?></td>
                <td><?= $row->to ?></td>
                <td><?= $row->number ?></td>

                <?php if (str_contains($row->electro_group, 'group_electro_a')) {?>
                    <td><?= $row->number ?></td>
                    <td></td>
                    <td></td>
                <?php } else if (str_contains($row->electro_group, 'group_electro_b')) {?>
                    <td></td>
                    <td><?= $row->number ?></td>
                    <td></td>
                <?php } else {?>
                    <td></td>
                    <td></td>
                    <td><?= $row->number ?></td>
                <?php } ?>
                    <td><?= $row->comment_electro . $row->comment_it ?></td>

                    <td></td>

                    <?php if (str_contains($row->it_group, 'group_it_a')) {
                        
                    ?>
                    <td><?= $row->number ?></td>
                    <td></td>
                    <td></td>
                <?php } else if (str_contains($row->it_group, 'group_it_b')) {
                    ?>
                    <td></td>
                    <td><?= $row->number ?></td>
                    <td></td>
                <?php } else {?>
                    <td></td>
                    <td></td>
                    <td><?= $row->number ?></td>
                <?php } ?>

                <?php if (str_contains($row->it_group, 'group_it_a')) {
                        ?>
                    <td><?= $row->number ?></td>
                    <td></td>
                    <td></td>
                <?php } else if (str_contains($row->it_group, 'group_it_b')) {
                    ?>
                    <td></td>
                    <td><?= $row->number ?></td>
                    <td></td>
                <?php } else {?>
                    <td></td>
                    <td></td>
                    <td><?= $row->number ?></td>
                <?php } ?>

                <?php if (str_contains($row->it_group, 'group_it_a')) {
                        ?>
                    <td><?= $row->number ?></td>
                    <td></td>
                    <td></td>
                <?php } else if (str_contains($row->it_group, 'group_it_b')) {
                    ?>
                    <td></td>
                    <td><?= $row->number ?></td>
                    <td></td>
                <?php } else {?>
                    <td></td>
                    <td></td>
                    <td><?= $row->number ?></td>
                <?php } ?>



            </tr>
            <?php
            if($number != null) {
                if($i >= $number) {
                    break;
                }
            } else if($i >= 40) {
                break;
            }
        }
    }
}

function form_filter_form() {
    ?>
        <form>
            <div class="display--flex">
                <div class="position_relative">
                    <label class="input_label">Beruf</label>
                    <select class="form_filter_job" name="form_filter_job" type="text">
                        <option value="null" selected>-</option>
                        <option value="it">IT-Berufe</option>
                        <option value="electro">Elektro-Berufe</option>
                    </select>
                </div>
                <div class="margin_l_4 position_relative">
                    <label class="input_label">Jahrgangsstufe</label>
                    <select class="form_filter_class" name="form_filter_class" type="text">
                        <option value="null" selected>-</option>
                        <option value="10">10. Jahrgangsstufe</option>
                        <option value="11">11. Jahrgangsstufe</option>
                        <option value="12">12. Jahrgangsstufe</option>
                        <option value="13">13. Jahrgangsstufe</option>
                    </select>
                </div>
                <div class="margin_l_4 position_relative">
                    <label class="input_label">Block</label>
                    <select class="form_filter_group" name="form_filter_group" type="text">
                        <option value="null" selected>-</option>
                        <option value="a">A-Block</option>
                        <option value="b">B-Block</option>
                        <option value="c">C-Block</option>
                    </select>
                </div>
                <div class="margin_l_4 position_relative">
                    <label class="input_label">Schuljahr</label>
                    <select class="form_filter_year" name="form_filter_year" type="text">
                        <option value="null"></option>
                        <option value="aa">aa</option>
                    </select>
                </div>
            </div>
            <div class="margin_2">
                <input type="submit" class="form_filter_submit disabled button rounded" value="Bestätigen">
            </div>
        </form>
    <?php

    filter();
}

function filter() {
    if(isset($_GET['form_filter_job'])) {
        $job = $_GET['form_filter_job'];
        echo $job;
    };
    if(isset($_GET['form_filter_class'])) {
        $class = $_GET['form_filter_class'];
        echo $class;
    };
    if(isset($_GET['form_filter_group'])) {
        $group = $_GET['form_filter_group'];
        echo $group;
    };
    if(isset($_GET['form_filter_year'])) {
        $year = $_GET['form_filter_year'];
        echo $year;
    };

    $date = getdate();
    var_dump($date);
}