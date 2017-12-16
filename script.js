$(document).ready(function() {
	
	/*
	 * Making initials and lateral grouping
	 * for titles list.
	 *
	 */
	 
	//main container class name: "list"
	function removeDuplicateCharacters(string) {
		return string.split('').filter(function(item, pos, self) {
			return self.indexOf(item) == pos;
		}).join('');
	}
			
	var initialsList = "";
	
	$("main").append("<div class='test'></div>");
	$("main").append("<div class='list-new'></div>");
	
	$( ".list > .title > a" ).each( function(){
		initialsList += $(this).text().charAt(0);
  	});
  	
  	var numberOfTitles = initialsList.length;
  	initialsList = removeDuplicateCharacters(initialsList)
  	  	
  	for (var i=0; i<initialsList.length; i++) {
  		$(".list-new").append("<div class='group'><div class='initial'>" + initialsList.charAt(i) + "</div></div>")
  		$(".list > .title > a").each( function(){
  			if ( initialsList.charAt(i) == $(this).text().charAt(0) ) {
  				$(".group:last").append($(this).parent());
  			}
		});
  	}
  	
  	$(".list").remove();
  	$(".list-new").toggleClass("list-new list");
  	
  	

  	// font awesome
  	$("nav a:contains('Kontakt')").empty().append('<i class="fas fa-envelope"></i>');
  	$("nav a:contains('Autor')").empty().append('<i class="fas fa-info-circle"></i>');
});
