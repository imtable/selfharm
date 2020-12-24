<?php
	require "./assets/less/lessc.inc.php";
	function autoCompileLess($inputFile, $outputFile) {
	  // load the cache
	  $cacheFile = $inputFile.".cache";
	  if (file_exists($cacheFile)) {
		$cache = unserialize(file_get_contents($cacheFile));
	  } else {
		$cache = $inputFile;
	  }
	  $less = new lessc;
	  $newCache = $less->cachedCompile($cache);
	  if (!is_array($cache) || $newCache["updated"] > $cache["updated"]) {
		file_put_contents($cacheFile, serialize($newCache));
		file_put_contents($outputFile, $newCache['compiled']);
	  }
	}
	autoCompileLess('./assets/less/style.less', './assets/css/style.css');
// class="col-xs-6 wow fadeIn" data-wow-delay="0.3s" data-wow-duration="0.6s"
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>myself</title>
    <link rel="stylesheet" href="assets/css/lustratio.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="container">
                <div class="header_wrapper">
                    <div class="header_leftside">
                        <a href="#" class="logo">
                            <img src="assets/img/logo.jpeg" alt="logo">
                        </a>
                    </div>
                    <div class="header_middleside">
                        <nav>
                            <ul class="menu">
                                <li class="item"><a href="#">item</a></li>
                                <li class="item"><a href="#">item</a></li>
                                <li class="item"><a href="#">item</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="header_rightside">
                        <div class="header_links">
                            <a href="http://github.com/imtable" class="link link-git">
                                <img src="assets/img/github-logo.png" alt="git-logo">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main class="main">
            <div class="container">
                <div class="task">
                    <div class="left-wrapper">
                        <div class="left-box_wrapper">
                            <div class="left-box"></div>
                        </div>
                    </div>
                    <div class="right-wrapper">
                        <div class="right-box_wrapper">
                            <div class="right-box"></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- <section class="section section-1">
                <div class="container">
                    <div class="section_wrapper">

                    </div>
                </div>
            </section> -->
        </main>

        <footer class="footer">
            <div class="container">
                <div class="footer_wrapper">
                    <ul class="footer_links">
                        <li>
                            <a href="http://github.com/imtable" class="link link-git">
                                <img src="assets/img/github-logo.png" alt="git-logo">
                            </a>
                        </li>
                    </ul>
                    <p href="" class="copyright">copyleft 2021</p>
                    <a href="" class="footer_logo">
                        <img src="assets/img/logo.jpeg" alt="logo">
                    </a>
                </div>
            </div>
        </footer>
    </div>

</body>

</html>