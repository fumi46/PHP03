<?php
//課題１
$name = "fumi";
if($name == "fumi"){
    echo "私はfumiです。";
} else {
    echo "fumiではありません。";
}

//課題２
$total = 0;
for ($i = 0; $i <= 10000; $i++){
    $total += $i;
}
echo $total;

//課題３
$fruits = array("orange", "blueberry", "peach", "strawberry", "pineapple");
foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}

//課題４
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0){           //i÷5あまり0
    echo $i;
  }
}
