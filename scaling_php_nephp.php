<?php

$title = "Scaling PHP to 40 Million Uniques - Northeast PHP 2013";
include 'includes/header.php';

$speakerdeck_link = 'https://speakerdeck.com/jklein/scaling-php-to-40-million-uniques';
?>

<div class="container">
    <div style="text-align:center">
        <script async class="speakerdeck-embed" data-id="b4aef6b02d2401312d7e2658b910d553" data-ratio="1.2994923857868" src="//speakerdeck.com/assets/embed.js"></script>
        <div style="margin-bottom:5px">
            <strong>
                <a href="<?=$speakerdeck_link;?>" title="<?=$title;?>" target="_blank">
                    <?=$title;?>
                </a>
            </strong> from
            <strong><a href="https://speakerdeck.com/jklein" target="_blank">Jonathan Klein</a></strong>
        </div>
    <h4><a href="http://joind.in/talk/view/8919">Rate this talk!</a></h4>
    </div>

    <div class="resources row">
        <div class="col-md-12">
            <h2>Resources</h2>
        </div>

        <div class="col-md-6">
            <h5>MySQL</h5>
            <ul>
                <li><a href="http://codeascraft.com/2012/04/20/two-sides-for-salvation/">Master/Master Pairs</a></li>
                <li><a href="http://codeascraft.com/2013/01/11/schemanator-love-child-of-deployinator-and-schema-changes/">Making Schema Changes with Schemanator</a></li>
            </ul>
            <h5>PHP Optimization</h5>
            <ul>
                <li><a href="http://www.slideshare.net/jnklein/northeast-php-high-performance-php">My Talk From NEPHP 2012</a></li>
            </ul>
            <h5>Atomic Deploys</h5>
            <ul>
                <li><a href="http://codeascraft.com/2013/07/01/atomic-deploys-at-etsy/">Blog Post</a></li>
                <li><a href="https://github.com/etsy/mod_realdoc">mod_realdoc</a></li>
                <li><a href="https://github.com/etsy/incpath">incpath</a></li>
            </ul>
            <h5>Etsy Listings</h5>
            <ul>
                <li><a href="https://www.etsy.com/listing/61131989/santa-costume-holiday-cape-and-santa-hat">Santa Cape and Hat</a></li>
                <li><a href="https://www.etsy.com/listing/106740592/small-pet-santa-costume-pet-santa-suit">Small Pet Santa Costume</a></li>
                <li><a href="https://www.etsy.com/listing/152423714/santa-cat-dog-hat-costume-the-santa">Cat and Dog Costumes</a></li>
                <li><a href="https://www.etsy.com/listing/62242107/santa-paws-custom-christmas-dog-sweater">Santa Paws Dog Sweater</a></li>
            </ul>
        </div>
        <div class="col-md-6">
            <h5>Feature Flags</h5>
            <ul>
                <li><a href="http://code.flickr.net/2009/12/02/flipping-out/">General Approach</a></li>
                <li><a href="https://github.com/etsy/feature">Etsy GitHub Project</a></li>
            </ul>
            <h5>Framework Benchmarks</h5>
            <ul>
                <li><a href="http://systemsarchitect.net/performance-benchmark-of-popular-php-frameworks/">PHP Framework Comparison</a></li>
                <li><a href="http://www.techempower.com/benchmarks/">Comparison of Many Web Frameworks</a></li>
            </ul>
            <h5>Making Changes at Etsy</h5>
            <ul>
                <li><a href="http://codeascraft.com/2010/05/20/quantum-of-deployment/">Deployinator</a></li>
                <li><a href="http://codeascraft.com/2013/08/02/infrastructure-upgrades-with-chef/">Infrastructure Upgrades with Chef</a></li>
            </ul>
            <h5>Other Links</h5>
            <ul>
                <li><a href="http://codeascraft.com/2012/08/31/what-hardware-powers-etsy-com/">What Hardware Powers Etsy</a></li>
                <li><a href="https://www.etsy.com/blog/news/2012/demystifying-site-outages/">Demystifying Site Outages</a></li>
                <li><a href="https://github.com/etsy/mctop">mctop</a></li>
                <li><a href="http://html9responsiveboilerstrapjs.com/">HTML9 Responsive Boilerstrap JS</a></li>
            </ul>
        </div>
    </div>
</div>











<?php

include 'includes/footer.php';
