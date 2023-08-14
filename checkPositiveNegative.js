function checkPositiveNegative(number) {
    if (number > 0) {
      console.log("The number is positive.");
    } else if (number < 0) {
      console.log("The number is negative.");
    } else {
      console.log("The number is zero.");
    }
  }
  
  checkPositiveNegative(5);             // Output: The number is positive.
  checkPositiveNegative(-2);            // Output: The number is negative.
  checkPositiveNegative(0);             // Output: The number is zero.