<?php
  $hello_world = "Saya siswa SMKN 1 Karawang Yang Lagi Belajar PHP";
  echo $hello_world;
  echo "<br />";
  // strlen() mengembalikan panjang string
  echo strlen($hello_world);
  echo "<br />";
  echo str_word_count($hello_world);
  echo "<br />";
  echo strrev($hello_world);
  echo "<br />";
  echo strpos($hello_world, "SMKN");
  echo "<br />";
  echo str_replace("SMKN 1 Karawang", "NESKAR", $hello_world);
  echo "<br />";
  echo substr($hello_world, 11, 16);
  echo "<br />";
  echo strtoupper($hello_world);
  echo "<br />";
  $neskar = substr($hello_world, 11, 16);
  echo strtolower($neskar);
?>