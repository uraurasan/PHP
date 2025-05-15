<?php
$name = htmlspecialchars($_POST['name'], ENT_QUOTES);
$choices = htmlspecialchars($_POST['choices'], ENT_QUOTES);
$item = htmlspecialchars($_POST['item'], ENT_QUOTES);

echo $name;
echo $choices;
echo $item;