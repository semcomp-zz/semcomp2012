	</div>
		</div>
	</div>
<script>
	$.getJSON("../includes/carousel.php", function (data) {
	    $(document).ready(function () {
	        $("#basic_slideshow").agile_carousel({
	            carousel_data: data,
	            carousel_outer_height: 275,
	            carousel_height: 275,
	            slide_height: 275,
	            carousel_outer_width: 886,
	            slide_width: 886,
	            transition_type: "fade",
	            timer: 4000,
	            continuous_scrolling: true,
	            control_set_1: "numbered_buttons",
	            no_control_set: "hover_previous_button,hover_next_button"
	        });
	    });
	});

	jQuery(function($){
		$("#phone").mask("(99) 9999 - 9999");
	});
</script>
</body>
</html>