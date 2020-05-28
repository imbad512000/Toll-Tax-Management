<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="assets/js/bootstrap.js" type="text/javascript" charset="utf-8" async defer></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
    <title></title>
</head>

<body>
    <form action="#" method="post" enctype="multipart/form-data" accept-charset="utf-8">
        <div class="card">
            <div class="card-head">
                <!-- MANAV GAY RAND -->
            </div>
            <div class="card-body">
                <input type="file" name="n">
                <label for="n" class="btn btn-danger">File</label>
                <input type="submit" name="sub" value="submit">
            </div>
            Doing omething// doing
        </div>
    </form>
</body>

</html>

<?php

	if(isset($_REQUEST['sub']))
	{	
		print_r($_FILES);
	}	
?>