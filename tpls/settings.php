<?php include_once 'setting.php'; ?>
<form action="" method="post" id="wptb">
    <input type="hidden" name="action" value="wpbs_save_settings">
    <div class="left width70">
        <table class="widefat">
            <thead>
                <tr>
                    <th colspan="2">General Settings</th>
                </tr>
            </thead>
            <tbody>
            <tr>
                <td>Show / Hide Widget</td>
                <td>
                    <select class="ps" rel="box1" name="sc_social_slider_switch">
                        <option
                            value="1" <?php if ("1" == get_option('sc_social_slider_switch')) echo 'selected="selected"'; ?>>
                            Show
                        </option>
                        <option
                            value="0" <?php if ("0" == get_option('sc_social_slider_switch')) echo 'selected="selected"'; ?>>
                            Hide
                        </option>
                    </select>
                </td>
            </tr>
                <tr>
                    <td>Widget Location</td>
                    <td>
                        <select class="ps" rel="box1" name="sc_social_slider_position">
                            <option
                                value="left" <?php if ("left" == get_option('sc_social_slider_position')) echo 'selected="selected"'; ?>>
                                left
                            </option>
                            <option
                                value="right" <?php if ("right" == get_option('sc_social_slider_position')) echo 'selected="selected"'; ?>>
                                right
                            </option>
                        </select>
                    </td>
                </tr>
            <tr>
                <td>Widget Position</td>
                <td>
<!--                    <label-->
<!--                        id="spos_box1">--><?php //if ("left" == get_option('sc_social_slider_position') || "right" == get_option('sc_social_slider_position')) echo "Top"; else echo "Left"; ?><!--</label><br>-->
                    <input type="text" name="sc_social_slider_margin"
                           value="<?php echo get_option('sc_social_slider_margin'); ?>" size="10" class="width25"/>px
                </td>
            </tr>
            </tbody>
        </table>

        <table class="widefat">
            <thead>
                <th colspan="2">Appearance</th>
            </thead>
            <tbody>
                <tr>
                    <td>Background Color</td>
                    <td>
                        <input type="text" id="bg_colorbox" name="sc_social_slider_background"
                               value="<?php echo get_option('sc_social_slider_background'); ?>" size="10" class="width25"/>
                    </td>
                </tr>
                <tr>
                    <td>Text Color</td>
                    <td>
                        <input type="text" id="text_colorbox" name="sc_social_slider_color"
                               value="<?php echo get_option('sc_social_slider_color'); ?>" size="10" class="width25"/>
                    </td>
                </tr>
            </tbody>

        </table>


        <table class="widefat">
            <thead>
                <th colspan="2">
                    Social Icons & URLs
                </th>
            </thead>
            <tr>
                <td>Facebook</td>
                <td>
                    <input type="text" name="sc_social_slider_facebook"
                           value="<?php echo get_option('sc_social_slider_facebook'); ?>"/>
                </td>
            </tr>

            <tr>
                <td>Google Plus</td>
                <td>
                    <input type="text" name="sc_social_slider_gplus"
                           value="<?php echo get_option('sc_social_slider_gplus'); ?>"/>
                </td>
            </tr>

            <tr>
                <td>Youtube</td>
                <td>
                    <input type="text" name="sc_social_slider_youtube"
                           value="<?php echo get_option('sc_social_slider_youtube'); ?>"/>
                </td>
            </tr>
            <tr>
                <td>Linkedin</td>
                <td>
                    <input type="text" name="sc_social_slider_linkedin"
                           value="<?php echo get_option('sc_social_slider_linkedin'); ?>"/>
                </td>
            </tr>
            <tr>
                <td>Email Address</td>
                <td>
                    <input type="text" name="sc_social_slider_email"
                           value="<?php echo get_option('sc_social_slider_email'); ?>"/>
                </td>
            </tr>
            <tr>
                <td>Contact/Newsletter Form Shortcode</td>
                <td>
                    <input id="ssi-shortcode" type="text" name="sc_social_slider_shortcode"
                           value="<?php echo get_option('sc_social_slider_shortcode'); ?>"/>
                </td>
            </tr>
            <tr>
                <td>Twitter</td>
                <td>
                    <input type="text" name="sc_social_slider_twitter"
                           value="<?php echo get_option('sc_social_slider_twitter'); ?>"/>
                </td>
            </tr>
            <tr>
                <td>Instagram</td>
                <td>
                    <input type="text" name="sc_social_slider_instagram"
                           value="<?php echo get_option('sc_social_slider_instagram'); ?>"/>
                </td>
            </tr>
            <tr>
                <td>Phone Number</td>
                <td>
                    <input type="text" name="sc_social_slider_phone"
                           value="<?php echo get_option('sc_social_slider_phone'); ?>"/>
                </td>
            </tr>
            <tr>
                <td>Pinterest</td>
                <td>
                    <input type="text" name="sc_social_slider_pinterest"
                           value="<?php echo get_option('sc_social_slider_pinterest'); ?>"/>
                </td>
            </tr>
            <tr>
                <td>Skype Username</td>
                <td>
                    <input type="text" name="sc_social_slider_skype"
                           value="<?php echo get_option('sc_social_slider_skype'); ?>"/>
                </td>
            </tr>
            <tr>
                <td>Foursquare</td>
                <td>
                    <input type="text" name="sc_social_slider_foursquare"
                           value="<?php echo get_option('sc_social_slider_foursquare'); ?>"/>
                </td>
            </tr>
            <tr>
                <td>GitHub</td>
                <td>
                    <input type="text" name="sc_social_slider_github"
                           value="<?php echo get_option('sc_social_slider_github'); ?>"/>
                </td>
            </tr>
            <tr>
                <td>Tumblr</td>
                <td>
                    <input type="text" name="sc_social_slider_tumblr"
                           value="<?php echo get_option('sc_social_slider_tumblr'); ?>"/>
                </td>
            </tr>
            <tr>
                <td>Shopping Cart / Store</td>
                <td>
                    <input type="text" name="sc_social_slider_store"
                           value="<?php echo get_option('sc_social_slider_store'); ?>"/>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="sc_social_slider_save" id="btn" class="button-primary" value="Update">
                    <span id="loading" style="display: none;"><img src="images/loading.gif" alt=""> saving...</span><br/><br/>
                </td>
            </tr>
        </table>
    </div>
