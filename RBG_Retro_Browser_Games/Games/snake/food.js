// This imports functions from 'snake.js'
import { onSnake, expandSnake } from './snake.js'

// This imports functions from 'grid.js'
import { randomGridPosition } from './grid.js'

var score = 0;
export { score };


// This declares the 'let' type variable 'food' and assigns value from the method 'getRandomFoodPosition' to it. 
// 'Let 'variable types must be initialised before they can be implemented.
let food = getRandomFoodPosition()

// This declares the 'const' type variable 'EXPANSION_RATE' and assigns its value.
const EXPANSION_RATE = 1


// This declares the function 'update', using the 'export' declaration its values can be imported in another file.
export function update() {
    // This IF statement executes the 'onSnake' method which has been passed the 'food' variable to determine if the coordinates of the snakes head is the same as the food.
    if (onSnake(food)) {
        score += 5;
        // If the coordinates match execute the 'expandSnake' method which has been passed the 'EXPANSION_RATE' variable to determine what value to expand the snake by.
        expandSnake(EXPANSION_RATE)
        // This assigns value from the method 'getRandomFoodPosition' to variable 'food'. 
        food = getRandomFoodPosition()
    }
   
}

// This declares the function 'draw' and passes 'gameBoard' to it. Using the 'export' declaration its values can be imported in another file.
export function draw(gameBoard) {
        // This declares the 'const' type variable 'foodElement' and assigns its value as a newly created div.
        const foodElement = document.createElement('div')
        // This sets the grid row start position as the value of 'food x'.
        foodElement.style.gridRowStart = food.y
        // This sets the grid column start position as the value of 'food y'.
        foodElement.style.gridColumnStart = food.x
        // This assigns the CSS properties of 'food' to the newly created div.
        foodElement.classList.add('food')
        // This adds the newly created div to 'gameBoard'.
        gameBoard.appendChild(foodElement)
}

// This declares the function 'getRandomFoodPosition'.
function getRandomFoodPosition() {
    // This declares the 'let' type variable 'newFoodPosition'.
    let newFoodPosition
    // This while loop states that while the value of the variable 'newFoodPosition' equals 'null', OR the 'onSnake' method with the variable 'newFoodPosition' 
    // passed to it returns 'True' execute the code within the statement.
    while (newFoodPosition == null || onSnake(newFoodPosition)) {
        // This assigns the result of the 'randomGridPosition' method to the variable 'newFoodPosition'.
        newFoodPosition = randomGridPosition()
    }
    // This will return the value assigned to the variable 'newFoodPosition' and apply the function 'getRandomFoodPosition' to it again untill a grid position 
    // is selected that isn't subject to the while loop
    return newFoodPosition
}