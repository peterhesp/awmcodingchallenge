<body>
<h1> NASA Mars Rover Photos</h1>
<?php

$url = 'https://api.nasa.gov/mars-photos/api/v1/rovers/curiosity/photos?sol=100&earth_date=2020-01-08&api_key=lfHbgJhDmm2JwZphGgfsjx2KB6D6gUyus8HBpN9X';
$json = file_get_contents($url);
$j_obj = json_decode($json, true);//
$photo_cnt = 0;
$photo_limit = 10;

while ($photo_cnt < $photo_limit ){
    $photo_cnt++;
    print '<p>' .$photo_cnt. '<img src=\''.$j_obj['photos'][$photo_cnt]['img_src']. '\' /></p>';
    print '<p>Earth Date: '.$j_obj['photos'][$photo_cnt]['earth_date'];   
}

?>
</body>
</html>