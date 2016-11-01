<?php 

namespace EstDesc;

use Exception;

class EstDesc
{
    public static function desc($data = null) {
    	// $data = select $field from $entity;
    	if (isset($data) && is_array($data)) {
    		return asort($data);
    	}
    }

    public static function max($data) {
    	if (is_array($data)) {
    		return max($data);
    	}
    }

    public static function min($data) {
    	if (is_array($data)) {
    		return min($data);
    	}
    }

    public static function avg($data) {
    	if (is_array($data)) {
    		return array_sum($data) / count($data);
    	}
    }

    public static function sum($data) {
    	if (is_array($data)) {
    		return array_sum($data);
    	}
    }

    public static function median($data) {
	$dataCount = count($array);
	if ($dataCount > 0) {
            $middle_index = floor($dataCount / 2);
            sort($array, SORT_NUMERIC);
            $median = $array[$middle_index];
            // if even data
            if ($dataCount % 2 == 0) {
                $median = ($median + $array[$middle_index - 1]) / 2;
            }
            // not even
	    return $median;
	}
    }

    public static function mode($data) {
    	if (is_array($data)) {
    		$values = array_count_values($valueArray); 
			return array_search(max($values), $values);
    	}
    }

    public static function total($data) {
    	if (is_array($data)) {
    		return count($data);
    	}
    }

    public static function variance($data) {
    	if (is_array($data)) {
    		return stats_standard_deviation($data);
    	}
    }

}
