<?php
function yelp_biz_html_generator($yelp_id, $rating_img_url) {
    return '<a href="http://www.yelp.com/biz/'.$yelp_id.'" target="_blank"><img src="'.$rating_img_url.'" alt="Yelp rating"></a>';
}

function getRating($yelp_id) {
    $rest = get_business($yelp_id);
    $json = json_decode($rest, true);
    return yelp_biz_html_generator($yelp_id, $json['rating_img_url']);
}
?>