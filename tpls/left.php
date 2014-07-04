<!-- slider div for left-->

<div id="ssi-absolute">
    <ul class="contact-side">
        <?php if ("" != get_option('sc_social_slider_facebook')) { ?>
            <li class="ssi-facebook"><a target="_blank" href="<?php echo get_option('sc_social_slider_facebook') ?>"><span>Facebook</span> <img src="<?php echo SC_SOCIAL_SLIDER_PATH . 'images/facebook.png' ?>" /></a></li><?php } ?>

        <?php if ("" != get_option('sc_social_slider_twitter')) { ?>
            <li class="ssi-twitter"><a target="_blank" href="<?php echo get_option('sc_social_slider_twitter') ?>"><span>Twitter</span> <img src="<?php echo SC_SOCIAL_SLIDER_PATH . 'images/twitter.png' ?>" /></a></li><?php } ?>

        <?php if ("" != get_option('sc_social_slider_gplus')) { ?>
            <li class="ssi-gplus"><a target="_blank" href="<?php echo get_option('sc_social_slider_gplus') ?>"><span>Google Plus</span> <img src="<?php echo SC_SOCIAL_SLIDER_PATH . 'images/gplus.png' ?>" /></a></li><?php } ?>

        <?php if ("" != get_option('sc_social_slider_instagram')) { ?>
            <li class="ssi-instagram"><a target="_blank" href="<?php echo get_option('sc_social_slider_instagram') ?>"><span>Instagram</span> <img src="<?php echo SC_SOCIAL_SLIDER_PATH . 'images/instagram.png' ?>" /></a></li> <?php } ?>

        <?php if ("" != get_option('sc_social_slider_linkedin')) { ?>
            <li class="ssi-linkedin"><a target="_blank" href="<?php echo get_option('sc_social_slider_linkedin') ?>"><span>LinkedIn</span> <img src="<?php echo SC_SOCIAL_SLIDER_PATH . 'images/linkedin.png' ?>" /></a></li> <?php } ?>

        <?php if ("" != get_option('sc_social_slider_pinterest')) { ?>
            <li class="ssi-pinterest"><a target="_blank" href="<?php echo get_option('sc_social_slider_pinterest') ?>"><span>Pinterest</span> <img src="<?php echo SC_SOCIAL_SLIDER_PATH . 'images/pinterest.png' ?>" /></i></a></li><?php } ?>

        <?php if ("" != get_option('sc_social_slider_youtube')) { ?>
            <li class="ssi-youtube"><a target="_blank" href="<?php echo get_option('sc_social_slider_youtube') ?>"><span>YouTube</span> <img src="<?php echo SC_SOCIAL_SLIDER_PATH . 'images/youtube.png' ?>" /></a></li><?php } ?>

        <?php if ("" != get_option('sc_social_slider_shortcode')) { ?>
            <li class="ssi-envelope"><a id="ssi-contact"><span>Contact Us</span> <img src="<?php echo SC_SOCIAL_SLIDER_PATH . 'images/envelope.png' ?>" /></a></li><?php } else if ("" != get_option('sc_social_slider_email')) { ?>
            <li class="ssi-envelope"><a href="<?php echo 'mailto:' . get_option('sc_social_slider_email') ?>"><span>Email</span> <img src="<?php echo SC_SOCIAL_SLIDER_PATH . 'images/envelope.png' ?>" /></a></li><?php } ?>

        <?php if ("" != get_option('sc_social_slider_phone')) { ?>
            <li class="ssi-phone"><a href="callto:<?php echo get_option('sc_social_slider_phone') ?>"><span>Call</span> <img src="<?php echo SC_SOCIAL_SLIDER_PATH . 'images/phone.png' ?>" /></a></li><?php } ?>

        <?php if ("" != get_option('sc_social_slider_skype')) { ?>
            <li class="ssi-skype"><a href="skype:<?php echo get_option('sc_social_slider_skype') ?>?call"><span>Call</span> <img src="<?php echo SC_SOCIAL_SLIDER_PATH . 'images/skype.png' ?>" /></a></li><?php } ?>

        <?php if ("" != get_option('sc_social_slider_foursquare')) { ?>
            <li class="ssi-foursquare"><a target="_blank" href="<?php echo get_option('sc_social_slider_foursquare') ?>"><span>Foursquare</span> <img src="<?php echo SC_SOCIAL_SLIDER_PATH . 'images/foursquare.png' ?>" /></a></li><?php } ?>

        <?php if ("" != get_option('sc_social_slider_github')) { ?>
            <li class="ssi-github"><a target="_blank" href="<?php echo get_option('sc_social_slider_github') ?>"><span>GitHub</span> <img src="<?php echo SC_SOCIAL_SLIDER_PATH . 'images/github.png' ?>" /></a></li><?php } ?>

        <?php if ("" != get_option('sc_social_slider_tumblr')) { ?>
            <li class="ssi-tumblr"><a target="_blank" href="<?php echo get_option('sc_social_slider_tumblr') ?>"><span>Tumblr</span> <img src="<?php echo SC_SOCIAL_SLIDER_PATH . 'images/tumblr.png' ?>" /></a></li><?php } ?>

        <?php if ("" != get_option('sc_social_slider_store')) { ?>
            <li class="ssi-store"><a target="_blank" href="<?php echo get_option('sc_social_slider_store') ?>"><span>Store</span> <img src="<?php echo SC_SOCIAL_SLIDER_PATH . 'images/cart.png' ?>" /></a></li><?php } ?>
    </ul>
</div>
<div id="ssi-dim"></div>
<div id="ssi-contact-form">
    <h1 class="ssi-top-bar">
        <span id="ssi-close-x"><img src="<?php echo SC_SOCIAL_SLIDER_PATH . 'images/close-x.png' ?>" /></span>
        Contact Us
    </h1>
    <div class="ssi-contact-content">
        <?php echo do_shortcode(get_option('sc_social_slider_facebook')); ?>
    </div>
</div>
<script language="JavaScript">

    jQuery('.contact-side li').hover(function() {
        jQuery(this).stop().animate({
            'left': '0px'
        }, 500)
    }, function() {
        jQuery(this).stop().animate({
            'left': '-140px'
        }, 400)
    });

</script>