</form>


<script language="JavaScript">
    <!--
    window.onload = changeps;
    function changeps() {
        if (jQuery('.ps').val() == "left" || jQuery('.ps').val() == "right") {
            jQuery('#spos').text("Top");
        } else {
            jQuery('#spos').text("Left");
        }
    }
    jQuery('.ps').live("change", function () {
        if (jQuery(this).val() == "left" || jQuery(this).val() == "right") {
            jQuery('#spos_' + jQuery(this).attr("rel")).text("Top");
        } else {
            jQuery('#spos_' + jQuery(this).attr("rel")).text("Left");
        }
    });

    jQuery('#wptb').submit(function () {
        jQuery(this).ajaxSubmit({
            'url': ajaxurl,
            'beforeSubmit': function () {
                jQuery('#loading').fadeIn();
            },
            'success': function (res) {
                jQuery('#loading').fadeOut();
            }
        });
        return false;
    });
    //-->
</script>
<script type="text/javascript">

    jQuery(document).ready(function ($) {

        jQuery("#ssi-shortcode").focusout(function () {
            var shortcode = jQuery(this).val();
            shortcode = shortcode.replace(/"/g, "").replace(/'/g, "");
            jQuery(this).val(shortcode);
        });


        jQuery('#bg_colorbox').miniColors({

            change: function (hex, rgb) {
                jQuery("#console").prepend("HEX: " + hex + " (RGB: " + rgb.r + ", " + rgb.g + ", " + rgb.b + ")<br />");
            }

        });

        jQuery('#label_colorbox').miniColors({

            change: function (hex, rgb) {
                jQuery("#console").prepend("HEX: " + hex + " (RGB: " + rgb.r + ", " + rgb.g + ", " + rgb.b + ")<br />");
            }

        });

        jQuery('#text_colorbox').miniColors({

            change: function (hex, rgb) {
                jQuery("#console").prepend("HEX: " + hex + " (RGB: " + rgb.r + ", " + rgb.g + ", " + rgb.b + ")<br />");
            }

        });

    });
</script>