<?php
    class RepeatCounter
    {
        function countRepeats($inputWord, $inputSentence)
        {
            $sentenceArray = explode(" ", $inputSentence);
            $count = 0;
            foreach ($sentenceArray as $wordMatch) {
                if($inputWord == $wordMatch) {
                    $count++;
                }
            }
            return $count;
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
