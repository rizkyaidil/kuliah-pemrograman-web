<?php
  $angka = 1;
  echo '<table border="1">';

  // Baris
  for( $baris = 1; $baris <= 10; $baris++ ) {
    echo '<tr>';
      
      // Kolom
      for( $kolom = 1; $kolom <= 5; $kolom++ ) {
        echo '<td>' . $angka . '</td>';
        $angka++;
      }
    echo '</tr>';
  }
  echo '</table>'
?>
