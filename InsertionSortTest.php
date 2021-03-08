<?php


use PHPUnit\Framework\TestCase;

class InsertionSortTest extends TestCase {
    /** @test */
    public function Sort() {
        $originArray = [1,10,2,5,6,7,5,7,2,1];
        foreach ($originArray as $key => $value) {
            if($key != 0) {
                for($i = $key; $i > 0; $i--) {
                    if($originArray[$i] < $originArray[$i-1]) {
                        $tmp = $originArray[$i-1];
                        $originArray[$i-1] = $originArray[$i];
                        $originArray[$i] = $tmp;
                    }
                }
            }
        }
        $this->assertEquals([1,1,2,2,5,5,6,7,7,10],$originArray);
    }
}
