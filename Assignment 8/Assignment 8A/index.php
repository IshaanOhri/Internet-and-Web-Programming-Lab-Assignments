<?php
echo "<h1 style ='font:40px Arial; color:#ff0000'>ISHAAN OHRI 18BCE0265 Assignment 8-B</h1>";

// For writing the file
$numfile = fopen("file.txt", "w") or die("Unable to open file!");
for ($i = 0; $i < 10; $i++) {
  for ($j = 0; $j < 10; $j++) {
    $num = rand(1, 5);
    fwrite($numfile, $num . " ");
  }
  fwrite($numfile, "\n");
}
fclose($numfile);

// For reading the file
$numfile = fopen("file.txt", "r") or die("Unable to open file!");
for ($i = 0; $i < 10; $i++) {
  $line = fgets($numfile);
  $arr = explode(" ", $line);
  $arr = array_slice($arr, 0, 10);
  echo "<strong style ='font:20px Arial; color:#000000'>Input : </strong>";
  for ($j = 0; $j < 10; $j++) {
    echo $arr[$j] . " ";
  }
  echo '<br>';
  $uarr = array_unique($arr);
  echo "<strong style ='font:20px Arial; color:#000000'>Output : </strong>";
  foreach ($uarr as $el) {
    $count = 0;
    for ($j = 0; $j < 10; $j++) {
      if ($el == $arr[$j]) {
        $count++;
      }
    }
    if ($count % 2 != 0)
      echo $el . " ";
  }
  echo '<br>';
  echo '<br>';
}
fclose($numfile);
