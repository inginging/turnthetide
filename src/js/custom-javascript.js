jQuery(document).ready(function($) {
	var current = location.pathname;

	$("#navbarNavDropdown li a").each(function() {
		var $this = $(this),
			$thisUrl = $this[0].pathname;

		// if the current path is like this link, make it active
		if ($thisUrl !== "/") {
			if (current.indexOf($thisUrl) !== -1) {
				$this.parent().addClass("active");
			}
		}
	});

	if ($("body").hasClass("single-goals")) {
		var goalId = $("#goalId").val(),
			projectOption = $('select[name="dmm_project"]');

		projectOption.val(goalId).attr("selected", "selected");
	}

	$(".c-navbar-toggler").on("click", function() {
		if ($("body").hasClass("lock-scroll")) {
			$("body").removeClass("lock-scroll");
		} else {
			$("body").addClass("lock-scroll");
		}
	});
});
