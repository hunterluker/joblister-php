<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootswatch/3.4.1/flatly/bootstrap.min.css" rel="stylesheet" integrity="sha384-bfWZLPtvQKHg/nZNhaO/ZW4Ba8ISud5CtEjnCTU6OR1yOq5zrrF+JP2o7om6rzLf" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <title>JobLister</title>
</head>
<body>

    <div class="container">
        <div class="header">
            <nav>
                <ul class="nav nav-pills pull-right">
                    <li role="presentation"><a href="index.php">Home</a></li>
                    <li role="presentation" ><a href="create.php">Create Listing</a></li>
                </ul>
            </nav>
            <h3><?php echo SITE_TITLE; ?></h3>
        </div>
        <?php displayMessage(); ?>