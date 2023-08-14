function computeCircleArea(radius) {
    const area = Math.PI * Math.pow(radius, 2);
    return area;
  }
  
  function computeCircleCircumference(radius) {
    const circumference = 2 * Math.PI * radius;
    return circumference;
  }
  
  const radius = 5;
  const area = computeCircleArea(radius);
  const circumference = computeCircleCircumference(radius);
  
  console.log("Area: " + area);
  console.log("Circumference: " + circumference);