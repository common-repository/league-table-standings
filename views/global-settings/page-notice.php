<style>
    #ltswp-notice-support-view{
        margin-top: 10px;
        padding: 10px 10px 10px 10px;
        border-color: rgba(0, 0, 0, 0.22);
        border-width: 1px;
        border-style: solid;
        border-radius: 2px;
        margin-left: 10px;
    }
    .ltswp-support-click-common {
        display: inline;
        position: relative;
    }





</style>
<script>
    jQuery(document).ready(function(){
        jQuery( '#ltswp-notice-support-close' ).click( function (event) {
            jQuery("#ltswp-notice-support-view").hide();

            var data = {
                action:'ltswp_set_support_time'
            };

            jQuery.post(ajax_object.ajax_url, data, function(respond) {

            });
            return false;
        } );

        jQuery( '#ltswp-notice-support-click' ).click( function (event) {

                if(document.getElementById('ltswp_author_linking'))        document.getElementById('ltswp_author_linking').checked = true;

                var data = {
                    action:'ltswp_set_support_link'
                };

                jQuery.post(ajax_object.ajax_url, data, function(respond) {
                    jQuery("#ltswp_support_title_1").hide();
                    jQuery("#ltswp_support_title_2").show();
                    jQuery("#ltswp_support_title_3").hide();
                });

        } );

    });

</script>

<div class="updated" id="ltswp-notice-save-view" style="display: none; margin-left: 10px;">
<p>Save Settings Successfully.</p>
</div>

<div class="updated" id="ltswp-notice-support-view" style="<?php

    if(ltswp_Main::$settings['ltswp_author_linking'] == '0'){

        //if((time() - ltswp_Main::$settings['ltswp_initial_dt']) >= 24 * 60 * 60){
        if((time() - ltswp_Main::$settings['ltswp_initial_dt']) >= 1){

        }
        else{
            echo 'display: none;';
        }
    }
    else {
        echo 'display: none;';
    }

?>">

    <div class="ltswp-support-click-title ltswp-support-click-common" id="ltswp_support_title_1">Thank you for using
        <a href="<?php  $url = admin_url();
        echo $url . 'options-general.php?page=league-table-standings-plugin-menu';?>">League Table Standings</a>,  if you enjoy our plugin 
        <a href="#" id="ltswp-notice-support-click"> please activate the author link credit by clicking here.</a>

    </div>
    <div class="ltswp-support-click-title ltswp-support-click-common" id="ltswp_support_title_2" style="display: none;">Thank you for supporting our plugin.</div>
    <div style="float: right;" id="ltswp_support_title_3">
        <small><a href="#" id="ltswp-notice-support-close"> Hide this Message</a> </small>
    </div>

</div>