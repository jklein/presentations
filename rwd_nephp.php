<?php

$title = "Practical Responsive Web Design - Northeast PHP 2013";
include 'includes/header.php';

$speakerdeck_link = 'https://speakerdeck.com/jklein/practical-responsive-web-design';
$video_link = 'https://www.youtube.com/watch?v=S2-pYh2jpjM';
?>

<div class="container">
    <div style="text-align:center">
        <div class="col-md-12">
            <h4><a href="<?=$video_link;?>">Watch the Video Here</a></h4>
        </div>
        <script async class="speakerdeck-embed" data-id="0690b6702d250131ff12122461a0ee5c" data-ratio="1.2994923857868" src="//speakerdeck.com/assets/embed.js"></script>
        <div style="margin-bottom:5px">
            <strong>
                <a href="<?=$speakerdeck_link;?>" title="<?=$title?>" target="_blank">
                    <?=$title;?>
                </a>
            </strong> from
            <strong><a href="https://speakerdeck.com/jklein" target="_blank">Jonathan Klein</a></strong><br />
        </div>
    <h4><a href="http://joind.in/talk/view/8898">Rate this talk!</a></h4>
    </div>

    <div class="resources row">
        <div class="col-md-12">
            <h2>Resources</h2>
        </div>

        <div class="col-md-6">
            <h5>Image Compression</h5>
            <ul>
                <li><a href="http://www.smushit.com/ysmush.it/">SmushIt</a></li>
                <li><a href="https://developers.google.com/speed/pagespeed/">PageSpeed</a></li>
                <li><a href="https://github.com/mikebrittain/Wesley">Wesley (command line tool)</a></li>
            </ul>
            <h5>Picturefill</h5>
            <ul>
                <li><a href="https://github.com/scottjehl/picturefill">Github Project</a></li>
                <li><a href="http://scottjehl.github.io/picturefill/">Demo Page</a></li>
            </ul>
            <h5>Clown Car Technique</h5>
            <ul>
                <li><a href="http://coding.smashingmagazine.com/2013/06/02/clown-car-technique-solving-for-adaptive-images-in-responsive-web-design/">Initial Article</a></li>
                <li><a href="https://github.com/estelle/clowncar">GitHub Project</a></li>
            </ul>
            <h5>Handling Old IE</h5>
            <ul>
                <li><a href="http://adactio.com/journal/4494/">Conditional Comments</a></li>
                <li><a href="http://buildmobile.com/understanding-responsive-web-design-cross-browser-compatibility/">Understanding Cross Browser Compatibility</a></li>

            </ul>
        </div>
        <div class="col-md-6">
            <h5>Responsive Images</h5>
            <ul>
                <li><a href="http://blog.cloudfour.com/responsive-imgs/">Responsive Images Part 1</a></li>
                <li><a href="http://blog.cloudfour.com/responsive-imgs-part-2/">Responsive Images Part 2</a></li>
                <li><a href="http://blog.cloudfour.com/responsive-imgs-part-3-future-of-the-img-tag/">Responsive Images Part 3</a></li>
                <li><a href="http://blog.cloudfour.com/8-guidelines-and-1-rule-for-responsive-images/">8 Guidelines and 1 Rule</a></li>
                <li><a href="http://blog.cloudfour.com/sensible-jumps-in-responsive-image-file-sizes/">Sensible Jumps in File Size</a></li>
                <li><a href="http://adaptive-images.com/">Adaptive-images</a></li>
            </ul>
            <h5>Display:none</h5>
            <ul>
                <li><a href="http://timkadlec.com/2012/04/media-query-asset-downloading-results/">Asset downloading results</a></li>
                <li><a href="http://alistapart.com/article/now-you-see-me">Now you see me</a></li>
            </ul>
            <h5>Other Links</h5>
            <ul>
                <li><a href="https://github.com/igrigorik/http-client-hints/">Client Hints</a></li>
                <li><a href="http://www.etsy.com/careers">Etsy Careers</a></li>
                <li><a href="http://www.jonathanklein.net">My Blog</a></li>
            </ul>
        </div>
    </div>
</div>

<?php

include 'includes/footer.php';
