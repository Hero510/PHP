<?php

/*1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください*/
function double($a) {
    return $a * 2;
}
echo double(10);

/*2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください*/
function add($a, $b) {
    return $a + $b;
 }
echo add(1,2);

/*3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください*/
function arr($arr) {
  $total = 1;
  foreach($arr as $value){
    $total *= $value;
  }
  return $total;
}
echo arr(array(1, 3, 5, 7, 9)) . "\n";

/*4.【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください*/
function max_array($arr) {
 $max_number = $arr[0];
 foreach($arr as $a) {
   if ($max_number < $a) {
     $max_number = $a;
   }
 }
 return $max_number;
}
echo max_array(array(1, 3, 5, 7, 9)) . "\n";

/*5.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください*/
//HTMLのタグを取り除く
$str = "<h1>tech/<h1>"
 . "<p>boost/<p>" .
 "<h2>php/<h2>";
 echo strip_tags($str) . "\n";
 
 //「array_push」配列に１つ以上要素を追加する
 $fruits = ['apple', 'banana', 'lemon'];
 array_push($fruits, 'grape', 'pineapple');
 print_r($fruits);
 
 //「array_merge」配列に1つまたは複数の要素を追加する
 $items1 = ['item1', 'item2', 'item3'];
 $items2 = ['items4', 'items5'];
 $items3 = ['items6', 'items7'];
 
 $item_merge = array_merge($items1, $items2, $items3);
 print_r($item_merge);
 
 //「time」UNIXタイムスタンプを取得。　協定世界時での経過時間
 echo '現在のUNIXタイムスタンプ: '.time();
 
 //「mktime」指定したUNIXタイムスタンプを取得。
 $timestamp = mktime(0, 0, 0, 8, 1, 2017);
 echo $timestamp;
 
 //「date」任意の形式でフォーマットし、日付文字列を返す関数
 echo date('Y/m/d');
 echo '<br>';
 echo date('Y-m-d H:i:s');
 echo '<br>';
 echo date ('Y年m月d日 H時i分s秒');
 echo '<br>';
 