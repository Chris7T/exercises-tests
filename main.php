<?php

// Exercise 1: Simple Calculator
// Create a calculator that takes two numbers and an operator (+, -, *, /) and returns the result
// of the operation.

function calculator(float $number1, float $number2, string $operator): string
{
  switch ($operator) {
    case '+':
        return strval($number1 + $number2);
    case '-':
        return strval($number1 - $number2);
    case '*':
        return strval($number1 * $number2);
    case '/':
        if ($number2 != 0) {
            return strval($number1 / $number2);
        } else {
            return "Cannot divide by zero";
        }
    default:
        return "Unknown operator: $operator";
  };
}

echo "calculator(1, 2, '+') : " . calculator(1, 2, '+') . "\n";
echo "calculator(1, 2, '-') : " . calculator(1, 2, '-') . "\n";
echo "calculator(1, 2, '/') : " . calculator(1, 2, '/') . "\n";
echo "calculator(1, 0, '/') : " . calculator(1, 0, '/') . "\n";
echo "calculator(1, 2, '*') : " . calculator(1, 2, '*') . "\n";
echo "\n";

// Exercise 2: Prime Numbers
// Write a function that checks whether a number is prime or not. Then create a program that
// prints the first 10 prime numbers.

function isPrime(int $number): bool {
  if ($number <= 1) {
    return false;
  }
  for ($i = 2; $i * $i <= $number; $i++) {
    if ($number % $i === 0) {
      return false;
    }
  }
  return true;
}

function checkTenPrimeNumbers(): string {
  $primeCounter = 0;
  $currentNumber = 2;
  $listOfPrimes = '';
  while ($primeCounter < 10) {
    if (isPrime($currentNumber)) {
      $listOfPrimes .= $currentNumber . " ";
      $primeCounter++;
    }
    $currentNumber++;
  }

  return $listOfPrimes;
}

echo "isPrime(1) : " . (isPrime(1) ? "true" : "false") . "\n";
echo "isPrime(2) : " . (isPrime(2) ? "true" : "false") . "\n";
echo "isPrime(3) : " . (isPrime(3) ? "true" : "false") . "\n";
echo "isPrime(4) : " . (isPrime(4) ? "true" : "false") . "\n";
echo "isPrime(5) : " . (isPrime(5) ? "true" : "false") . "\n";
echo "\n";
echo "checkTenPrimeNumbers() : " . checkTenPrimeNumbers() . "\n";
echo "\n";

// Exercise 3: Factorial
// Write a function to calculate the factorial of a number. Next, create a program that allows the
// user to enter a number and displays the corresponding factorial.

function factorial(int $number): string {
  if ($number < 0) {
    return "Number must be non-negative";
  }
  $factorial = 1;
  for ($i = 2; $i <= $number; $i++) {
    $factorial *= $i;
  }
  return strval($factorial);
}

echo "factorial(-1) : " . factorial(-1) . "\n";
echo "factorial(0) : " . factorial(0) . "\n";
echo "factorial(1) : " . factorial(1) . "\n";
echo "factorial(2) : " . factorial(2) . "\n";
echo "factorial(3) : " . factorial(3) . "\n";
echo "factorial(4) : " . factorial(4) . "\n";
echo "factorial(5) : " . factorial(5) . "\n";
echo "\n";

// Exercise 4: Palindrome
// Create a function that checks whether a word is a palindrome (that is, whether it reads the
// same backwards and forwards). The program must ask the user for a word and inform
// whether or not it is a palindrome.

function isPalindrome(string $word): bool {
  $reversedWord = strrev($word);
  return strtolower($word) === strtolower($reversedWord);
}

echo "isPalindrome('test') : " . (isPalindrome('test') ? "true" : "false") . "\n";
echo "isPalindrome('hello') : " . (isPalindrome('hello') ? "true" : "false") . "\n";
echo "isPalindrome('hannah') : " . (isPalindrome('hannah') ? "true" : "false") . "\n";
echo "isPalindrome('php') : " . (isPalindrome('php') ? "true" : "false") . "\n";
echo "\n";

// Exercise 5: Table
// Create a program that receives a number from the user and displays the table of that
// number, from 1 to 10.

function displayTable(int $number): string {
  $table = '';
  for ($i = 1; $i <= 10; $i++) {
    $table .= $number . " x " . $i . " = " . $number * $i . "\n";
  }
  
  return $table;
}

echo "displayTable(5) : " . "\n" . displayTable(5) . "\n";

echo "\n";


// Exercise 6: Vowel Counter
// Create a function that counts the number of vowels in a string. The program should ask the
// user for a sentence and display how many vowels it has.

function countVowels(string $sentence): int {
    return preg_match_all('/[aeiou]/i', $sentence);
}

echo "countVowels('hello') : " . countVowels('hello') . "\n";
echo "countVowels('test test') : " . countVowels('test test') . "\n";
echo "countVowels('aeiou') : " . countVowels('aeiou') . "\n";
echo "countVowels('AEIOU') : " . countVowels('AEIOU') . "\n";
echo "countVowels('PHP') : " . countVowels('PHP') . "\n";
echo "\n";

// Exercise 7: Grade Average
// Create a program that takes a student's grades in three different subjects and calculates the
// average of the grades. Then display the calculated average.

function calculateAverage(float $grade1, float $grade2, float $grade3): float {
  return ($grade1 + $grade2 + $grade3) / 3;
}

echo "calculateAverage(85, 90, 95) : " . calculateAverage(85, 90, 95) . "\n";
echo "calculateAverage(70, 80, 90) : " . calculateAverage(70, 80, 90) . "\n";
echo "calculateAverage(55.5, 44.5, 50) : " . calculateAverage(55.5, 44.5, 50) . "\n";
echo "calculateAverage(100, 84, 92) : " . calculateAverage(100, 84, 92) . "\n";
echo "\n";

// Exercise 8: Interest Calculation
// Create a function that calculates the final value of an investment based on initial capital,
// interest rate, and investment time (in months). The program must prompt the user for these
// values and display the final value.

function calculateInvestmentFinalValue(float $initialCapital, float $interestRate, int $timeInMonths): float {
  return $initialCapital * pow((1 + $interestRate/100), $timeInMonths);
}

echo "calculateInvestmentFinalValue(1000, 5, 12) : " . calculateInvestmentFinalValue(1000, 5, 12) . "\n";
echo "calculateInvestmentFinalValue(2000, 3, 6) : " . calculateInvestmentFinalValue(2000, 3, 6) . "\n";
echo "calculateInvestmentFinalValue(5000, 2, 24) : " . calculateInvestmentFinalValue(5000, 2, 24) . "\n";
echo "calculateInvestmentFinalValue(10000, 1, 36) : " . calculateInvestmentFinalValue(10000, 1, 36) . "\n";
