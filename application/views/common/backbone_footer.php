<script type="text/javascript" src="<?php echo base_url() ?>js/sparsh/site.js?<?php echo CURRENT_VERSION; ?>"></script>
<script type="text/javascript" >
    $(function () {
       site.run();
        Backbone.history.start();
    });
    var width = parseFloat($(window).width());
    if (width < 1400) {
        $('body').addClass('sidebar-collapse');

        // Close side bar when Display width is less then 1400.
        $('a.close_sidebar').click(function () {
            if ($('body').hasClass('sidebar-open') || !$('body').hasClass('sidebar-collapse')) {
                $($.AdminLTE.options.sidebarToggleSelector).click();
            }
        });
    }
</script>