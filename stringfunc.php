<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String</title>
</head>
<body>
<?php
echo strlen('Hello!!   World');
echo '<br>';
echo strrev('This is my  first php string lssn');
echo '<br>';
echo str_replace('lssn','lesson','This is my  first php string lssn');
echo '<br>';
echo str_shuffle('This is my first php string lesson');
echo '<br>';
echo str_rot13('This is my first php string lesson');
echo '<br>';
echo str_word_count('This is my first php string lesson');
echo '<br>';
echo str_pad('This is my first php string lesson',25);



?>

</body>
</html>
