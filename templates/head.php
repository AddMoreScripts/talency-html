<?php
require_once __DIR__ . './../inc/helpers.php';
$isPromoForm = false;
$formClassName = '';
?>

<meta charset="UTF-8" />
<link rel="icon" type="image/png" href="/img/ui/favicon.png" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:wght@300;400;700&family=Manrope:wght@400;500;700;800&display=swap" rel="stylesheet">

<script src="/js/custom/jquery-3.6.4.min.js"></script>
<?= vite('js/main.js') ?>


<!-- Google Tag Manager -->
<script>
  (function(w, d, s, l, i) {
    w[l] = w[l] || [];
    w[l].push({
      'gtm.start': new Date().getTime(),
      event: 'gtm.js'
    });
    var f = d.getElementsByTagName(s)[0],
      j = d.createElement(s),
      dl = l != 'dataLayer' ? '&l=' + l : '';
    j.async = true;
    j.src =
      'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
    f.parentNode.insertBefore(j, f);
  })(window, document, 'script', 'dataLayer', 'GTM-WKZSGDV');
</script>
<!-- End Google Tag Manager -->


<script src="https://app.getreview.io/tags/mugUGuLoIpZqq1qD/sdk.js" async></script>

<!-- Pixel -->
<script type="text/javascript">
  (function(d, w) {
    var n = d.getElementsByTagName("script")[0],
      s = d.createElement("script");
    s.type = "text/javascript";
    s.async = true;
    s.src = "https://qoopler.ru/index.php?ref=" + d.referrer + "&page=" + encodeURIComponent(w.location.href);
    n.parentNode.insertBefore(s, n);
  })(document, window);
</script>
<!-- /Pixel -->
