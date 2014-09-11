<?php

$title = "Boston Web Performance Meetup Group - Upgrading the Web: Driving Support for New Standards";
include 'includes/header.php';

$speakerdeck_link = 'https://speakerdeck.com/jklein/upgrading-the-web-boston-web-performance-meetup';
?>

<div class="container">
    <div style="text-align:center">
        <script async class="speakerdeck-embed" data-id="e9fb44e0ee7f01312be742839f79c6f5" data-ratio="1.77777777777778" src="//speakerdeck.com/assets/embed.js"></script>
        <div style="margin-bottom:5px">
            <strong>
                <a href="<?=$speakerdeck_link;?>" title="<?=$title;?>" target="_blank">
                    <?=$title;?>
                </a>
            </strong> from
            <strong><a href="https://speakerdeck.com/jklein" target="_blank">Jonathan Klein</a></strong><br />
        </div>
    </div>

    <div class="resources row">
        <div class="span12">
            <h2>Resources</h2>
        </div>

        <div class="span6">
            <h5>HTTP Origin/Hop Hints</h5>
            <ul>
                <li><a href="http://tools.ietf.org/html/draft-nottingham-http-browser-hints-05">Draft Spec</a></li>
            </ul>
            <h5>Client Hints</h5>
            <ul>
                <li><a href="https://github.com/igrigorik/http-client-hints/blob/master/draft-grigorik-http-client-hints-01.txt">Draft Spec</a></li>
                <li><a href="http://www.igvita.com/2013/08/29/automating-dpr-switching-with-client-hints/">Article About Implementation</a></li>
            </ul>
            <h5>WebP</h5>
            <ul>
                <li><a href="https://developers.google.com/speed/webp/">Google Documentation</a></li>
                <li><a href="http://www.jonathanklein.net/2013/02/a-comprehensive-guide-to-webp.html">Comprehensive Guide</a></li>
                <li><a href="http://people.mozilla.org/~josh/lossy_compressed_image_study_october_2013/">Latest Mozilla Study</a></li>
                <li><a href="http://www.webpagetest.org/result/131105_H0_13GQ/">WebPagetest Before</a></li>
                <li><a href="http://www.webpagetest.org/result/131105_SS_13K7/">WebPagetest After</a></li>
            </ul>
        </div>
        <div class="span6">
            <h5>SPDY/HTTP 2.0</h5>
            <ul>
                <li><a href="http://en.wikipedia.org/wiki/SPDY">About SPDY</a></li>
                <li><a href="http://tools.ietf.org/html/draft-ietf-httpbis-http2-12">HTTP 2.0 Draft Spec</a></li>
                <li><a href="http://tools.ietf.org/html/draft-ietf-httpbis-header-compression-07">HPACK</a></li>
                <li><a href="https://developers.google.com/speed/spdy/">Google Documentation</a></li>
                <li><a href="http://www.webpagetest.org/result/131105_SS_13K7/">WebPagetest Before</a></li>
                <li><a href="http://www.webpagetest.org/result/131105_B1_13QT/">WebPagetest After</a></li>
                <li><a href="https://istlsfastyet.com/">Is TLS Fast Yet?</a></li>
                <li><a href="http://chimera.labs.oreilly.com/books/1230000000545">High Performance Browser Networking</a></li>
            </ul>

            <h5>Prefetching</h5>
            <ul>
                <li><a href="http://www.stevesouders.com/blog/2013/11/07/prebrowsing/">Steve Souders on "Prebrowsing"</a></li>
                <li><a href="http://www.webpagetest.org/result/131105_8Z_14X3/">WebPagetest Before</a></li>
                <li><a href="http://www.webpagetest.org/result/131105_8V_15EW/">WebPagetest After</a></li>
            </ul>
        </div>
    </div>
</div>

<?php

include 'includes/footer.php';
