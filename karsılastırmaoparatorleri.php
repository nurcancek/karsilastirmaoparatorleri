<?php
$a=5;
$b=5;
$c=20;
$d=4;
$username = "nurcancek";

$sonuc = ($a == $b);    # true
$sonuc = ($a != $b);    # false
$sonuc = ($username == 'nurcancek');    # true
$sonuc = ($username != 'nurcancek');    # false
$sonuc = ($a === $b);    # false
$sonuc = ($a !== $b);    # false
$sonuc = ($a > $b);
$sonuc = ($a >= $b);
$sonuc = ($a < $c);
$sonuc = ($a <= $c);
$sonuc = ($a <=> $b);
$sonuc = ($a <=> $c);
$sonuc = ($a <=> $c);

// echo var_dump($sonuc);
echo $sonuc;

?> 