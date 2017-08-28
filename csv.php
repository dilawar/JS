<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title></title>
    <script src="./node_modules/dygraphs/dist/dygraph.min.js"></script>
    <link rel="stylesheet" href="./node_modules/dygraphs/dist/dygraph.css" title="" type="" />
</head>

<?php

$delimiter = ',';

?>

<div id="csv"></div>

<script type="text/javascript" charset="utf-8">
g = new Dygraph( 
    document.getElementById( "csv" ), "tmp/__data.csv", 
    { 
        delimiter : " "
    }
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
if( $_FILES )
{
    // read the file and write to temporary file.
    if( $_FILES['file']['tmp_name'] )
    {
        $txt = file_get_contents( $_FILES['file']['tmp_name'] );

        file_put_contents( "./tmp/__data.csv", $txt );

        if( ! file_exists( "./tmp/__data.csv" ) )
            echo "<p>Could not upload the file. </p>";
        else
            echo "Successful upload";
    }
}

?>

</body>
</html>
