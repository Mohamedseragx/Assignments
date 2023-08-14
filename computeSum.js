function computeSum() {
    let sum = 0;
    for (let i = 1; i <= 10; i++) {
      sum += i;
    }
    return sum;
  }
  
  const sum = computeSum();
  console.log("The sum of the numbers from 1 to 10 is: " + sum);
  //The result would be 55