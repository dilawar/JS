<script src="https://cdn.plot.ly/plotly-latest.min.js"></script>

<div id="tester" style="width:600px;height:250px;"></div>

<!-- Plot csv --> <script>
	TESTER = document.getElementById('tester');
	Plotly.plot( TESTER, [{
	x: [1, 2, 3, 4, 5],
	y: [1, 2, 4, 8, 16] }], {
	margin: { t: 0 } } );
</script>

<?php
// Upload file.


?>
