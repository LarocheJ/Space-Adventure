<?php
    $query = $_GET;
    $title = $query['class'];
    $page_title = $query['name'];
    
    //parse images
    $imageDir = "detail-images/";
    $imageAll = scandir($imageDir);
    $imageList = [];
    //videos
    $videoDir = "videos/";

    foreach ($imageAll as $item) {
        if (strstr($item, $title)){
            if (!strstr($item, "._")){
                array_push($imageList, $item);
            }
        }
    }
    
    include('head.php');
?>
<main>
    <h1><?php echo $page_title; ?></h1>
    <?php 
        if($page_title == "Rich Media"){
            print ' <div class="detail-video">
        <video witdh="100%" height="100%" controls>
            <source src="videos/rich.mp4" type="video/mp4">
        </video>
        </div>';
        } elseif($page_title == "Visual Communications") {
            print ' <div class="detail-video">
        <video witdh="100%" height="100%" controls>
            <source src="videos/visual.mp4" type="video/mp4">
        </video>
        </div>';
        } elseif($page_title == "Web Communications") {
            print ' <div class="detail-video">
        <video witdh="100%" height="100%" controls>
            <source src="videos/web.mp4" type="video/mp4">
        </video>
        </div>';
        } elseif($page_title == "Business of New Media") {
            print ' <div class="detail-video">
        <video witdh="100%" height="100%" controls>
            <source src="videos/business.mp4" type="video/mp4">
        </video>
        </div>';
        } else {
            print ' <div class="detail-video">
        <video witdh="100%" height="100%" controls>
            <source src="videos/production.mp4" type="video/mp4">
        </video>
        </div>';
        }
    ?>

    <!--<div class="detail-video"><iframe witdh="70%" height="70%" ?>"></div>-->
    <div class = "tools">
        <?php 
            //print_r($imageList);
            for ($i=0; $i < count($imageList); $i++){
                echo '<img src="'.$imageDir.$imageList[$i].'" class="detail-icons">';
            }
        ?>
    </div>
    <?php include(''.$title.'.php'); ?>	
</main>
<?php 
    include('footer.php');
?>