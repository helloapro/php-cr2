<?php
    class RepeatCounter
    {
        function countRepeats($inputWord, $inputSentence)
        {
            $sentenceArray = preg_split("/[,.?!\s]/", strtolower($inputSentence));
            $count = 0;
            foreach ($sentenceArray as $wordInstance) {
                if (strtolower($inputWord) == $wordInstance) {
                    $count++;
                }
            }
            return $count;
        }
    }
?>
