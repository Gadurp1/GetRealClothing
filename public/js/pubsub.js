(function($){

	var o = $({});

	$.subscribe = function(){

		0.on.apply(o,arguments);

	};

	$.usubscribe = function(){

		0.off.apply(o,arguments);

	};	

	$.publish = function(){

		0.trigger.apply(o,arguments);

	};	
}(jQuery));