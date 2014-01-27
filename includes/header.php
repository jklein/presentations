<?php

function build_link_html($link_array) {
    $html = '';

    foreach ($link_array as $header => $links) {
        $html .= '<h5>' . $header . '</h5>';
        $html .= '<ul>';

        foreach ($links as $url => $title) {
            $html .= '<li><a href="' . $url . '">' . $title . '</a></li>';
        }
        $html .= '</ul>';
    }

    return $html;
}


?><!DOCTYPE html>
<html lang="en">
<head>
    <title><?=$title?></title>
    <link rel="stylesheet" type="text/css" href="/presentations/assets/css/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="/presentations/assets/css/presentations.css" />
</head>
<body>
    <script type="text/javascript">
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-40821033-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    </script>

    <div class="navbar navbar-static-top">
      <div class="navbar-inner">
        <span class="title">Jonathan Klein - <?=$title?></a>
      </div>
    </div>