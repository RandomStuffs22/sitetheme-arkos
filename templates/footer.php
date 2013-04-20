<footer class="content-info" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
    <p>&copy; <?php echo date('Y'); ?> <a href="https://citizenweb.is"><img src="/img/logo-tps-20.png" style="display: inline;"></a>. Raspberry Pi is a trademark of the <a href="http://www.raspberrypi.org/">Raspberry Pi Foundation.</a></p>
  </div>
</footer>

<!-- Piwik -->
<script type="text/javascript">
var pkBaseURL = (("https:" == document.location.protocol) ? "https://files.citizenweb.is/alg/" : "http://files.citizenweb.is/alg/");
document.write(unescape("%3Cscript src='" + pkBaseURL + "piwik.js' type='text/javascript'%3E%3C/script%3E"));
</script><script type="text/javascript">
try {
var piwikTracker = Piwik.getTracker(pkBaseURL + "piwik.php", 2);
piwikTracker.trackPageView();
piwikTracker.enableLinkTracking();
} catch( err ) {}
</script><noscript><p><img src="http://files.citizenweb.is/alg/piwik.php?idsite=2" style="border:0" alt="" /></p></noscript>
<!-- End Piwik Tracking Code -->

<?php wp_footer(); ?>
