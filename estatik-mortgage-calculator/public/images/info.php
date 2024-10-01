<?php header('Content-type: image/svg+xml');

$fill = ! empty( $_GET['color'] ) ? ' style="fill:' . $_GET['color'] . '"' : '';

echo '<?xml version="1.0" encoding="iso-8859-1"?>
<!-- Generator: Adobe Illustrator 19.1.0, SVG Export Plug-In . SVG Version: 6.00 Build 0)  -->
<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 65 65" style="fill:#c8c8c8; enable-background:new 0 0 65 65;" xml:space="preserve">
	<g' . $fill . '>
		<path d="M32.5,0C14.58,0,0,14.579,0,32.5S14.58,65,32.5,65S65,50.421,65,32.5S50.42,0,32.5,0z M32.5,61C16.785,61,4,48.215,4,32.5
			S16.785,4,32.5,4S61,16.785,61,32.5S48.215,61,32.5,61z"/>
		<circle cx="33.018" cy="19.541" r="3.345"/>
		<path d="M32.137,28.342c-1.104,0-2,0.896-2,2v17c0,1.104,0.896,2,2,2s2-0.896,2-2v-17C34.137,29.237,33.241,28.342,32.137,28.342z
			"/>
	</g>
</svg>';
