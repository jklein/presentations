<?php

$title = "Northeast PHP 2014 - Composer: From Beginner to Expert";
include 'includes/header.php';

$speakerdeck_link = 'https://speakerdeck.com/jklein/composer-from-beginner-to-expert';
?>

<div class="container">
    <div style="text-align:center">
        <script async class="speakerdeck-embed" data-id="a08a7c9018bc013204767e04cf6bc9f6" data-ratio="1.77777777777778" src="//speakerdeck.com/assets/embed.js"></script>
        <div style="margin-bottom:5px">
            <strong>
                <a href="<?=$speakerdeck_link;?>" title="<?=$title?>" target="_blank">
                    <?=$title;?>
                </a>
            </strong> from
            <strong><a href="https://speakerdeck.com/jklein" target="_blank">Jonathan Klein</a></strong><br />
        </div>
        <h2><a href="http://joind.in/talk/view/11464">Rate this talk!</a></h2>
    </div>

    <div class="resources row">
        <div class="span12">
            <h2>Resources</h2>
        </div>

        <div class="span6">
            <h5>Composer</h5>
            <ul>
                <li><a href="https://getcomposer.org/">Homepage</a></li>
                <li><a href="https://getcomposer.org/doc/00-intro.md#installation-nix">Installation</a></li>
                <li><a href="https://getcomposer.org/doc/03-cli.md">List of Commands</a></li>
                <li><a href="https://getcomposer.org/doc/articles/scripts.md">Scripts</a></li>
                <li><a href="https://getcomposer.org/doc/articles/handling-private-packages-with-satis.md">Private Packages with Satis</a></li>
            </ul>
        </div>
        <div class="span6">
            <h5>Other Helpful Links</h5>
            <ul>
                <li><a href="http://semver.org/">Semver</a></li>
                <li><a href="https://packagist.org/">Packagist</a></li>
                <li><a href="https://packagist.org/explore/popular">Popular Packages on Packagist</a></li>
                <li><a href="http://www.php-fig.org/">PHP-FIG</a></li>
                <li><a href="http://www.php-fig.org/psr/psr-4/">PSR-4</a></li>
            </ul>
        </div>
    </div>
</div>

<?php

include 'includes/footer.php';
