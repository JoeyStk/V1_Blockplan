<?php
$hash = isset($_GET['hash']);
$path = "../../../../backend/validation/validate_setup.php?hash=" . $hash; //for validation
?>

<!-- To be deleted -->
<link rel="stylesheet" href="../../../css/styles.css"></link>
<script src="../../../js/jquery.js"></script> 
<script src="../../../js/script.js"></script> 
<!-- To be deleted -->


<form method="POST" target="_blank" action="<?= $path ?>">
    <div class="container">
        <h1>Formular zum Aufsetzen des Blockplans</h1>
        <div class="form_setup_line">
            <?php for ($i = 1; $i < 41; $i++) {?>
                <div class="line line_<?= $i ?>">
                    <div class="row">
                        <div class="margin_6">
                            <label class="input_label">Woche vom</label>
                            <input name="date_from_<?= $i ?>" type="date">
                        </div>
                        <div class="margin_6">
                            <label class="input_label">Bis zum</label>
                            <input name="date_to_<?= $i ?>" type="date">
                        </div>
                        <div class="row">
                            <div>
                                <label>10.-12. Klasse</label>
                                <input type="radio" checked value="radio_class_regular=<?= $i ?>" name="radio_class_id=<?= $i ?>">
                            </div>
                            <div>
                                <label>13. Klasse</label>
                                <input type="radio" value="radio_class_senior=<?= $i ?>" name="radio_class_id=<?= $i ?>">
                            </div>
                            <div>
                                <br>
                                <label>Ferien</label>
                                <input type="radio" value="radio_class_vacation=<?= $i ?>" name="radio_class_id=<?= $i ?>">
                            </div>
                        </div>
                        <div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="margin_4">
                            <label class="input_label">Tage</label>
                            <input name="number=<?= $i ?>" value="5" min="1" max="5" type="number">
                        </div>
                        <div>
                            <!-- <label>IT-Berufe</label> -->
                            <input class="margin_4" value="IT-Berufe" type="text" disabled>
                        </div>
                        <div class="row">
                            <div>
                                <label>A-Block</label>
                                <input value="group_it_a=<?= $i ?>" type="radio" checked name="radio_group_it_id=<?= $i ?>">
                            </div>
                            <div>
                                <label>B-Block</label>
                                <input value="group_it_b=<?= $i ?>" type="radio" name="radio_group_it_id=<?= $i ?>">
                            </div>
                            <div>
                                <label>C-Block</label>
                                <input value="group_it_c=<?= $i ?>" type="radio" name="radio_group_it_id=<?= $i ?>">
                            </div>
                        </div>
                        <div class="margin_4">
                            <label class="input_label">Bemerkungen</label>
                            <input name="comment_it_<?= $i ?>" type="text">
                        </div>
                    </div>
                    <div class="row">
                        <div>
                        </div>
                        <div>
                            <!-- <label>Elektro-Berufe</label> -->
                            <input class="margin_4" value="Elektro-Berufe" type="text" disabled>
                        </div>
                        <div class="row">
                            <div>
                                <label>A-Block</label>
                                <input type="radio" checked value="group_electro_a=<?= $i ?>" name="radio_group_electro_id=<?= $i ?>">
                            </div>
                            <div>
                                <label>B-Block</label>
                                <input type="radio" value="group_electro_b=<?= $i ?>" name="radio_group_electro_id=<?= $i ?>">
                            </div>
                            <div>
                                <label>C-Block</label>
                                <input type="radio" value="group_electro_c=<?= $i ?>" name="radio_group_electro_id=<?= $i ?>">
                            </div>
                        </div>
                        <div class="margin_4">
                            <label class="input_label">Bemerkungen</label>
                            <input name="comment_electro_<?= $i ?>" type="text">
                        </div>
                    </div>
                </div>
            
            <?php } ?>
            <div>
                <input class="submit submit_setup" type="submit" value="Abschicken">
            </div>
        </div>
    </form>
</div>

