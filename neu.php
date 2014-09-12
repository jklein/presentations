<?php

$title = "Northeastern Tech Talk - Web Performance 101";
include 'includes/header.php';
?>

<div class="container">
    <div style="text-align:center">
        <script async class="speakerdeck-embed" data-id="c65b9630d9170131a77866c3ed3c974d" data-ratio="1.77777777777778" src="//speakerdeck.com/assets/embed.js"></script>
        <div style="margin-bottom:5px">
            <strong>
                <a href="#"
                    title="<?=$title;?>" target="_blank">
                    <?=$title;?>
                </a>
            </strong> from
            <strong><a href="https://speakerdeck.com/jklein" target="_blank">Jonathan Klein</a></strong><br />
        </div>
    </div>

    <div class="resources row">
        <div class="col-md-12">
            <h2>Resources</h2>
        </div>

        <div class="col-md-6">
            <h5>WebPagetest</h5>
            <ul>
                <li><a href="http://www.webpagetest.org/">Public Instance</a></li>
                <li><a href="https://github.com/WPO-Foundation/webpagetest">GitHub</a></li>
                <li><a href="http://www.webpagetest.org/forums/">Forums</a></li>
            </ul>
            <h5>Server Configuration Changes</h5>
            <ul>
                <li><a href="http://httpd.apache.org/docs/2.2/mod/mod_deflate.html">Turning on gzip in Apache</a></li>
                <li><a href="http://www.feedthebot.com/pagespeed/keep-alive.html">Enabling KeepAlive</a></li>
                <li><a href="http://www.askapache.com/htaccess/apache-speed-cache-control.html">Turning on Caching Headers in Apache</a></li>
                <li><a href="http://www.mobify.com/blog/beginners-guide-to-http-cache-headers/">Beginners Guide to Caching Headers</a></li>
            </ul>
        </div>
        <div class="col-md-6">
            <h5>Other Tools</h5>
            <ul>
                <li><a href="http://www.smushit.com/ysmush.it/">Smush.it</a></li>
                <li><a href="https://github.com/mikebrittain/Wesley">Wesley (command line image optimization)</a></li>
                <li><a href="http://cssminifier.com/">cssminifier.com</a></li>
                <li><a href="https://github.com/mishoo/UglifyJS2">UglifyJS</a></li>
            </ul>
            <h5>Misc</h5>
            <ul>
                <li><a href="http://www.phpied.com/the-performance-business-pitch/">Performance Business Pitch</a></li>
                <li><a href="http://httparchive.org/">HTTPArchive</a></li>
                <li><a href="http://chimera.labs.oreilly.com/books/1230000000545">High Performance Browser Networking</a></li>
            </ul>
        </div>
    </div>
</div>

<?php

include 'includes/footer.php';
