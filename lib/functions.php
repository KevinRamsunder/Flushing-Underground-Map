<?php
function yelp_biz_html_generator($yelp_id, $rating_img_url) {
    return '<a href="http://www.yelp.com/biz/'.$yelp_id.'" target="_blank"><img src="'.$rating_img_url.'" alt="Yelp rating"></a>';
}
?>