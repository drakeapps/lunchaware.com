<?php


header('Content-type', 'text/plain');

$sponge = "";
$text = str_split($_POST['text']);

$uppercase = true;


foreach ($text as $char) {
  if (strtoupper($char) != strtolower($char)) {
    $sponge .= ($uppercase) ? strtoupper($char) : strtolower($char);
    $uppercase = !$uppercase;
  } else {
    $sponge .= $char;
  }
}

print("<".$_POST['user_name']."> ".$sponge);


?>
