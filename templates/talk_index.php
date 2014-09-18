<?php

include 'includes/header.php';

echo '<div class="container">';

if (empty($talks_data)) {
    echo "ERROR: No talks found";
} else {
    foreach ($talks_data as $year => $talks) {
        $panel_class = is_numeric($year) ? 'info' : 'primary';

        ?>
        <div class="panel panel-<?=$panel_class;?>">
            <div class="panel-heading">
                <h3 class="panel-title"><?=$year;?></h3>
            </div>
            <div class="list-group">
                <?php
                foreach ($talks as $title => $data) { ?>
                    <a href="<?=$data['page_link']?>" class="list-group-item">
                        <span class="badge"><?=date('F jS', strtotime($data['date']));?></span>
                        <?=$title?>
                        <span class="label label-primary"><?=$data['event']?></span>
                </a>
                <?php
                } ?>

            </div>
        </div>
        <?php
    }
}

echo '</div>';

include 'includes/footer.php';