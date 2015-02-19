
jQuery(document).ready(function($){
  	$('#banner-fade').bjqs({
  		usecaptions   : true,
      randomstart   : true,
  		showmarkers   : true, 
  		showcontrols  : false,
  		centercontrols: false,
    	height        : 317,
    	width         : 984,
    	responsive    : true,
    	animtype      : 'fade',
      animduration  : 250,     
      animspeed     : 3000,
      automatic     : true
  	});


    $('#banner-slide').bjqs({
      usecaptions   : true,
      randomstart   : true,
      showmarkers   : false, 
      showcontrols  : false,
      centercontrols: false,
      height        : 100,
      width         : 984,
      responsive    : true,
      animtype      : 'fade',
      animduration  : 250,     
      animspeed     : 3000,
      automatic     : true
    });
});

//window.onload   = setLayout;  
//window.onresize = setLayout;  
