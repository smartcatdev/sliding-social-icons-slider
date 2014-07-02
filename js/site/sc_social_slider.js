jQuery(document).ready(function () {
    var theMargin = jQuery("#ssi-contact-form").width();
    jQuery("#ssi-contact-form").css({
        "margin-left": "-" + theMargin / 2 + "px"
    });
    jQuery("#ssi-contact").on("click", function (e) {
        jQuery("#ssi-dim").css("opacity", 0.6).fadeIn(300, function () {
            jQuery("#ssi-contact-form").show().animate({
                "top": "50px"
            }, 700)
        })
    });
    jQuery("#ssi-close-x").on("click", function (e) {
        jQuery("#ssi-contact-form").animate({
            "top": "-700px"
        }, 700, function () {
            jQuery(this).hide();
            jQuery("#ssi-dim").fadeOut(300)
        })
    });
    jQuery(".ssi-contact-content").append("<p style='float:right;font-size:12px;'>powered by <a href='http://www.smartcatdesign.net'>Smartcat</a></p>")
});