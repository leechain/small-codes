<?php  
/*
现实问题：
两种选择方案：
1、荤菜3元/两，素菜1元/两
2、荤素1.8元/两
问：如何选择更便宜？
通过计算得，素菜得质量是荤菜1.5倍时，两种方案价格一致

假如现在有20块钱，请问该如何购买？
*/
echo "假如现在有20块钱，请问该如何购买？","<br/>";
for($hun=0;$hun<=20/3;$hun++){
	for($su=0;$su<=20/1;$su++){
		if(3*$hun+$su==20){
			// echo "荤素各",$hun,"&nbsp",$su,"两","<br/>";
			if($su>1.5*$hun){
				echo "荤、素各",$hun,"&nbsp",$su,"两，","此时应该选择第一种方案：荤素分开称","<br/>";
			}elseif ($su<1.5*$hun) {
				echo "荤、素各",$hun,"&nbsp",$su,"两，","此时应该选择第二种方案：荤素一起称","<br/>";
			}elseif ($su==1.5*$hun) {
				echo "荤、素各",$hun,"&nbsp",$su,"两，","此时两种方案一样","<br/>";
			}
		}
	}
}



?>