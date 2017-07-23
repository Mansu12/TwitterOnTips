<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	
	<script src="js/bootstrap.js"></script>
	<link rel="stylesheet"  href="css/bootstrap.min.css">

</head>
<body>
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
		  	<img src="<?php echo $value->extended_entities->media[0]->media_url;?>" height="<?php echo $value->extended_entities->media[0]->sizes->medium->h;?>" width="<?php echo $value->extended_entities->media[0]->sizes->medium->w;?>">
		  	</ul>
		  </td>
	  </tr>

	  <?}
	  ?>
	</table>
</body>
</html>
<style type="text/css">
	img {
   max-width:100%;
   height:auto;
   max-height:100%;
}
</style>