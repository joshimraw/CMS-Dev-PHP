<?php 
include "header.php";

if(isset($_POST['com_submit'])){
	$com_post_id = $_POST['com-post-id'];
	$com_author  = $_POST['author-name'];
	$com_content = $_POST['com-content'];

	if(empty($com_post_id) || empty($com_author) || empty($com_content)){
		echo "All the field are required";
	}else{
		$com_sql = "INSERT INTO comments(com_post_id, com_author, com_content, com_status, com_date) 
		VALUES('$com_post_id', '$com_author', '$com_content', 'unproved', now())";

		$com_resutl = mysqli_query($conn, $com_sql);

		if($com_resutl){

			$update_sql = "UPDATE posts SET post_comment_count = post_comment_count + 1 WHERE post_id = '$com_post_id'";
			$update_com_count = mysqli_query($conn, $update_sql);
			if(!$update_com_count){
				echo die('Failed to update comment count ' .mysqli_error());
			}

			echo "<a href='/post.php?p_id=$com_post_id'>Go back</a>";

		}else{
			die('Failed '.mysqli_error());
		}
	}
}

?>








<?php include "footer.php"; ?>