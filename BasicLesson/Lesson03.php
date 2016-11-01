

<?php include_once("header.php"); ?>

<h2>Lesson03 隣接交換法</h2>
<p>配列dataを隣接交換法で昇順にソートして結果を出力するプログラムを作成してください。</p>
<br/>
	
	<?php
	// ★ ここから----------
		// 1～10までの整数が格納された配列data
		$data = range(1, 10);
		
		// dataの中身をランダムに配置
		shuffle($data);
		
		// 出力
		print "<p>初期配列</p>";
		print_r($data);
	// ★ ----------ここまでの部分は変更しないでください。
	?>
<br/>
	<?php
		// 配列dataの要素数を取得
		$intArrSize = count($data);
		
		// 0から要素数分ループ
		for($i=0; $i<$intArrSize-1; $i++){
		
			// 最大要素数から$iでぶつかるまでループ
			for($j=$intArrSize-1; $i<$j; $j--){
			
				// $data[$j]の値 < $data[$j-1]の値の場合は交換
				if($data[$j] < $data[$j-1]){
					// $data[$j]の値を$tmpに退避
					$tmp = $data[$j];
					
					// $data[$j]に$data[$j-1]を格納
					$data[$j] = $data[$j-1];
					
					// $data[$j-1]に$tmpを格納
					$data[$j-1] = $tmp;
				}
			}
			// 途中経過出力
			print "<p>途中経過{$i}</p>";
			print_r($data);
		}
		
		// 最終結果出力
		print "<p>最終結果</p>";
		print_r($data);
		
	?>
	
<?php include_once("footer.php"); ?>