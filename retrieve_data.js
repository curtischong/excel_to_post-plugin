$(document).ready(function(){


var filename = $("#filename").html();
$.ajax({
	type:'POST',
	url: "uploads/retrieve_lines.php",
	data:{
		"filename": filename
	},
	success: function(docinfo){
	history.go(-1);
	//var docinfoparsed = JSON.parse(docinfo);
	//var lines = docinfoparsed.join();
	//alert(docinfoparsed);
	}
});





});