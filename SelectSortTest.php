<?php


use PHPUnit\Framework\TestCase;

class SelectSortTest extends TestCase {
    /** @test */
    public function Sort() {
        $originArray = [1,10,2,5,6,7,5,7,2,1];

        foreach ($originArray as $key => $value) {
            $min = $originArray[$key];
            $min_index = $key;
            for ($i = $key; $i < count($originArray) ; $i++ ) {
                if($originArray[$i] < $min) {
                    $min = $originArray[$i];
                    $min_index = $i;
                }
            }
            $temp = $originArray[$key];
            $originArray[$key] = $min;
            $originArray[$min_index] = $temp;
        }

        $this->assertEquals([1,1,2,2,5,5,6,7,7,10],$originArray);
    }
}
