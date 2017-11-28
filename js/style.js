$(document).ready(function(){
		/*alert($(window).scrollTop());*/
		function progress(){
			if($(window).scrollTop()>650){
			$(".prog").addClass("progAni");
		}
		}
		window.addEventListener('scroll', progress);
});