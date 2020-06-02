<?php 
		include('head.php');
?>
	<main>
    <?php 
        $query = $_GET;
        $title = $query['name'];
        
        //parse images
        $imageDir = "images/";
        $imageAll = scandir($imageDir);
        $imageList = [];

        foreach ($imageAll as $item) {
            if (strstr($item, $title)){
                array_push($imageList, $item);
            }
        }
    ?>
    <div><h1><?php echo $title;?></h1>
        <div class="detail-image"><img src="<?php echo $imageDir.$imageList[0]; ?>"></div>
        <div class="tools">
            <?php 
                for ($i=1; $i < count($imageList); $i++){
                    echo '<img src="'.$imageDir.$imageList[$i].'">';
                }
            ?>
        </div>
        <div class="detail-description"><?php include(''.$title.'.php'); ?></div>				
	</main>
	<?php 
		include('footer.php');
	?>