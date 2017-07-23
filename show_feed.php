<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet"  href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<a href='?logout=true' class="logout"><button>Logout</button></a>
	<table class="table">
	  <?php 
	  foreach ($data as $key => $value) { ?>
	  <tr>
		  <td>
		  <ul>
		  	<img src="<?php echo $value->user->profile_image_url ?>">
		  </ul>
		  <ul>
		  	<?php print_r($value->text);?>
		  </ul>
		  
		  <ul>
		  	<img src="<?php echo $value->extended_entities->media[0]->media_url;?>" height="<?php echo $value->extended_entities->media[0]->sizes->small->h;?>" width="<?php echo $value->extended_entities->media[0]->sizes->small->w;?>">
		  	</ul>
		  </td>
	  </tr>

	  <?}
	  ?>
	</table>
</body>
</html>

