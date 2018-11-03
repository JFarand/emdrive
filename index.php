<?php
//Start session
//
//
session_start();

//SET json data
//$json = file_get_contents("http://localhost/2017/wp-json/wp/v2/posts/?categories=635&per_page=53&_embed");
//$json = file_get_contents("./posts_30072018-1733.json");
$json = file_get_contents("./posts_10092018-1546.json");
$data = json_decode($json, true);

//Set Session variable with json array
$_SESSION["posts"] = $data;

//Set local url
$url = isset($_SERVER['HTTPS']) ? 'https://' : 'http://';
$url .= $_SERVER['SERVER_NAME'];
$url .= $_SERVER['REQUEST_URI'];
$_SERVER["baseurl"] = $url;
?>
<?php include 'head.php'; ?>
<body>

	<div id="wrapper" class="drizzle_bg">
		<header id="header" class="onyx_bg">
		</header>
		<section class="cards_home brilliant_bg">
		<?php foreach($data as $post): ?>
			<div class="card">
			<ul>
			<?php if(isset($post['_embedded']['wp:featuredmedia'])) : ?>
				<li class="card-component__image"><img src="<?php echo $url."img/".$post['_embedded']['wp:featuredmedia'][0]['media_details']['sizes']['full']['file'];  ?>" alt=""></li>

				<li>
			<?php endif; ?>
				<div class="meta_description">
					<span class="category fira"><?php echo $post['_embedded']['wp:term'][0][0]['name']; ?></span>
					<span class="title">
						<a href="<?php echo $url . $post['_embedded']['wp:term'][0][0]['slug'] . "/" . $post['slug']; ?>" target="_self">
						<h3 class="h3 firenzen cap"><?php echo $post['title']['rendered']; ?></h3>
						</a>
					</span>
					<span class="author_byline fira"><?php echo $post_meta->author; ?></span>
				</div> <!-- Close Meta Div -->
			</li>
		</ul>
		</div> <!-- Close Card -->
		<?php endforeach; ?>
	</section>
	</div> <!-- Close Wrapper -->

</body>
</html>
