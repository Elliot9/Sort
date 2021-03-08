<?php


use PHPUnit\Framework\TestCase;

class QuickSortTest extends TestCase {
    /** @test */
    public function Sort() {
        $originArray = [1,10,2,5,6,7,5,7,2,1];
        $originArray = $this->division($originArray);
        $this->assertEquals([1,1,2,2,5,5,6,7,7,10],$originArray);
    }

    private function division(array $items) {
        $length = count($items);
        if($length <= 1) {
            return $items;
        }

        $base = $items[0];
        $left = [];
        $right = [];
        for ( $i = 1; $i<$length; $i++) {
            $items[$i] >= $base ? $right[] = $items[$i] : $left[] = $items[$i];
        }

        $left_array = $this->division($left);
        $right_array = $this->division($right);
        return array_merge($left_array, array($base), $right_array);
    }
}
