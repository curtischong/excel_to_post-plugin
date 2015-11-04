<?php
$filename = $_POST["filename"];
$lines = file($filename);
//echo json_encode(array_values($lines));
//echo "hi";
session_start();
$_SESSION["lines"] = $lines;
unlink($filename);
/*
global $user_ID;
$new_post = array(
'post_title' => 'My New Post',
'post_content' => 'Lorem ipsum dolor sit amet...',
'post_status' => 'publish',
'post_date' => date('Y-m-d H:i:s'),
'post_author' => $user_ID,
'post_type' => 'post',
'post_category' => array(0)
);
$post_id = wp_insert_post($new_post);
	
*/












/*
	   
	  
	   //start at 1 to skip the title
	   for($currentpost = 1; $currentpost < count($lines); $currentpost++){
	   $individualparts = explode(",",$lines[$currentpost]);
		$currenttitle = $individualparts[0];
	   $currentdecs = $individualparts[1];
	   //get rid of the \n
	   $currentdecs = substr($currentdecs, 0, strlen($currentdecs)-2);
	   //echo $currenttitle;
	   //echo $currentdecs;
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   

 * A function used to programmatically create a post in WordPress. The slug, author ID, and title

 * are defined within the context of the function.

 *

 * @returns -1 if the post was never created, -2 if a post with the same title exists, or the ID

 *          of the post if successful.

 
 to use function use this
 
 
 1
$post_id = programmatically_create_post()
2
if( -1 == $post_id || -2 == $post_id ) {
3
   // The post wasn't created or the page already exists
4
} // end if

 
 
 
 

	   } */
	   /*
	   // If the page doesn't already exist, then create it
	if( null == get_page_by_title( $currenttitle ) ) {
	
	//$currenttitle = $individualtitle[$currentpost];
	//$currentdesc = $individualdesc[$currentpost];
	//$currentslug = urlencode($currenttitle);

	// Set the page ID so that we know the page was created successfully
	  $post_id = wp_insert_post(
		array(
		  'comment_status'  => 'closed',
		  'ping_status'   => 'closed',
		  'post_author'   => $author_id,
		  //'post_name'   => $currenttitle,
		  'post_title'    => $currenttitle,
		  'post_status'   => 'publish',
		  'post_type'   => 'post'
		)
	  );
	}else{
	//posts already exists
	$post_id = -2;
	}
	   
	   
	   
	   
	   
	   
	   
	   
	   }
	   */
/*if ($_FILES["file"]["error"] > 0)
{
echo "Error: " . $_FILES["file"]["error"] . "<br />";
}
elseif ($_FILES["file"]["type"] !== "text/plain")
{
echo "File must be a .txt";
}
else
{
$fp = fopen($_FILES['uploadFile']['tmp_name'], 'rb');
    while ( ($line = fgets($fp)) !== false) {
      echo "$line<br>";
    }
}


/*$title = $_POST["title"];
$description = $_POST["description"];
echo $title;
$author_id = 1;
//remember to set up the $slug (the url that will be displayed for the post);
$individualtitle = explode("\a",$title);
$individualdesc = explode("\a",$description);

for($currentpost = 0; $currentpost < count($individualtitle); $currentpost++){
	// If the page doesn't already exist, then create it
	if( null == get_page_by_title( $title ) ) {
	
	$currenttitle = $individualtitle[$currentpost];
	$currentdesc = $individualdesc[$currentpost];
	//$currentslug = urlencode($currenttitle);

	// Set the page ID so that we know the page was created successfully
	  $post_id = wp_insert_post(
		array(
		  'comment_status'  => 'closed',
		  'ping_status'   => 'closed',
		  'post_author'   => $author_id,
		  //'post_name'   => $currenttitle,
		  'post_title'    => $currenttitle,
		  'post_status'   => 'publish',
		  'post_type'   => 'post'
		)
	  );
	}else{
	//posts already exists
	$post_id = -2;
	}
}







*/






?>