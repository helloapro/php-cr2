<?php
    require_once 'src/WordFrequency.php';

    class WordFrequencyTest extends PHPUnit_Framework_TestCase
    {
        function test_word_search()
        {
            $test_repeatCounter = new RepeatCounter;
            $inputWord = "bike";
            $inputSentence = "I love riding my bike to brunch!";

            $result = $test_repeatCounter->countRepeats($input);

            $this->assertEquals(true, $result);
        }

    }
?>
