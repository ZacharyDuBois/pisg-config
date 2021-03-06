<!DOCTYPE html>

<!--
  ~  I like pew pew
  ~  (づ｡◕‿‿◕｡)づ・。。✧・゜゜・。✧。・゜゜・✧。・゜゜・。。・゜✧✿
  ~  Some layout features taken from Night Uploader
  ~  https://we.destroy.tokyo/pisg-config
  -->

<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>Index (ﾉ◕ヮ◕)ﾉ*:･ ﾟ✧</title>
  <link rel="stylesheet" href="https://i.destroy.tokyo/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://i.destroy.tokyo/assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://i.destroy.tokyo/assets/night/css/night.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<!-- Nav -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navCollapseTop">
        <span class="sr-only">Toggle navigation</span> <i class="fa fa-angle-double-down"></i> <i class="fa fa-list"></i>
      </button>
      <a class="navbar-brand" href="/" title="Index"><i class="fa fa-hdd-o"></i> IRC Stats</a>
    </div>

    <div class="collapse navbar-collapse" id="navCollapseTop">
      <!-- Nav Content -->
      <ul class="nav navbar-nav">
        <li class="active"><a href="/" title="Index"><i class="fa fa-home"></i> Index</a></li>
      </ul>
      <!-- /Nav Content -->
    </div>
  </div>
</nav>
<!-- /Nav -->

<!-- Body Content -->
<div class="container-fluid">
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <h1 class="page-header">IRC Stats Index (ﾉ◕ヮ◕)ﾉ*:･ ﾟ✧</h1>

      <p>This index contains links to different channel stats for IRC.</p>
      <p>If you have other nicks that are being tracked seperatly or want to be removed from these stats, please open an issue on it's <a href="https://we.destroy.tokyo/pisg-config">GitHub</a>.
      <p>If you would like to help on with server costs, throw me some BTC: <code>1NYzSE8xmorvrJJjt9a5riYf5jkKqSCGD3</code>.
      <p>Guest nicks on Freenode (<code>Guest*</code>) will not be tracked.</p>

    </div>
  </div>
  <div class="row">
    <div class="col-md-5 col-md-offset-2">
      <h1 class="page-header"><i class="fa fa-file"></i> Index</h1>

      <p>Below is a listing of channels in alphabetical order.</p>

      <?php
      $i=0;
      foreach(glob('/srv/http/ircstats/public/pages/*.html') as $page) {
        $l=explode('/', $page);
        $l=$l[6];
        $i++;
      ?>
      <li><a href="/pages/<?php echo $l; ?>"><i class="fa fa-file-code-o"></i> <?php echo $l; ?></a></li>
      <?php } ?>
      <!-- Files -->
    </div>
    <div class="col-md-3">
      <h2 class="page-header"><i class="fa fa-info-circle"></i> Info</h2>

      <p><code><?php echo $i; ?></code> channels logged.</p>
      <p>Stats generated every <code>15 minutes</code>.</p>
      <!-- Random stuff here -->
    </div>
  </div>
  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <h3>Why are you down here?</h3>

      <p>This page is tracked for statistical purposes.</p>
      <p>&copy; Copyright Zachary DuBois, 2015-2018. All Rights Reserved. Some items have different copyrights. Please contact me via IRC for information.</p>
    </div>
  </div>
</div>
<!-- /Body Content -->
<!-- Piwik -->
<script type="text/javascript">
  var _paq = _paq || [];
  _paq.push(['trackPageView']);
  _paq.push(['enableLinkTracking']);
  (function() {
    var u="//tracking.zacharydubois.moe/";
    _paq.push(['setTrackerUrl', u+'piwik.php']);
    _paq.push(['setSiteId', 2]);
    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
    g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
  })();
</script>
<noscript><p><img src="//tracking.zacharydubois.moe/piwik.php?idsite=2" style="border:0;" alt="" /></p></noscript>
<!-- End Piwik Code -->
</body>
<script src="https://i.destroy.tokyo/assets/jquery/js/jquery-2.1.1.min.js"></script>
<script src="https://i.destroy.tokyo/assets/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript">

</script>
</html>
