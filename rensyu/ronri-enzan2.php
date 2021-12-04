https://ultimai.org/mdlsrc/pazl/waterSrider.html
ここを開いて､フローチャートを完成させつつ
単一のif文で評価式を作って正しく分岐させてください｡

身長 120cm以上 か 年齢 11才以上のどちらかを満たす｡
父兄同伴なら上記の条件は評価しなくても良い
(つまり, 父兄同伴か 120cm以上 か 年齢 11才以上なら乗れる
どれか一つでも満たせば乗れる ということです｡)
<?php
	$h= 120;  //身長
	$a = 11; //age
	$p = false;  //parents
  if ($p == false){
    if($h >= 120 || $a >= 11){
      echo "乗れる";
    } else {
      echo "乗れない";
    }
  } else {
    echo "同伴乗れる";
  }
  
  
?>


	チャレンジャーなら難易度が高いこっち
	https://ultimai.org/mdlsrc/pazl/waterSrider2.html

・身長 120cm以上 か 年齢 11才以上のどちらかを満たす｡
・父兄同伴なら上記の条件は評価しなくても良い
・体重は100Kg以下でなければならない
・全てに関係なく目や耳の疾病が無いこと

120cm以上 :1 , 120cm未満 :0
11才以上 :1  , 11才未満 : 0
父兄同伴 : 1 , 父兄非同伴 : 0 
100Kg以下 :1 , 100Kg未満: 0
疾病無	:1 , 疾病有 : 0 

100Kg以下 AND 疾病無 AND (父兄同伴 OR 120cm以上 OR 11才以上)
100Kg以下 x 疾病無 x ( 父兄同伴 + 120cm以上 + 11才以上)
	1	x	1	x	( 1 + 1 + 1 ) → 乗れる
	1	x	1	x	( 1 + 0 + 0 )	→ 乗れる
	1	x	0	x	( 1 + 0 + 0 )	→ 乗れない
	1	x	1	x	( 0 + 0 + 0 )	→ 乗れない
