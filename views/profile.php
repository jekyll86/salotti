<?php 
include 'core/init.php';
if(isset($_GET['email']) && empty($_GET['email']) === false) { // Putting everything in this if block.
 
 	$email  = htmlentities($_GET['email']); // sanitizing the user inputed data (in the Url)
	if ($users->email_exists($email) === false) { // If the user doesn't exist
		header('Location:index.php'); // redirect to index page. Alternatively you can show a message or 404 error
		die();
	}else{
		$profile_data 	= array();
		$user_id 		= $users->fetch_info('id', 'email', $email); // Getting the user's id from the username in the Url.
		$profile_data	= $users->userdata($user_id);
	} 
	?>
	<!doctype html>
	<html lang="en">
	<head>	
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="css/style.css" >
	 	<title><?php echo $email; ?></title>
	</head>
	<body>
	    <div id="container">
			<?php //include 'includes/menu.php'; ?>
 
			<h1><?php echo $profile_data['email']; ?>'s Profile</h1>
 
	    	<div id="profile_picture">
 
	    		<?php 
	    			//$image = $profile_data['image_location'];
	    			//echo "<img src='$image'>";
	    		?>
	    	</div>
	    	<div id="personal_info">
	    		
 
	    		<?php 
	    		#Check if the first_name and last_name are not empty
	    		if(!empty($profile_data['nome']) || !empty($profile_data['cognome'])){?> 
 
		    		<span><strong>Name</strong>: </span>
		    		<span><?php if(!empty($profile_data['first_name'])) echo $profile_data['first_name'], ' '; ?></span>
		    		<span><?php if(!empty($profile_data['last_name'])) echo $profile_data['last_name']; ?></span>
 
		    		<br>	
	    		<?php 
	    		} 
 
	    		#Check if gender is specfied(Male or Female) 
	    		//if($profile_data['gender'] != 'undisclosed'){
	    		?>
		    		<span><strong>Gender</strong>: </span>
		    		<span><?php //echo $profile_data['gender']; ?></span>
		    
		    		<br>
	    		<?php //} 
 
	    		#Is bio specified?
	    		if(!empty($profile_data['bio'])){
		    		?>
		    		<span><strong>Bio</strong>: </span>
		    		<span><?php echo $profile_data['bio']; ?></span>
		    		<?php 
	    		}
	    		?>
	    	</div>
	    	<div class="clear"></div>
	    </div>        
	     
	</body>
	</html>
	<?php  
}else{
	header('Location: index.php'); // redirect to index if there is no username in the Url
}
?>