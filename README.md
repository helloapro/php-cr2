# Word Frequency #

#### Code review application to practice BDD in PHP, September 2016

#### By April Peng

## Description ##

This application counts the number in which a specific word appears within a sentence entered by the user.

## Setup/Installation Instructions ##

* Create new git repository
* Set up initial files and folders for php functionality
* Using the command line, navigate to the project's root directory
* Install dependencies by running $ composer install
* Navigate to the /web directory and start a local server with $ php -S localhost:8000
* Open a browser and go to the address http://localhost:8000 to view the application

## Specifications ##

* Two inputs consisting of a word and a sentence. The application confirms whether there is an instance of that word.
    * input1: "bike"
    * input2: "I love riding my bike to brunch!"
    * output: true

* Two inputs consisting of a word and a sentence. The application returns actual number of instances of that word in the sentence.
    * input1: "bike"
    * input2: "I love riding my bike to brunch!"
    * output: 1




## Known Bugs ##

There are no known bugs at this time.

## Languages/Technologies Used ##

* PHP
* Silex
* Twig

### License ###

*This application is licensed under the MIT license.*

Copyright (c) 2016 April Peng
