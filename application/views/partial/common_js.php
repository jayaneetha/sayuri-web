<!-- PACE LOADER - turn this on if you want ajax loading to show (caution: uses lots of memory on iDevices)-->
<script data-pace-options='{ "restartOnRequestAfter": true }' src="<?php echo base_url('assests/') ?>/js/plugin/pace/pace.min.js"></script>

<!-- Link to Google CDN's jQuery + jQueryUI; fall back to local -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script>
    if (!window.jQuery) {
        document.write('<script src="<?php echo base_url('assests/') ?>/js/libs/jquery-2.0.2.min.js"><\/script>');
    }
</script>

<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
<script>
    if (!window.jQuery.ui) {
        document.write('<script src="<?php echo base_url('assests/') ?>/js/libs/jquery-ui-1.10.3.min.js"><\/script>');
    }
</script>

<!-- JS TOUCH : include this plugin for mobile drag / drop touch events
		<script src="js/plugin/jquery-touch/jquery.ui.touch-punch.min.js"></script> -->

<!-- BOOTSTRAP JS -->
<script src="<?php echo base_url('assests/') ?>/js/bootstrap/bootstrap.min.js"></script>

<!-- CUSTOM NOTIFICATION -->
<script src="<?php echo base_url('assests/') ?>/js/notification/SmartNotification.js"></script>

<!-- JARVIS WIDGETS -->
<script src="<?php echo base_url('assests/') ?>/js/smartwidgets/jarvis.widget.min.js"></script>

<!-- EASY PIE CHARTS -->
<script src="<?php echo base_url('assests/') ?>/js/plugin/easy-pie-chart/jquery.easy-pie-chart.min.js"></script>

<!-- SPARKLINES -->
<script src="<?php echo base_url('assests/') ?>/js/plugin/sparkline/jquery.sparkline.min.js"></script>

<!-- JQUERY VALIDATE -->
<script src="<?php echo base_url('assests/') ?>/js/plugin/jquery-validate/jquery.validate.min.js"></script>

<!-- JQUERY MASKED INPUT -->
<script src="<?php echo base_url('assests/') ?>/js/plugin/masked-input/jquery.maskedinput.min.js"></script>

<!-- JQUERY SELECT2 INPUT -->
<script src="<?php echo base_url('assests/') ?>/js/plugin/select2/select2.min.js"></script>

<!-- JQUERY UI + Bootstrap Slider -->
<script src="<?php echo base_url('assests/') ?>/js/plugin/bootstrap-slider/bootstrap-slider.min.js"></script>

<!-- browser msie issue fix -->
<script src="<?php echo base_url('assests/') ?>/js/plugin/msie-fix/jquery.mb.browser.min.js"></script>

<!-- FastClick: For mobile devices -->
<script src="<?php echo base_url('assests/') ?>/js/plugin/fastclick/fastclick.js"></script>

<!-- Toastr: Notification -->
<script src="<?php echo base_url('assests/') ?>/js/plugin/toastr/toastr.min.js"></script>

<!--[if IE 7]>

<h1>Your browser is out of date, please update your browser by going to www.microsoft.com/download</h1>

<![endif]-->

<!-- MAIN APP JS FILE -->
<script src="<?php echo base_url('assests/') ?>/js/app.js"></script>

<!--COMMON_JS FILE -->
<script src="<?php echo base_url('assests/') ?>/js/common_js.js"></script>

