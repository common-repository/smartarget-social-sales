<style>
    #wpcontent
    {
        padding-left: 0 !important;
    }

    #wpbody-content
    {
        padding-bottom: 0 !important;
    }

    #wpbody
    {
	    background: #fff;
	    padding-top: 10px;
    }
</style>

<?php
$site = preg_replace("/www\.|https?:\/\/|\/$|\/?\?.+|\/.+|^\./", '', get_home_url());
$hash = sha1("wordpress_social_proof_sales_" . $site);
?>

<script>
	window.previewPlatform = "wordpress";
	window.previewAppName = "social_proof_sales";
	window.previewToken = "<?php echo esc_attr($hash)?>";
	window.previewWebsiteURL = "<?php echo esc_attr($site)?>";
</script>

<app-root></app-root>
