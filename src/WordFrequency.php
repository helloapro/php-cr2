<?php
    class RepeatCounter
    {
        function countRepeats($inputWord, $inputSentence)
        {
            $sentenceArray = explode(" ", $inputSentence);
            foreach ($sentenceArray as $wordMatch) {
                if($inputWord == $wordMatch) {
                    return true;
                }
            }
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
