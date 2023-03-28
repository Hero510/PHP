<?php
/*1.$name にあなたの名前を代入し、 if文で $name があなたの名前だったら 「私は あなたの名前 です」、
もし違ったら「あなたの名前ではありません」と表示するように実装してください*/
$name = "Hiroki";
if ($name != "Hiroki") {
    echo "私はあなたの名前です。";
}else{
    echo "私はあなたの名前ではありません。";
}

/*2.for文を使って、1から10000までの合計の値を表示してください*/
for($i = 0, $total = 0;$i <= 10000; $i++) {
    $total += $i;
} 
echo $total;

/*3.for文を使って、1から10000までの合計の値を表示してください*/
$fruits = array("banana", "apple", "lemon", "orange", "grape");
foreach($fruits as $fruit){
    echo "要素は" . $fruit;
    echo "\n";
}

/*5.【応用】下記のプログラムのバグを修正し、1から100までの間で5の倍数のみ表示するようにしてみてください*/
$start = 1; $end = 100;
for($i = $start; $i <= $end; $i++){
    if($i % 5 == 0) {echo $i;
    }
}