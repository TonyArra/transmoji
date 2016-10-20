<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Translate emojis between devices.">
    <meta name="author" content="Tony Arra">
    <link rel="icon" href="favicon.ico">

    <title>TransMoji</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/css/bootstrap.min.css"
          integrity="sha384-2hfp1SzUoho7/TsGGGDaFdsuuDL0LX2hnUp6VkX3CUQ2K4K+xjboZdsXyp4oUHZj" crossorigin="anonymous">
    <link href="css/main.css" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-fixed-top navbar-dark bg-inverse">
    <a class="navbar-brand" href="#">TransMoji</a>
    <ul class="nav navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="http://www.tonyarra.com">Tony Arra<span class="sr-only">(main)</span></a>
        </li>
    </ul>
</nav>

<div class="container" id="main">

    <?php
    require_once("../vendor/autoload.php");
    ?>

    <div id="filters">
        <form>
            <fieldset>
                <legend>Filter by</legend>
                <label for="name">Name</label> <input type="text" name="name" id="name">
                <label for="tags">Tags</label> <input type="text" name="tags" id="tags">
            </fieldset>
        </form>
    </div><!-- /#filters -->

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>Apple</th>
                <th>Google</th>
                <th>Twitter</th>
                <th>EmojiOne</th>
                <th>Facebook</th>
                <th>Windows</th>
                <th>Samsung</th>
                <th>GMail</th>
                <th>Name</th>
            </tr>
            </thead>
            <tbody>
            <tr></tr>
            </tbody>
        </table>
    </div><!-- /.table-responsive -->

</div><!-- /#main -->

<footer>
    Emoji data and images from by <a href="http://unicode.org/emoji/charts/full-emoji-list.html">Unicode.org</a>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"
        integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY"
        crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js"
        integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.4/js/bootstrap.min.js"
        integrity="sha384-VjEeINv9OSwtWFLAtmc4JCtEJXXBub00gtSnszmspDLCtC0I4z4nqz7rEFbIZLLU"
        crossorigin="anonymous"></script>
</body>
</html>
