<!-- Tugas Web 4 -->
<!-- Author: Wahyu Priambodo / 2207421048 / TMJ 3B -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Wahyu Priambodo">
  <meta name="keywords" content="Operators in PHP">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operator di PHP</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap');

    body {
      background-color: #f0f0f0;
      font-family: Poppins;
    }

    h4 { font-family: Helvetica, Arial, sans-serif; }
  </style>
</head>
<body>
  <!-- Kode PHP disisipkan di dalam HTML -->
  <h1>1. Operator Aritmetika</h1>
  <p>
  <?php
  $a = 5;
  $b = 2;

  // 1. Penjumlahan
  $c = $a + $b;
  echo "Hasil dari $a + $b = $c <hr>";

  // 2. Pengurangan
  $c = $a - $b;
  echo "Hasil dari $a - $b = $c <hr>";

  // 3. Perkalian
  $c = $a * $b;
  echo "Hasil dari $a * $b = $c <hr>";

  // 4. Pembagian
  $c = $a / $b;
  echo "Hasil dari $a / $b = $c <hr>";

  // 5. Sisa bagi (modulus)
  $c = $a % $b;
  echo "Hasil dari $a % $b = $c <hr>";

  // 6. Perpangkatan
  $c = $a ** $b;
  echo "Hasil dari $a ^ $b = $c <hr><br />";
  ?>
  </p>

  <h1>2. Operator Penugasan</h1>
  <p>
  <?php
  $a = 3;
  $b = 7;
  $a += 6;
  $b = ($c=9)+3;

  echo "Nilai var a = $a <br />";
  echo "Nilai var b = $b <br />";
  echo "Nilai var c = $c <br /><br />";
  ?>
  </p>

  <h1>3. Operator Logika (and, or, xor, &&, ||)</h1>
  <p>
  <?php
  $b = 4!=4;
  $c = 3+7 == 10;
  // $a = ($b and $c); printf('$a = %d <br />', $a);
  $a = ($b and $c); echo "\$a = $a <br />"; // false
  $a = ($b or $c); echo "\$a = $a <br />"; // true
  $a = ($b xor $c); echo "\$a = $a <br />"; // true
  $a = (!$b or $c); echo "\$a = $a <br />"; // true
  $a = $b && $c; echo "\$a = $a <br />"; // false
  $a = $b || $c; echo "\$a = $a <br /><br />"; // true
  ?>
  </p>

  <h1>4. Operator Bitwise (&, |, ^, <<, >>)</h1>
  <p>
  <?php
  $a = 60;
  $b = 13;

  // bitwise AND
  $c = $a & $b;
  echo "$a & $b = $c <br />";

  // bitwise OR
  $c = $a | $b;
  echo "$a | $b = $c <br />";

  // bitwise XOR
  $c = $a ^ $b;
  echo "$a ^ $b = $c <br />";

  // bitwise Shift Left
  $c = $a << $b;
  echo "$a << $b = $c <br />";

  // bitwise Shift Right
  $c = $a >> $b;
  echo "$a >> $b = $c <br /><br />";
  ?>
  </p>

  <h1>5. Operator Pembandingan</h1>
  <p>
  <?php
  $a = 80;
  $b = 90;

  // 1. equal operator
  $c = ($a == $b); // false
  echo "($a == $b) => $c <br />";

  // 2. not equal
  $c = ($a != $b); // true
  echo "($a != $b) => $c <br />";

  // 3. identical
  $c = ($a === $b); // true
  echo "($a === $b) => $c <br />";

  // 4. not identical
  $c = ($a !== $b); // false
  echo "($a !== $b) => $c <br />";

  // 5. lest than (<)
  $c = ($a < $b); // true
  echo "($a < $b) => $c <br />";

  // 6. greater than (>)
  $c = ($a > $b); // false
  echo "($a > $b) => $c <br />";

  // 7. lest than or equal to (<=)
  $c = ($a <= $b); // true
  echo "($a <= $b) => $c <br />";

  // 8. greater than or equal to (>=)
  $c = ($a >= $b); // false
  echo "($a >= $b) => $c <br />";
  ?>
  </p>

  <h1>6. Operator Increment (++) & Decrement (--)</h1>
  <p>
  <?php
  // post increment (a++)
  echo "<h4><u>Post-increment</u></h4>";
  $a = 5;
  echo "\$a = " . $a . "<br />";
  echo "\$a akan bernilai 5 = " . $a++ . " (operasi \$a++) <br />";
  echo "\$a akan bernilai 6 = " . $a . "<br />";

  // pre increment (++a)
  echo "<h4><u>Pre-increment</u></h4>";
  $a = 5; // reset a ke 5 lagi
  echo "$a = " . $a . "<br />";
  echo "\$a akan bernilai 6 = " . ++$a . " (operasi ++\$a) <br />";
  echo "\$a akan bernilai 6 = " . $a . "<br />";

  // post decrement (a--)
  echo "<h4><u>Post-decrement</u></h4>";
  $a = 5; // reset a ke 5 lagi
  echo "\$a = " . $a . "<br />";
  echo "\$a akan bernilai 5 = " . $a-- . " (operasi \$a--) <br />";
  echo "\$a akan bernilai 4 = " . $a . "<br />";

  // pre decrement (--a)
  echo "<h4><u>Pre-decrement</u></h4>";
  $a = 5; // reset a ke 5 lagi
  echo "\$a = " . $a . "<br />";
  echo "\$a akan bernilai 4 = " . --$a . " (operasi --\$a) <br />";
  echo "\$a akan bernilai 4 = " . $a . "<br />";
  ?>
  </p>

  <h1>7. Operator String</h1>
  <p>
  <?php
  $a = "kata pertama";
  $b = "dan kedua";
  $c = $a . " " . $b;
  echo "\$a = $a <br />";
  echo "\$b = $b <br />";
  echo "Setelah digabungkan menjadi: <strong>$c</strong> <br /><br />";
  ?>
  </p>

  <h1>8. Operator Ternary</h1>
  <p>
  <?php
  $like = true;

  // menggunakan operator ternary
  $ans = $like ? "iya" : "tidak";

  // menampilkan jawaban
  echo "Jawaban: $ans <br />";
  ?>
  </p>

  <h1>9. Operator Kontrol Error <em>(Error Control)</em></h1>
  <p>
  <?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  // const pi = 3.14;
  
  $a = pi;
  $res = tan ($a) or die("terdapat kesalahan, yaitu '$php_errormsg'");
  echo "\$res = $res <br />"; // muncul error jika konstanta pi tidak didefinisikan
  ?>
  </p>
</body>
</html>
