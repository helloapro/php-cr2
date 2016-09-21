# Word Frequency #

#### Code review application to practice BDD in PHP, September 2016

#### By April Peng

## Description ##

This application counts the number in which a specific word appears within a sentence entered by the user.

## User Setup/Installation Instructions ##

* Clone git repository
* Using the command line, navigate to the project's root directory
* Install dependencies by running $ composer install
* Navigate to the /web directory and start a local server with $ php -S localhost:8000
* Open a browser and go to the address http://localhost:8000 to view the application

## Specifications ##

* Two inputs consisting of a word and a sentence. The application searches if word exists in sentence.
    * input1: "bike"
    * input2: "I love riding my bike to brunch!"
    * output: true

* Two inputs consisting of a word and a sentence. The application searches and counts instances of that word.
    * input1: "cat"
    * input2: "If you want to pet my cat, you'll have to ask my cat permission, because she's a very peculiar cat indeed."
    * output: 2

* Two inputs consisting of a word and a sentence. The application searches and counts multiple instances of that word without consideration of punctuation.
    * input1: "cat"
    * input2: "If you want to pet my cat, you'll have to ask my cat permission, because she's a very peculiar cat."
    * output: 3

<!-- * Two inputs consisting of a word and a sentence. The application searches and counts multiple instances of that word without consideration of capitalization or punctuation.
    * input1: "Cat"
    * input2: "If you want to pet my cat, you'll have to ask my cat permission, because she's a very peculiar cat."
    * output: 3 -->

## Known Bugs ##

There are no known bugs at this time.

## Languages/Technologies Used ##

* PHP
* Silex
* Twig

### License ###

*This application is licensed under the MIT license.*

Copyright (c) 2016 April Peng
