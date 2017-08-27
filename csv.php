<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title></title>
    <script src="./node_modules/dygraphs/dist/dygraph.min.js"></script>
</head>

<div id="csv"></div>

<script type="text/javascript" charset="utf-8">
g = new Dygraph( 
    document.getElementById( "csv" ), "a.csv"
    //, { legend : 'always', 
        //title : 'A vs t',
        //showRoller : true,
        //rollPeriod : 14,
        //customBars : true,
        //ylabel : 'Activity',
     //}
);
</script>

<?php

?>

<body>
</body>
</html>
