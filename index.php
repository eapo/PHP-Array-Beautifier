<?php
	header('Access-Control-Allow-Origin: *');
	header("Cache-Control: no-cache, no-store, must-revalidate"); // HTTP 1.1.
	header("Pragma: no-cache"); // HTTP 1.0.
	header("Expires: 0"); // Proxies.
	header("Content-Type: text/html; charset=utf-8");
	require_once "./array_beautifier.php";

	// require_once "./sdb/Store.php";
	// $dataDir = __DIR__ . "/vsdb";
	//$newsStore = new \SleekDB\Store('news', $dataDir);

	$allNews = $newsStore->findAll();
?>
<?php if($allNews): ?>
<?php
	$d = new Debug();
	$d->array_to_html($allNews);
?>
<?php endif; ?>
