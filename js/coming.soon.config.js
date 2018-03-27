(function($){
	$(document).ready(function(){
		// Set the time at which the countdown expires.
		// var untilDate new Date(Year, Month - 1, Day)
		//-----------------------------------------------
		var untilDate = new Date(2018, 2, 17, 19);

		$(".countdown").countdown({
			until: untilDate, 
			format: 'dHMS',
			padZeroes: true,
			tickInterval: 10000
		});
		
		//$(".countdown").countdown('pause')

	}); // End document ready

})(this.jQuery);