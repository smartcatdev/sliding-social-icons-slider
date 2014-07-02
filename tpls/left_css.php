<style type="text/css">
	#ssi-absolute{
		position: fixed !important;
		top: <?php echo get_option('sc_social_slider_margin'); ?>px;
		z-index: 9999 !important;
		left: 0;
		width: 0 !important;
	}

	.contact-side li{
		margin: 0 0 5px 0;
		width: 180px;
		height: 30px;
		display: block;
		background: <?php echo get_option('sc_social_slider_background'); ?>;
		line-height: 30px;
		text-align: right;
		font-size: 22px; 
		border-top-right-radius: 5px;
		border-bottom-right-radius: 5px;
		position: relative;
		left: -140px;
		border: none !important;
		
	}
.contact-side li img{
	width: 30px;
	height: 30px;
	border: none !important;
}
.contact-side li a{
	display:block;
	color: <?php echo get_option('sc_social_slider_color'); ?> !important;
}
.contact-side li a:hover{
	cursor: pointer;
}
.contact-side li span{
	float: left;
	margin-left: 5px;
}


#ssi-contact-form{
	background: <?php echo get_option('sc_social_slider_background'); ?>;
	color: #ffffff !important;
}
</style>