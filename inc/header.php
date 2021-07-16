<?php include 'config.php';?>	
<?php include 'helpers/format.php';?>
 <?php
 	$tm = new format();
 ?>	
<!DOCTYPE html>
<html>
<head>
	<?php
		if (isset($_GET['pageid'])) {
			$pagetitleid = $_GET['pageid'];
			$sql = "SELECT * FROM tbl_page WHERE id ='$pagetitleid'";
    		$query = mysqli_query($con,$sql);
    		if ($query) {
    			while ($result = mysqli_fetch_array($query)) { ?>
    		
    			<title> <?php echo $result['name'];?> -<?php echo $title;?></title>

	<?php } } }elseif (isset($_GET['id'])) {
			$postid = $_GET['id'];
			$sql = "SELECT * FROM tbl_post WHERE id ='$postid'";
    		$query = mysqli_query($con,$sql);
    		if ($query) {
    			while ($result = mysqli_fetch_array($query)) { ?>
    		
    			<title> <?php echo $result['title'];?> -<?php echo $title;?></title>

	<?php } } }else{ ?>

				<title> <?php echo $tm->title();?> -<?php echo $title;?></title>
			<?php } ?>
	

	<meta name="language" content="English">
	<meta name="description" content="It is a website about education">
<!-- Start keywords -->	
	<?php
		if (isset($_GET['id'])) {
			$keyword = $_GET['id'];
			$sql = "SELECT * FROM tbl_post WHERE id ='$keyword'";
    		$query = mysqli_query($con,$sql);
    		if ($query) {
    			while ($result = mysqli_fetch_array($query)) { ?>
    			<meta name="keywords" content="<?php echo $result['tags'];?>">
    <?php } } }else{ ?>
    			<meta name="keywords" content="<?php echo $KEYWORDS;?>">
    		<?php	} ?>

<!-- Start Author -->
	<?php
		if (isset($_GET['id'])) {
			$keyword = $_GET['id'];
			$sql = "SELECT * FROM tbl_post WHERE id ='$keyword'";
    		$query = mysqli_query($con,$sql);
    		if ($query) {
    			while ($result = mysqli_fetch_array($query)) { ?>
    			<meta name="author" content="<?php echo $result['author'];?>">
    <?php } } }else{ ?>
    			<meta name="keywords" content="<?php echo $Author;?>">
    		<?php	} ?>
	<link rel="stylesheet" href="font-awesome-4.5.0/css/font-awesome.css">	
	<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="style.css">
	<script src="js/jquery.js" type="text/javascript"></script>
	<script src="js/jquery.nivo.slider.js" type="text/javascript"></script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:10,
		animSpeed:500,
		pauseTime:5000,
		startSlide:0, //Set starting Slide (0 index)
		directionNav:false,
		directionNavHide:false, //Only show on hover
		controlNav:false, //1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>
</head>

<body>
	<div class="headersection templete clear">
		<a href="index.php">
			<div class="logo">
				<?php
            		$sql = "SELECT * FROM title_slogan WHERE id =1";
            		$query = mysqli_query($con,$sql);
            		while ($result = mysqli_fetch_array($query)) {
            		//print_r($result);
        		?>
				<img src="admin/<?php echo $result['logo'];?>" alt="Logo"/>
				<h2><?php echo $result['title'];?></h2>
				<p><?php echo $result['slogan'];?></p>
				<?php } ?>
			</div>
		</a>
		<div class="social clear">
			<div class="icon clear">
				<?php
            		$sql = "SELECT * FROM tbl_social WHERE id =1";
            		$query = mysqli_query($con,$sql);
            		while ($result = mysqli_fetch_array($query)) {
            		//print_r($result);
        		?>
				<a href="<?php echo $result['fb'];?>" target="_blank"><i class="fa fa-facebook"></i></a>
				<a href="<?php echo $result['tw'];?>" target="_blank"><i class="fa fa-twitter"></i></a>
				<a href="<?php echo $result['ln'];?>" target="_blank"><i class="fa fa-linkedin"></i></a>
				<a href="<?php echo $result['gp'];?>" target="_blank"><i class="fa fa-google-plus"></i></a>
				<?php } ?>
			</div>
			<div class="searchbtn clear">
			<form action="search.php" method="GET">
				<input type="text" name="search" placeholder="Search keyword..."/>
				<input type="submit" name="submit" value="Search"/>
			</form>
			</div>
		</div>
	</div>
<?php include 'menu.php';?>