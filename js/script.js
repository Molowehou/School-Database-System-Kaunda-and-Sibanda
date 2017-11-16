var color = $(".selected").css("background-color");
	//When clicking on menu list items
$("#menu").on("click", "li", function(){
  //Deselect sibling elements
  $(this).siblings().removeClass("selected");
  //Select clicked element
  $(this).addClass("selected");
  //cache current color
  color = $(this).css("background-color");
});


// $("textarea").click(function(){
// 		$("textarea").text("");
// 	});
	
$('#timepicker').timepicki(); 