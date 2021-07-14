<h1>v1</h1>
<?php
$dan = 9;
?>

<?php for ( $i = 1; $i <= 9; $i++ ) { ?>
  <div>
    <span><?=$dan?></span>
    *
    <span><?=$i?></span>
    =
    <span><?=$dan * $i?></span>
  </div>
<?php } ?>

<h1>v2</h1>
<?php
$dan = 9;

for ( $i = 1; $i <= 9; $i++ ) {
  $rs = $dan * $i;
  echo "<div>{$dan} * {$i} = {$rs}</div>";
}
?>