<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title></title>
    <script src="./node_modules/dygraphs/dist/dygraph.min.js"></script>
    <link rel="stylesheet" href="./node_modules/dygraphs/dist/dygraph.css" title="" type="" />
</head>

<div id="csv"></div>

<script type="text/javascript" charset="utf-8">
g = new Dygraph( 
    document.getElementById( "csv" ), "__data.csv"
    //, { legend : 'always', 
        //title : 'A vs t',
        //showRoller : true,
        //rollPeriod : 14,
        //customBars : true,
        //ylabel : 'Activity',
     //}
);
</script>

<body>

<!-- Form upload text file -->
<form method="post" action="#" enctype="multipart/form-data">
    <label for="file">Filename:</label> 
    <input type="file" name="file" id="file"/>
    <input type="submit" value="Upload and plot" >
</form>

<?php

// Upload the file and save it on server.
if( $_POST && $_FILES )
{
    // read the file and write to temporary file.
    $txt = file_get_contents( $_FILES[ 'uploadFile']['tmp_name'] );
    file_put_contents( "__data.csv", $txt );
    if( ! file_exists( "__data.csv" ) )
    {
        echo "<p>Could not upload the file. </p>";
    }
}

?>

</body>
</html>
