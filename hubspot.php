<?php

$title = "HubSpot Tech Talk - DIY Synthetic: Private WebPagetest Magic";
include 'includes/header.php';

$speakerdeck_link = 'https://speakerdeck.com/jklein/hubspot-tech-talk-diy-synthetic';
?>

<div class="container">
    <div style="text-align:center">
        <script async class="speakerdeck-embed" data-id="7b94469044a70131af4b628e140beceb" data-ratio="1.74446337308348" src="//speakerdeck.com/assets/embed.js"></script>
        <div style="margin-bottom:5px">
            <strong>
                <a href="<?=$speakerdeck_link;?>" title="<?=$title;?>" target="_blank">
                    <?=$title;?>
                </a>
            </strong> from
            <strong><a href="https://speakerdeck.com/jklein" target="_blank">Jonathan Klein</a></strong>
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
                <li><a href="https://sites.google.com/a/webpagetest.org/docs/">Docs</a></li>
                <li><a href="https://sites.google.com/a/webpagetest.org/docs/using-webpagetest/metrics">Metrics Monitored</a></li>
                <li><a href="http://www.webpagetest.org/forums/">Forums</a></li>
                <li><a href="https://sites.google.com/a/webpagetest.org/docs/private-instances#TOC-EC2-Test-Agents">EC2 Test Agents</a></li>
                <li><a href="https://sites.google.com/a/webpagetest.org/docs/system-design/webpagetest-relay">WebPagetest Relay</a></li>
            </ul>
            <h5>Vagrant</h5>
            <ul>
                <li><a href="http://vagrantup.com">Vagrant Website</a></li>
                <li><a href="https://gist.github.com/jklein/6992296">WebPagetest Vagrant File</a></li>
            </ul>
        </div>
        <div class="col-md-6">
            <h5>Tracking Performance</h5>
            <ul>
                <li><a href="http://velocityconf.com/velocityny2013/public/schedule/detail/31342">Tracking Performance</a>
                    (<a href="http://www.slideshare.net/patrickmeenan/tracking-performance-velocity-2013">Slides</a>,
                    <a href="http://www.youtube.com/watch?v=BAWpwmln6y4">Video Part 1</a>,
                    <a href="http://www.youtube.com/watch?v=lB_MXKGCizM">Video Part 2</a>)
                </li>
                <li><a href="http://www.slideshare.net/jfox85/velocity-2013-rum-vs-synthetic">RUM vs. Synthetic</a></li>
            </ul>
            <h5>Etsy Tools</h5>
            <ul>
                <li><a href="https://github.com/etsy/wpt-script">wpt-script</a></li>
                <li><a href="https://github.com/etsy/statsd">StatsD</a></li>
                <li><a href="https://github.com/etsy/dashboard">Etsy Dashboards</a></li>
            </ul>
            <h5>Other Tools</h5>
            <ul>
                <li><a href="https://github.com/marcelduran/webpagetest-api">webpagetest-api</a></li>
                <li><a href="http://www.catchpoint.com/">Catchpoint</a></li>
            </ul>
        </div>
    </div>
</div>

<?php

include 'includes/footer.php';
