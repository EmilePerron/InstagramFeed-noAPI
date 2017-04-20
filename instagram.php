<?php
$username = 'emilewiscarroll';
$json = file_get_contents('https://www.instagram.com/'.$username.'/media/');
$instagram_feed_data = json_decode($json, true);

if (isset($instagram_feed_data['items'])) {
    foreach ($instagram_feed_data['items'] as $item) {
        $link = $item['link'];
        $img_url = $item['images']['low_resolution']['url'];
        $caption = isset($item['caption']) ? $item['caption']['text'] : '';
        
        ?>
        <a href="<?= $link; ?>" target="_blank" class="instagram-post">
            <img src="<?= $img_url; ?>">
            <div class="caption"><?= $caption; ?></div>
        </a>
        <?php
    }
}
?>
