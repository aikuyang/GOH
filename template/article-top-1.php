<section class="main_section <?php echo $args['pageclass'] . "-hd" ?> article-top">
  <div class="row">
    <div class="col-md-4">
      <div class="article-pic img-style1">
        <div class="img_div"><img src="<?php echo $args['articleTop']['image']['url']; ?>"></div>
      </div>
    </div>
    <div class="col-md-7 offset-md-1 d-flex">
      <div class="article-content <?php echo $args['pageclass'] . "-content" ?> align-self-center">
        <div class="txt_block">
          <div class="txt">
            <?php echo $args['articleTop']['content']; ?>
          </div>
          <div class="big_txt"><?php echo $args['pageNameTW']; ?></div>
        </div>
      </div>
    </div>
  </div>
</section>