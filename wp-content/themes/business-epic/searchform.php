<?php
?>
<form action="<?php echo esc_url(home_url()) ?>" autocomplete="on" class="top-search">
    <input id="search" name="s" value="<?php echo get_search_query(); ?>" type="text" placeholder="<?php  esc_html_e('Search','business-epic')?>&hellip;&hellip;">
    <button type="submit"><i class="fa fa-search"></i></button>
</form>
