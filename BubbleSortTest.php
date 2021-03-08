<?php


use PHPUnit\Framework\TestCase;

class BubbleSortTest extends TestCase {
    /** @test */
    public function SortTest() {
        $originArray = [1,10,2,5,6,7,5,7,2,1];
        foreach ($originArray as $key => $value) {
            for ($i = 0; $i < count($originArray)-1; $i++ ){
                if ($originArray[$i+1] < $originArray[$i]) {
                    $temp = $originArray[$i];
                    $originArray[$i] = $originArray[$i+1];
                    $originArray[$i+1] = $temp;
                }
            }
        }
        $this->assertEquals([1,1,2,2,5,5,6,7,7,10],$originArray);
    }
}
