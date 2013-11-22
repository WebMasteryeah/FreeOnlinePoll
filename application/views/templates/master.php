<?php echo doctype('html5');  ?>  <!--use of html_helper module-->
<?php echo link_tag('design/css/polls.css') ?>
<?php echo link_tag('/design/navbar/css/stylesheet.css'); ?>

<html lang="en">
<head>
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</head>
<body>

<div id="container">
	<h1>Free Online Polls</h1>
    <div id="nav">
        <ul class="menu">
            <li><a class="<?php echo $voteA; ?>" href="http://localhost/FreeOnlinePoll/"><span>Vote</span></a></li>
            <li><a class="<?php echo $resultA; ?>" href="http://localhost/pollView.php"><span>Results</span></a></li>
            <li><a class="<?php echo $createA; ?>" href="http://localhost/FreeOnlinePoll/index.php/admin/create"><span>Create</span></a></li>
        </ul>
    </div>

    <!-- change the contents here -->
	<div id="contents">
        <?php echo $content; ?>
	</div>

	<p class="footer">SENG365 Assignment2</p>
</div>
</body>
</html>
