<!-- slider div for right-->
<div id="ssi-absolute">
    <ul class="contact-side">
        <?php if ("" != get_option('sc_social_slider_facebook')) { ?>
            <li class="ssi-facebook"><a target="_blank" href="<?php echo get_option('sc_social_slider_facebook') ?>"><img src="<?php echo SC_SOCIAL_SLIDER_PATH . 'images/facebook.png' ?>" /><span>Facebook</span></a></li><?php } ?>

        <?php if ("" != get_option('sc_social_slider_twitter')) { ?>
            <li class="ssi-twitter"><a target="_blank" href="<?php echo get_option('sc_social_slider_twitter') ?>"><img src="<?php echo SC_SOCIAL_SLIDER_PATH . 'images/twitter.png' ?>" /><span>Twitter</span></a></li><?php } ?>

        <?php if ("" != get_option('sc_social_slider_gplus')) { ?>
            <li class="ssi-gplus"><a target="_blank" href="<?php echo get_option('sc_social_slider_gplus') ?>"><img src="<?php echo SC_SOCIAL_SLIDER_PATH . 'images/gplus.png' ?>" /><span>Google Plus</span></a></li><?php } ?>

        <?php if ("" != get_option('sc_social_slider_instagram')) { ?>
            <li class="ssi-instagram"><a target="_blank" href="<?php echo get_option('sc_social_slider_instagram') ?>"><img src="<?php echo SC_SOCIAL_SLIDER_PATH . 'images/instagram.png' ?>" /><span>Instagram</span></a></li> <?php } ?>

        <?php if ("" != get_option('sc_social_slider_linkedin')) { ?>
            <li class="ssi-linkedin"><a target="_blank" href="<?php echo get_option('sc_social_slider_linkedin') ?>"><img src="<?php echo SC_SOCIAL_SLIDER_PATH . 'images/linkedin.png' ?>" /><span>LinkedIn</span></a></li> <?php } ?>

        <?php if ("" != get_option('sc_social_slider_pinterest')) { ?>
            <li class="ssi-pinterest"><a target="_blank" href="<?php echo get_option('sc_social_slider_pinterest') ?>"><img src="<?php echo SC_SOCIAL_SLIDER_PATH . 'images/pinterest.png' ?>" /><span>Pinterest</span></i></a></li><?php } ?>

        <?php if ("" != get_option('sc_social_slider_youtube')) { ?>
            <li class="ssi-youtube"><a target="_blank" href="<?php echo get_option('sc_social_slider_youtube') ?>"><img src="<?php echo SC_SOCIAL_SLIDER_PATH . 'images/youtube.png' ?>" /><span>YouTube</span></a></li><?php } ?>

        <?php if ("" != get_option('sc_social_slider_shortcode')) { ?>
            <li class="ssi-envelope"><a id="ssi-contact"><img src="<?php echo SC_SOCIAL_SLIDER_PATH . 'images/envelope.png' ?>" /><span>Contact Us</span></a></li><?php } else if ("" != get_option('sc_social_slider_email')) { ?>
            <li class="ssi-envelope"><a href="<?php echo 'mailto:' . get_option('sc_social_slider_email') ?>"><img src="<?php echo SC_SOCIAL_SLIDER_PATH . 'images/envelope.png' ?>" /><span>Email</span></a></li><?php } ?>

        <?php if ("" != get_option('sc_social_slider_phone')) { ?>
            <li class="ssi-phone"><a href="callto:<?php echo get_option('sc_social_slider_phone') ?>"><img src="<?php echo SC_SOCIAL_SLIDER_PATH . 'images/phone.png' ?>" /><span>Call</span></a></li><?php } ?>

        <?php if ("" != get_option('sc_social_slider_skype')) { ?>
            <li class="ssi-skype"><a href="skype:<?php echo get_option('sc_social_slider_skype') ?>?call"><img src="<?php echo SC_SOCIAL_SLIDER_PATH . 'images/skype.png' ?>" /><span>Call</span></a></li><?php } ?>

        <?php if ("" != get_option('sc_social_slider_foursquare')) { ?>
            <li class="ssi-foursquare"><a target="_blank" href="<?php echo get_option('sc_social_slider_foursquare') ?>"><img src="<?php echo SC_SOCIAL_SLIDER_PATH . 'images/foursquare.png' ?>" /><span>Foursquare</span></a></li><?php } ?>

        <?php if ("" != get_option('sc_social_slider_github')) { ?>
            <li class="ssi-github"><a target="_blank" href="<?php echo get_option('sc_social_slider_github') ?>"><img src="<?php echo SC_SOCIAL_SLIDER_PATH . 'images/github.png' ?>" /><span>GitHub</span></a></li><?php } ?>

        <?php if ("" != get_option('sc_social_slider_tumblr')) { ?>
            <li class="ssi-tumblr"><a target="_blank" href="<?php echo get_option('sc_social_slider_tumblr') ?>"><img src="<?php echo SC_SOCIAL_SLIDER_PATH . 'images/tumblr.png' ?>" /><span>Tumblr</span></a></li><?php } ?>

        <?php if ("" != get_option('sc_social_slider_store')) { ?>
            <li class="ssi-store"><a target="_blank" href="<?php echo get_option('sc_social_slider_store') ?>"><img src="<?php echo SC_SOCIAL_SLIDER_PATH . 'images/cart.png' ?>" /><span>Store</span></a></li><?php } ?>
    </ul>
</div>
<div id="ssi-dim"></div>
<div id="ssi-contact-form">
    <h1 class="ssi-top-bar">Contact Us <span id="ssi-close-x"><img src="<?php echo SC_SOCIAL_SLIDER_PATH . 'images/close-x.png' ?>" /></span></h1>
    <div class="ssi-contact-content">
        <?php echo do_shortcode(get_option('sc_social_slider_facebook')); ?>
    </div>
</div>
<script language="JavaScript">

    jQuery('.contact-side li').hover(function() {
        jQuery(this).stop().animate({
            'right': '0px'
        }, 500)
    }, function() {
        jQuery(this).stop().animate({
            'right': '-160px'
        }, 400)
    });

</script>