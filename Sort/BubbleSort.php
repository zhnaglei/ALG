<?php


/**
 * 冒泡排序
 * -------------------------------------------------------------
 *
 * 时间复杂度: O (n^2)
 *
 * -------------------------------------------------------------
 * 思路分析：就是像冒泡一样，每次从数组当中 冒一个最大的数出来。 
 * -------------------------------------------------------------
 * 你可以这样理解：（从小到大排序）存在10个不同大小的气泡，
 * 由底至上的把较少的气泡逐步地向上升，这样经过遍历一次后最小的气泡就会被上升到顶（下标为0）
 * 然后再从底至上地这样升，循环直至十个气泡大小有序。
 * 在冒泡排序中，最重要的思想是两两比较，将两者较少的升上去
 *
 */

function BubbleSort(array $arr){
	$count = count($arr);
	for($i=1;$i<$count;$i++){
		for($j=0;$j<$count-$i;$j++){
			if($arr[$j] > $arr[$j+1]){
				$tmp       = $arr[$j];
				$arr[$j]   = $arr[$j+1];
				$arr[$j+1] = $tmp;
			}
		}
	}
	return $arr;
}

var_dump(BubbleSort([4, 21, 41, 2, 53, 1, 213, 31, 21, 423]));

/*
测试结果：
array (size=10)
  0 => int 1
  1 => int 2
  2 => int 4
  3 => int 21
  4 => int 21
  5 => int 31
  6 => int 41
  7 => int 53
  8 => int 213
  9 => int 423
  */
