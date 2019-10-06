<?php
$data = [23, 2, 2, 6, 32, 23, 52, 43, 56];
sort($data);
echo $_SERVER['REMOTE_ADDR'];
// var_dump($data);
// var_dump(quick($data));

function lengthOfLongestSubstring($s) {
	$strlen = strlen($s);
	if ($strlen <= 1) {
		return $strlen;
	}
	$subStrlen = [];
	for ($i = 0; $i < $strlen; $i++) {
		$subStrArr = [];
		$subStrArr[] = $s[$i];
		for ($j = $i + 1; $j < $strlen; $j++) {
			$subStrArr[] = $s[$j];
			if (count(array_unique($subStrArr)) != count($subStrArr)) {
				array_pop($subStrArr);
				break;
			}

		}
		$subStrlen = count($subStrArr) > count($subStrlen) ? $subStrArr : $subStrlen;
	}
	return count($subStrlen);
}

// 冒泡排序
function maopao($arr) {
	for ($i = 0; $i < count($arr); $i++) {
		for ($j = 0; $j < count($arr) - 1; $j++) {
			if ($arr[$i] > $arr[$j]) {
				$tem = $arr[$i];
				$arr[$i] = $arr[$j];
				$arr[$j] = $tem;
			}
		}
	}
	return $arr;
}

// 快速排序
function quick_sort($array) {
	if (count($array) <= 1) {
		return $array;
	}
	$key = $array[0];
	$left_arr = array();
	$right_arr = array();
	for ($i = 1; $i < count($array); $i++) {
		if ($array[$i] <= $key) {
			$left_arr[] = $array[$i];
		} else {
			$right_arr[] = $array[$i];
		}
	}
	$left_arr = quick_sort($left_arr);
	$right_arr = quick_sort($right_arr);
	return array_merge($left_arr, array($key), $right_arr);

}