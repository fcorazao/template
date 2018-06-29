var chart_rezise = {
	check: function (){
		// Charts resizing
		var $window = $(window);
		// Check window size
		if($window.innerWidth()<992){
			$('.ct-to-double-octave-on-tiny > div').addClass('ct-double-octave');
			$('.ct-to-double-octave-on-small > div').addClass('ct-double-octave');
			$('.ct-to-double-octave-on-medium > div').addClass('ct-double-octave');
			$('.ct-to-double-octave-on-full > div').addClass('ct-double-octave');
		}else{
			$('.ct-to-double-octave-on-tiny > div').removeClass('ct-double-octave');
			$('.ct-to-double-octave-on-small > div').removeClass('ct-double-octave');
			$('.ct-to-double-octave-on-medium > div').removeClass('ct-double-octave');
			$('.ct-to-double-octave-on-full > div').removeClass('ct-double-octave');
		}
		if($window.innerWidth()<560){
			$('.ct-to-mayor-third-on-tiny > div').addClass('ct-mayor-third');
			$('.ct-to-mayor-third-on-tiny > div').removeClass('ct-double-octave');
		}else{
			$('.ct-to-mayor-third-on-tiny > div').removeClass('ct-mayor-third');
		}
		// Check for resize
		$window.resize(function resize(){
			if($window.innerWidth()<992){
				$('.ct-to-double-octave-on-tiny > div').addClass('ct-double-octave');
				$('.ct-to-double-octave-on-small > div').addClass('ct-double-octave');
				$('.ct-to-double-octave-on-medium > div').addClass('ct-double-octave');
				$('.ct-to-double-octave-on-full > div').addClass('ct-double-octave');
			}else{
				$('.ct-to-double-octave-on-tiny > div').removeClass('ct-double-octave');
				$('.ct-to-double-octave-on-small > div').removeClass('ct-double-octave');
				$('.ct-to-double-octave-on-medium > div').removeClass('ct-double-octave');
				$('.ct-to-double-octave-on-full > div').removeClass('ct-double-octave');
			}
		});
	}
};