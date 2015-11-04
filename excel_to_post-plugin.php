<?php session_start();
/**
 * @package excel_to_post
 * @version 1
 */
/*
Plugin Name: excel to post
Plugin URI: http://wordpress.org/plugins/hello-dolly/
Description: With this plugin you can turn an excel file wil hundreds of posts into a wordpress post
Author: Curtis Chong
Version: 1
Author URI: http://ma.tt/
*/


/** Step 2 (from text above). */
add_action( 'admin_menu', 'my_plugin_menu' );

/** Step 1. */
function my_plugin_menu() {
	add_options_page( 'My Plugin Options', 'Excel to post', 'manage_options', 'hi', 'my_plugin_options' );
}

/** Step 3. */
function my_plugin_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}


	if (isset($_SESSION["lines"])){
		//print_r($_SESSION["lines"]);
		
		$lines = $_SESSION["lines"];
		for($currentpost = 1; $currentpost < count($lines); $currentpost++){
	   $individualparts = explode(",",$lines[$currentpost]);
		$currenttitle = $individualparts[0];
	   $currentdecs = $individualparts[1];
	   //get rid of the \n
	   $currentdecs = substr($currentdecs, 0, strlen($currentdecs)-2);

	   
	   global $user_ID;
$new_post = array(
'post_title' => $currenttitle,
'post_content' => $currentdecs,
'post_status' => 'publish',
'post_date' => date('Y-m-d H:i:s'),
'post_author' => $user_ID,
'post_type' => 'post',
'post_category' => array(0)
);
$post_id = wp_insert_post($new_post);

	   
	}
		
		
		
		
		unset($_SESSION["lines"]);
	}
	
	
	
	
	

	
	
	
	
	
	
	
	
	
	?>
	
	<link rel="stylesheet" type="text/css" href="../wp-content/plugins/excel_to_post-plugin/excel_to_post.css"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type='text/javascript' src='../wp-content/plugins/excel_to_post-plugin/excel_to_post.js'></script>
<!--<form action="../wp-content/plugins/excel_to_post-plugin/retrieve_data.php" method="post" enctype="multipart/form-data">
   <label for="file">Filename:</label> <input type="file" name="file" id="file-upload"/>
<div id="submit-file">submit</div>
</form>-->


<!--<script>
function getQueryVariable(variable)
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
var page = getQueryVariable("page");
	   alert(page);
	   alert(url);
</script>-->
<form action="../wp-content/plugins/excel_to_post-plugin/retrieve_data.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Csv file" name="submit">
</form>
<div id="createpost">Press this button to create your posts!</div>
<p id="instructions">requirements <br> 1. file uploaded must be in csv format (save excel file as csv)<br>2. Each row of the spreadsheet is a different post<br>3. the first row of the spreadsheet will the the headers of the columns. The headers are:<br>   -title<br>   -description</p>
<img src="../wp-content/plugins/excel_to_post-plugin/example-file-to-post.PNG" id="example">
	
	
	<?php
	
	
	/*echo '<?php include "settings_page.php";?>';*/
	//echo '<html><script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script><textarea id="posttitle" style="position: absolute; top: 200px; left: 300px; height: 400px; width: 300px;"></textarea><textarea id="postdesc" style="position: absolute; top: 200px; left: 700px; height: 400px; width: 300px;"></textarea><div id="submitpost" style="position: absolute; top: 200px; left: 200px; width: 100px; height: 20px; background-color: grey; color: white;">Submit posts</div><script>$( document ).ready(function(){$("#submitpost").on("click",function(){$.ajax({var title = $("#posttitle").val();var description = $("#postdesc").val();type:"POST",url: "retrieve_data.php",data:{"title": title,"description": description},success: function(response){alert(response);}});});});</script></html>';
}







//after creating post, set session variable to none so it doesn't keep creating posts




//declare craete post function here, this function might be global across files by default (if not make it)
//then i can use it to create posts in the handle editable file


/*function programmatically_create_post($currenttitle,$currentdecs) {
  // Initialize the page ID to -1. This indicates no action has been taken.
  $post_id = -1;
  // Setup the author, slug, and title for the post
  $author_id = 1;
  // If the page doesn't already exist, then create it
  if( null == get_page_by_title( $currenttitle ) ) {
    // Set the post ID so that we know the post was created successfully
    $post_id = wp_insert_post(
      array(
        'comment_status'  => 'closed',
        'ping_status'   => 'closed',
        'post_author'   => $author_id,
        'post_name'   => $currentdecs,
        'post_title'    => $currenttitle,
        'post_status'   => 'publish',
        'post_type'   => 'post'
      )
    );
  // Otherwise, we'll stop
  } else {
        // Arbitrarily use -2 to indicate that the page with the title already exists
        $post_id = -2;
  } // end if
} // end programmatically_create_post
add_filter( 'after_setup_theme', 'programmatically_create_post');
*/










	 







/*end of file*/
?>