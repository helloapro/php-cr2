<?php
    class RepeatCounter
    {
        function countRepeats($inputWord, $inputSentence)
        {
            $inputSentence = preg_replace("#[[:punct:]]#", "", $inputSentence);
            $sentenceArray = explode(" ", $inputSentence);
            $count = 0;
            foreach ($sentenceArray as $wordMatch) {
                if($inputWord == $wordMatch) {
                    $count++;
                }
            }
            return $count;

            //original code using reg expression
            // $sentenceArray = preg_split("/[,.?!\s]/", strtolower($inputSentence));
            // $count = 0;
            // foreach ($sentenceArray as $wordInstance) {
            //     if (strtolower($inputWord) == $wordInstance) {
            //         $count++;
            //     }
            // }
            // return $count;
        }
    }
?>
