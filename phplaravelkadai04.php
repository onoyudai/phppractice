<?php
// 1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください

function times2($num){
    return $num * 2;
}
 echo times2(5);

// $a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function sumab($a,$b){
    return $a + $b;
}
   echo sumab(2,5);

// 3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください。
function product($arr){
    $result = 0;
    for ($i = 0; $i < count($arr); $i++){
        if($i == 0){
            $result += $arr[$i];
        }else{
            $result *= $arr[$i];
        }
    }
    return $result;
}
    echo product(array(1, 3, 5, 7, 9));

//4.【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください
function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
foreach($arr as $a){
     if($max_number < $a){
       ($max_number = $a);
     }
}

 return $max_number;
}
 
 echo max_array(array(6, 2, 3, 10, 5));
 //5.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください

//strip_tags
//HTMLタグを含む文字列からタグを取り除くスクリプト
$str = "<h1>strip_tags関数</h1>"
  . "<p>タグ取り除く</p>";
echo strip_tags($str) ."\n";
//array_push
//値を追加するサンプル
$members=array("apple","banana","grape");
            array_push($members,"orange","peach");
            print_r($members);
//array_merge
//配列の要素の最後に一つまたは複数の配列を結合するときに使う関数
$array1 = [1, 2, 3];
$array2 = [10, 20, 30];
$array3 = [100, 200, 300];
 
$array = array_merge($array1, $array2, $array3);
 
print_r($array);
//time, mktime
//mktime関数とはPHPの標準関数で指定した日時のタイムスタンプを取得するためのメソッド
$time = mktime(9);
  var_dump(date('Y年m月d日h時i分s秒', $time));
  print('<br/>');
//date
//指定された日時を任意の形式でフォーマットし、日付文字列を返す関数
echo date('Y/m/d');
echo '<br>';
?>