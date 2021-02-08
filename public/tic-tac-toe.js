let cells = document.querySelectorAll(".cell");
let xIsNext = true;
let gameIsLive = true;
const xSymbol = "x";
const oSymbol = "o";
let winner = null;

document.querySelector(".button").addEventListener("click", function () {
  location.reload();
});

const checkWinner = () => {
  const topLeft = cells[0].classList[1];
  const topMiddle = cells[1].classList[1];
  const topRight = cells[2].classList[1];
  const middleLeft = cells[3].classList[1];
  const middleMiddle = cells[4].classList[1];
  const middleRight = cells[5].classList[1];
  const bottomLeft = cells[6].classList[1];
  const bottomMiddle = cells[7].classList[1];
  const bottomRight = cells[8].classList[1];

  if (topLeft && topLeft === topMiddle && topLeft === topRight) {
    gameIsLive = !gameIsLive;
    document.querySelector(".text").innerHTML = topLeft + " is winner!";
  } else if (
    middleLeft &&
    middleLeft === middleMiddle &&
    middleLeft === middleRight
  ) {
    gameIsLive = !gameIsLive;
    document.querySelector(".text").innerHTML = middleLeft + " is winner!";
  } else if (
    bottomLeft &&
    bottomLeft === bottomMiddle &&
    bottomLeft === bottomRight
  ) {
    gameIsLive = !gameIsLive;
    document.querySelector(".text").innerHTML = bottomLeft + " is winner!";
  } else if (topLeft && topLeft === middleLeft && topLeft === bottomLeft) {
    gameIsLive = !gameIsLive;
    document.querySelector(".text").innerHTML = topLeft + " is winner!";
  } else if (
    topMiddle &&
    topMiddle === middleMiddle &&
    topMiddle === bottomMiddle
  ) {
    gameIsLive = !gameIsLive;
    document.querySelector(".text").innerHTML = topMiddle + " is winner!";
  } else if (topRight && topRight === middleRight && topRight === bottomRight) {
    gameIsLive = !gameIsLive;
    document.querySelector(".text").innerHTML = topRight + " is winner!";
  } else if (topLeft && topLeft === middleMiddle && topLeft === bottomRight) {
    gameIsLive = !gameIsLive;
    document.querySelector(".text").innerHTML = topLeft + " is winner!";
  } else if (topRight && topRight === middleMiddle && topRight === bottomLeft) {
    gameIsLive = !gameIsLive;
    document.querySelector(".text").innerHTML = topRight + " is winner!";
  }
};
const handleCellClick = (e) => {
  if (gameIsLive) {
    const location = e.target.querySelector("span");
    if (location.textContent === "+" || location.textContent === "o") {
      returndocument.querySelector(".text").innerHTML = winner;
    }
    if (xIsNext) {
      location.textContent = "+";
      location.classList.add("rotate");
      e.target.classList.add("x");
      xIsNext = !xIsNext;
      document.querySelector(".text").innerHTML = "O is next!";
    } else {
      location.textContent = "o";
      e.target.classList.add("o");
      xIsNext = !xIsNext;
      document.querySelector(".text").innerHTML = "X is next!";
    }
    checkWinner();
  }
};

for (let cell of cells) {
  cell.addEventListener("click", handleCellClick);
}