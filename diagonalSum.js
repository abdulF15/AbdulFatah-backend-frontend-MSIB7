function DiagonalSum(number) {
  let sum = 0;
  for (let i = 0; i < number.length; i++) {
    for (let j = 0; j < number[i].length; j++) {
      if (i === j || i + j === number.length - 1) {
        sum += number[i][j];
      }
    }
  }
  return sum;
}

console.log(
  DiagonalSum([
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
  ])
);

console.log(
  DiagonalSum([
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12],
    [13, 14, 15, 16],
  ])
);
