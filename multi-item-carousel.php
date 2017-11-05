<div class="col-md-12">
  <div class="carousel slide multi-item-carousel" id="theCarousel">
    <div class="container">
      <div class="carousel-inner">

        <div class="item_multi active">
          <?php foreach ($result as $row) {
            $row['IMG_PATH'] = substr($row['IMG_PATH'], 6);
           ?>
            <div class="col-md-3 item-col">
              <a href="#lawyer-content" class="link-lawyer" id="<?php echo $row['ID_LAWYER'] ?>">
                <?php echo '<img src="'.$row['IMG_PATH'].'" class="lawyer">';  ?> 
                <div class="lawyer-description">
                  <h5><?php echo $row['TXT_NAME'] ?></h5>
                  <p><?php echo $row['TXT_DESCRIPTION'] ?></p>
                </div>
              </a>
            </div>
          <?php } ?>
        </div>
      
    </div>
    </div>
    <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
    <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
  </div>
</div>

