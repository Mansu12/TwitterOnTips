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
		  	<a href="<?php echo $value->user->url;?>"><?php echo $value->user->name;?></a>
		  </ul>
		  <ul>
		  	<?php 
			  	$text=$value->text;
			  	$text_processed=explode("https", $text);
			  	print_r($text_processed[0]);
			  	foreach ($text_processed as $key => $val) {
			  		if($key==0){continue;}
			  	?>

					  <a href="<?php print_r("https".$val);?>">
					  		<?php print_r("https".$val);?>
					  </a>
			  	<?php } ?>
		  </ul>
		  
		  <ul>
		  	<img src="<?php echo $value->extended_entities->media[0]->media_url;?>" height="<?php echo $value->extended_entities->media[0]->sizes->small->h;?>" width="<?php echo $value->extended_entities->media[0]->sizes->small->w;?>">
		  	</ul>
		  	<ul>
		  		<a><img src="images/heart.ico"><?php echo " ".$value->favorite_count;?></a>
		  	</ul>
		  </td>
	  </tr>

	  <?}
	  ?>
	</table>
</body>
</html>

