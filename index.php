<?php header('Content-type: image/svg+xml'); ?>

<svg xmlns="http://www.w3.org/2000/svg" width="800" height="450" viewBox="0 0 800 450">
  <foreignObject x="0" y="0" width="960px" height="850px">
		<style>
			iframe {
				width: 800px;
				height: 450px;
				border: none;
				margin: 0;
				padding: 0;
				position: absolute;
				top: 0;
				left: 0;
			}
			iframe#right {
        -webkit-mask-image: linear-gradient(to left, black 50%, transparent 100%);
			}
		</style>
    <body xmlns="http://www.w3.org/1999/xhtml" style="margin: 0; padding: 0">
      <?php
        echo '<iframe id="left" src="' . $_GET["left"] . '"></iframe>';
        echo '<iframe id="right" src="' . $_GET["right"] . '"></iframe>';
      ?>
    </body>
  </foreignObject>
</svg>
