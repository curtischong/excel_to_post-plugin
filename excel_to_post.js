$(document).ready(function(){





if($("#fileToUpload").val().length > 3){
/*	function getQueryVariable(variable)
{
       var query = window.location.search.substring(1);
       var vars = query.split("&");
       for (var i=0;i<vars.length;i++) {
               var pair = vars[i].split("=");
               if(pair[0] == variable){return pair[1];}
       }
       return(false);
	   
	   

}
var url = window.location.href;
var reloaded = getQueryVariable("reloaded");
	   if(reloaded == "yes"){
	   }else{
	   	   url = url+"&reloaded=yes";
	   	location.href = url;
	   }*/
	   $("#createpost").show();
	   $("#createpost").on("click",function(){
		location.reload();
	   });
}


















/*






$("#submit-file").on("click",function(){
	$("#submit-file").html("uploading files...");
	
	// Get the selected file from the input.
	var file = $("#file-upload").files;
	
	// Create a new FormData object.
var formData = new FormData();
var thefilename = $("#file-upload").val();
if (thefilename.substring(thefilename.length-4,thefilename.length) == ".txt"){
    formData.append('post[]', file, thefilename);
alert(formData);


    $.ajax({
            type:'POST',
            url: "../wp-content/plugins/excel_to_post-plugin/retrieve_data.php",
            data:{
                "filename": formData
            },
            success: function(response){
			alert(response);
            }
        });



  }
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
});









*/








});