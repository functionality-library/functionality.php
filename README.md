# <p align="center">Functionality.php (beta) 🔥</p>

<p float="right">
<!-- License -->
<img src="https://img.shields.io/github/license/functionality-library/functionality.php?style=for-the-badge" />
<!-- Stars -->
 <img src="https://img.shields.io/github/stars/functionality-library/functionality.php?style=for-the-badge" />
</p>

## About ✍️

- This Is A Php Library To Make Your Work Easier/Faster,<br />
  You Can See Functionalty.php Website From Here
- Project Created In 15 / 6 / 2022

## Installation 📦

  - Using Composer
    ```bash
    composer require functionality-library/functionality.php
    ```
  - Now You Can Use Functionality.php Library In Your Project
  - Example
    ```php
        require_once 'vendor/autoload.php';
        use Functionality\FunctionalityPhp\Functionality;
        
        echo Functionality::randomColor(); // Random Color
    ```
## Usage 📚
- Randoms functions
    - `Functionality::randomColor()` - Generate Random Color
    - `Functionality::randomBoolean()` - Generate Random Boolean
    - `Functionality::randomNumber()` - Generate Random Number
    - `Functionality::randomString()` - Generate Random String
    - `Functionality::randomHsl()` - Generate Random Hsl Color
    - `Functionality::randomHexColor()` - Generate Random Hex Color
- Numbers functions
    - `Functionality::getAvg(float $a, float $b)` - Get Average butween two numbers
    - `Functionality::isEven(float $number)` - Check If Number Is Even
    - `Functionality::isOdd(float $number)` - Check If Number Is Odd
    - `Functionality::isPrime(int $number)` - Check If Number Is Prime
    - `Functionality::reverseNumber(float $number)` - Reverse a number (e.g. 12345 -> 54321)
- Strings functions
    - `Functionality::isPalindrome(string $string)` - Check If String Is Palindrome
    - `Functionality::capitalize(string $string)` - Capitalize First Letter Of Words In String
    - `Functionality::reverseString(string $string)` - Reverse a string (e.g. abcdef -> fedcba)
- Arrays functions
    - `Functionality::filter(array $array, callable $callable)` - Filter Array By Callable
    - `Functionality::getFactors(int $number)` - Get Factors Of Number
    - `Functionality::maxArray(array $array)` - Get Max Value Of Array
    - `Functionality::minArray(array $array)` - Get Min Value Of Array
    - `Functionality::sumArray(array $array)` - Get Sum Of Array
    - `Functionality::randomElementFromArray(array $array)` - Get Random Element From Array
    - `Functionality::removeDuplicatesFromArray(array $array)` - Remove Duplicates From Array
    - `Functionality::shuffle(array $array)` - Sort Array Randomly

## To Get Started Contributing ☕

- First Clone The Repository

  ```bash
  git clone https://github.com/functionality-library/functionality.php.git
  ```

- Then Install Packages

  ```bash
  composer install
  ```

- Run Tests using `phpunit`

  ```bash
  composer run-script test
  ```

- Feel Free To Add What You Want! 
- If there is any issue, please open an issue on GitHub
- If you have any suggestion, please open an issue on GitHub
- If you have any question, please open an issue on GitHub
