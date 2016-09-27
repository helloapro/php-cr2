<?php
    class RepeatCounter
    {
        function countRepeats($inputWord, $inputSentence)
        {
            $wordCharacterArray = explode("", inputWord);
            $sentenceCharacterArray = explode("", $inputSentence);
            $count = 0;
            foreach ($characterArray as $characterMatch) {
                
            }

            // $inputSentence = preg_replace("#[[:punct:]]#", "", $inputSentence);
            // $sentenceArray = explode(" ", strtolower($inputSentence));
            // $count = 0;
            // foreach ($sentenceArray as $wordMatch) {
            //     if(strtolower($inputWord) == $wordMatch) {
            //         $count++;
            //     }
            // }
            // return $count;

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
