<?php
$unique_id = esc_attr(uniqid('search-form-'));
?>

<form role="search" method="get" action="<?php echo esc_url(home_url('/')) ?>" class="header_search">
  <input id="<?php echo $unique_id; ?>" class="header_search-input lizz_frm-input style2" id="" type="search" placeholder="請輸入關鍵字"  value="<?php echo get_search_query();?>" name="s">
  <button class="header_search-btn lizz_btn lizz_btn-float" type="submit">
    <div class="icon"><img src="<?php ECHO_ASSET_PATH(); ?>/images/icons/icon-search.svg"></div>
  </button>
</form>
