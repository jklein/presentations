<?php

$title = "SunshinePHP - Profiling PHP with XHProf";
include 'includes/header.php';

$left_links = array(
    'Why Speed Matters' => array(
        'http://www.phpied.com/the-performance-business-pitch/' => 'Web Performance Business Pitch',
        'http://torbit.com/blog/2012/09/19/some-interesting-performance-statistics/' => 'Bounce Rate vs. Performance',
        'http://www.stevesouders.com/blog/2012/02/10/the-performance-golden-rule/' => 'The Performance Golden Rule',
        'http://www.nngroup.com/articles/response-times-3-important-limits/' => 'Response Time Limits',
    ),
    'XHProf / XHGui' => array(
        'http://techportal.inviqa.com/2013/10/01/profiling-php-applications-with-xhgui/' => 'Installation and Usage',
        'http://pecl.php.net/package/xhprof' => 'XHProf PECL Package',
        'https://github.com/facebook/xhprof' => 'XHProf on GitHub',
        'https://github.com/perftools/xhgui' => 'XHGui on GitHub',
        'http://xhprof.jkle.in/' => 'Live Example',
    ),
);

$right_links = array(
    'Vagrant' => array(
        'https://www.virtualbox.org/' => 'VirtualBox (required for Vagrant)',
        'http://vagrantup.com' => 'Vagrant',
        'https://gist.github.com/jklein/8654137' => 'XHGui VagrantFile',
    ),
    'Other Links' => array(
        'http://web-performance.meetup.com/' => 'Web Performance Meetups',
        'http://www.etsy.com/careers' => 'Etsy Careers',
        'http://www.jonathanklein.net' => 'My Blog',
    ),
);

$speakerdeck_url = '';
?>

<div class="container">
    <div style="text-align:center">
        <!-- Speaker deck talk here -->
        <div style="margin-bottom:5px">
            <strong>
                <a href="<?=$speakerdeck_url;?>" title="<?=$title;?>" target="_blank">
                    <?=$title;?>
                </a>
            </strong> from
            <strong><a href="https://speakerdeck.com/jklein" target="_blank">Jonathan Klein</a></strong>
        </div>
    </div>

    <div class="resources row">
        <div class="span12">
            <h2>Resources</h2>
        </div>

        <div class="span6">
            <?=build_link_html($left_links);?>
        </div>
        <div class="span6">
            <?=build_link_html($right_links);?>
        </div>
    </div>
</div>

<?php

include 'includes/footer.php';
