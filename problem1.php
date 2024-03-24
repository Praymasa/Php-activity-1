<?php
function noVowels($str) {
  $new_string = preg_replace('/[aeiouAEIOU]/', '', $str);

  return $new_string;
}

$string = "What matters most is how you see yourself";
$outputString = noVowels($string);
echo '<p>' . $string . '<p>';
echo '<p><b>' . $outputString . '<b><p>'; 

?>