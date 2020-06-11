<?php
$page = file_get_contents("https://vnexpress.net/giai-tri");
// echo $page;
$pattern = '#col-left\s*col-small">(.*</article>)\s*</div>#imsU';
preg_match_all($pattern, $page, $match);
echo '<pre>';
print_r($match[1]);
$page = $match[1];
$pattern1 = "#<article class='item-news item-news-common item-news-common-v2'><script>[^<]+</script>#";
$newString = preg_replace($pattern1,"",$page);
?>
<!-- chưa hoàn chỉnh -->