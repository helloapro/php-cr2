<?php
    require_once 'src/WordFrequency.php';

    class WordFrequencyTest extends PHPUnit_Framework_TestCase
    {
        function test_word_search()
        {
            $test_repeatCounter = new RepeatCounter;
            $inputWord = "bike";
            $inputSentence = "I love riding my bike to brunch!";

            $result = $test_repeatCounter->countRepeats($inputWord, $inputSentence);

            $this->assertEquals(true, $result);
        }

        function test_word_search_count()
       {
           $test_repeatCounter = new RepeatCounter;
           $inputWord = "cat";
           $inputSentence = "If you want to pet my cat, you'll have to ask my cat permission, because she's a very peculiar indeed.";

           $result = $test_repeatCounter->countRepeats($inputWord, $inputSentence);

           $this->assertEquals(2, $result);
       }

        function test_word_search_count_punctuation()
        {
            $test_repeatCounter = new RepeatCounter;
            $inputWord = "cat";
            $inputSentence = "If you want to pet my cat, you'll have to ask my cat permission, because she's a very peculiar cat.";

            $result = $test_repeatCounter->countRepeats($inputWord, $inputSentence);

            $this->assertEquals(3, $result);
        }
        //
        // function test_word_search_multi_caps()
        // {
        //     $test_repeatCounter = new RepeatCounter;
        //     $inputWord = "cat";
        //     $inputSentence = "Cat! Bat. Cat. Mat cat cat cat cat dog fish uggghhh catfish";
        //
        //     $result = $test_repeatCounter->countRepeats($inputWord, $inputSentence);
        //
        //     $this->assertEquals(6, $result);
        // }
        //
        // function test_word_search_multi_input_caps()
        // {
        //     $test_repeatCounter = new RepeatCounter;
        //     $inputWord = "Cat";
        //     $inputSentence = "Cat! Bat. Cat. Mat cat cat cat cat dog fish uggghhh catfish";
        //
        //     $result = $test_repeatCounter->countRepeats($inputWord, $inputSentence);
        //
        //     $this->assertEquals(6, $result);
        // }
    }
?>
