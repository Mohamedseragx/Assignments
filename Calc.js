function calculator(operator, num1, num2) {
    let result;
    
    switch (operator) {
      case "+":
        result = num1 + num2;
        break;
      case "-":
        result = num1 - num2;
        break;
      case "*":
        result = num1 * num2;
        break;
      case "/":
        result = num1 / num2;
        break;
      default:
        console.log("Invalid operator.");
        return;
    }
    
    console.log("Result: " + result);
  }
  
  calculator("+", 5, 3);           // Output: Result: 8
  calculator("-", 10, 4);          // Output: Result: 6
  calculator("*", 2, 6);           // Output: Result: 12
  calculator("/", 10, 2);          // Output: Result: 5