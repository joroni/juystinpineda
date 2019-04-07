<?php

/* Articles */
?>

<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/simpleslider.js"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/touchwipe.js"></script>

<script type="text/javascript">
		$(document).ready(function () {
			

			$(".slider").simpleSlider({
				navigation: true,
				prevText: "Previous",
				nextText: "Next",
				pagination: true,
				autoplay: true,
				delay: 8000,
				speed: 500,
				numItems: 3
			});

			// This part allows touchwipe plugin for mobiles, it's optional
			$(".slider>.slide").each(function () {
				var $this = $(this);
				var precedent = $this.parent().parent().parent().find('.carousel-nav .precedent');
				var suivant = $this.parent().parent().parent().find('.carousel-nav .suivant');
				$(this).touchwipe({
					wipeLeft: function () { suivant.trigger("click"); },
					wipeRight: function () { precedent.trigger("click"); },
					min_move_x: 10,
					preventDefaultEvents: true
				});
			});

		});
	</script>