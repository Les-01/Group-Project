// This imports functions from 'input.js'
import { getInputDirection } from './input.js'

// This declares the 'const' type variable 'SNAKE_SPEED' and assigns its value, using the 'export' declaration its values can then be imported in another file.
// This can be used to directly control the games FPS.
export const SNAKE_SPEED = 10

// This declares the 'const' type variable 'snakeBody' and declares an array containing x and y coordinates refering to the CSS grid, and assigns that array to the variable.
// This array will determine the snakes position on the grid.
const snakeBody = [{ x:11, y:11 }]

// This declares the 'let' type variable 'newSegments' and assigns its value. 'Let 'variable types must be initialised before they can be implemented.
let newSegments = 0

// This declares the function 'update', using the 'export' declaration its values can be imported in another file.
export function update() {
    // This calls the 'addSegments' method.
    addSegments()
    // This declares the 'const' type variable 'inputDirection' and assigns the value of the method 'getInputDirection' to it.
    const inputDirection = getInputDirection()

    for (let i = snakeBody.length - 2; i >= 0; i--) {
        snakeBody[i + 1] = {...snakeBody[i] }
    }

    snakeBody[0].x += inputDirection.x
    snakeBody[0].y += inputDirection.y
}

// This declares the function 'draw' and passes 'gameBoard' to it. Using the 'export' declaration its values can be imported in another file.
export function draw(gameBoard) {
    // For each element in the array 
    snakeBody.forEach(segment => {
        // This declares the 'const' type variable 'snakeElement' and assigns its value as a newly created div.
        const snakeElement = document.createElement('div')
        // This sets the grid row start position as the value of 'segment y'.
        snakeElement.style.gridRowStart = segment.y
        // This sets the grid column start position as the value of 'segment x'.
        snakeElement.style.gridColumnStart = segment.x
        // This assigns the CSS properties of 'snake' to the newly created div.
        snakeElement.classList.add('snake')
        // This adds the newly created div to 'gameBoard'.
        gameBoard.appendChild(snakeElement)
    })
}

// This declares the function 'expandSnake' and passes the variable 'amount' to it. Using the 'export' declaration its values can be imported in another file.
export function expandSnake(amount) {
    // This adds the value of the variable 'amount' to the existing value of the variable 'newSegments'.
    newSegments += amount
} 

// This declares the function 'onSnake' and passes the variables 'position' and 'ignoreHead' (set to false) to it. Using the 'export' declaration its values can be imported in another file.
export function onSnake(position, { ignoreHead = false} = {}) {
    // This returns the array value stored in the variable 'snakeBody' and applies the 'some' method to it where each element/segment in the array will have the 'onSnake' function test applied to it.
    // If no element/segment meets the focus of the test the 'some' method will return 'false' if an element meets the focus of the test the 'some' method will return 'true'.
    return snakeBody.some((segment, index) => {
        // This IF statement checks the value assigned to the variable 'ignoreHead' and the index, If both values equal 0 it return false.
        if (ignoreHead && index === 0) 
        return false
        // This returns the method 'equalPositions' and passes the variables 'segment' and 'position' to it. This is the focus of the 'some' test.
        return equalPositions(segment, position)
    })
} 

// This declares the function 'getSnakeHead'. Using the 'export' declaration its values can be imported in another file.
export function getSnakeHead() {
    // This returns the value of the first element/segment in the array assigned to the variable 'snakeBody'. (The first element is the head of the snake).
    return snakeBody[0]
}

// This declares the function 'snakeCollision'. Using the 'export' declaration its values can be imported in another file.
export function snakeCollision() {
    // This calls the 'onSnake' method passing it the first element in the array assigned to the variable 'snakeBody' and the variable 'ignoreHead' with its value assigned as true.
    // This will apply the coordinates of the head of the snake to the 'onSnake' method checking if the coordinates match any other element in the array ignoring the coordinates of the 
    // first element in the array effectively checking to see if the snake has collided with itself.
    return onSnake(snakeBody[0], {ignoreHead: true})
}

// This declares the function 'equalPositions' and passes the variables 'position1' and 'position2' to it.
function equalPositions(position1, position2) {
    // If the values of the variables 'position1' and 'position2' are equal to oneanother the method 'equalPositions' will return true.
    return position1.x === position2.x && position1.y === position2.y
}

// This declares the function 'addSegments' 
function addSegments() {
    // This is a for loop that loops through all elements/segments in the variable 'snakeBody' containing the array.
    for (let i = 0; i < newSegments; i++) {
        // This uses the 'push' method to append elements to the end of an array and return the new length of the array.
        snakeBody.push({...snakeBody[snakeBody.length - 1] })
    }

    // This assigns the value of 0 to the variable 'newSegments'.
    newSegments = 0
}