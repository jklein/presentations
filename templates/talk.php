<?php

include 'modules/header.php';
?>

<div class="container">
    <div class="row" style="text-align:center">
        <div class="col-md-1"></div>
        <div class="col-md-10" style="margin:auto">
            <?php
            if (!empty($data['video_link'])) { ?>
                <div class="col-md-12">
                    <h4><a href="<?=$data['video_link'];?>"><i class="fa fa-video-camera"></i>&nbsp;Watch the Video Here</a></h4>
                </div>
            <?php
            } ?>
            <script async class="speakerdeck-embed" data-id="<?=$data['speakerdeck_id']?>" data-ratio="<?=$data['speakerdeck_ratio']?>" src="//speakerdeck.com/assets/embed.js"></script>
            <div style="margin-bottom:5px">
                <strong>
                    <a href="<?=$data['slides_link']?>" title="<?=$title?>" target="_blank">
                        <?=$title;?>
                    </a>
                </strong> from
                <strong><a href="https://speakerdeck.com/jklein" target="_blank">Jonathan Klein</a></strong><br />
            </div>
            <h2><a href="<?=$data['rate_link']?>">Rate this talk!</a></h2>
        </div>
        <div class="col-md-1"></div>
    </div>

    <div class="resources row">
        <div class="col-md-12">
            <h2>Resources</h2>
        </div>

        <?php
        foreach ($data['links'] as $column => $group) {
            echo '<div class="col-md-6">';
            foreach ($group as $heading => $links) {
                echo '<h5>' . $heading . '</h5>';
                echo '<ul>';
                foreach ($links as $href => $title) {
                    echo '<li><a href="' . $href . '">' . $title . '</a></li>';
                }
                echo '</ul>';
            }
            echo '</div>';
        }?>
    </div>
</div>


<?php
include 'modules/footer.php';