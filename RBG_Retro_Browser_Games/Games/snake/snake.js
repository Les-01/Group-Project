// This imports function 'getInputDirection' from 'input.js'
import { getInputDirection } from './input.js'

// This declares the 'const' type variable 'SNAKE_SPEED' and assigns it the value '10'. Using the 'export' declaration its values can then be imported in another file.
// This can be used to directly control the games FPS.
export const SNAKE_SPEED = 10
// This declares the 'const' type variable 'snakeBody' and declares an array containing 'x' and 'y' coordinates both with the value '11' (referring to the CSS grid) and assigns that array to the variable 'snakeBody'.
// This array will determine the snakes position on the grid.
const snakeBody = [{ x:11, y:11 }]
// This declares the 'let' type variable 'newSegments' and assigns it the value '0'. 'Let' variable types must be initialised before they can be implemented.
let newSegments = 0

// This declares the function 'update', using the 'export' declaration its values can be imported in another file.
export function update() {
    // This calls the 'addSegments' method.
    addSegments()
    // This declares the 'const' type variable 'inputDirection' and assigns the value of the method 'getInputDirection' to it.
    const inputDirection = getInputDirection()
    // This is a 'for' loop that loops through every element in the 'snakeBody' array excluding the last element (The Tail). 
    // 'i' equals the length of the 'snakeBody' array - 2, if 'i' is less than or equal to '0' decrement the value of 'i' by 1 and execute the code block once. Then run the loop again.
    // This will apply the parameters of the code block to all the elements in the 'snakeBody' array except for the last element.
    for (let i = snakeBody.length - 2; i >= 0; i--) {
        // This selects the element in the 'snakeBody array with an index of 'i' plus 1 which selects the last element in the array then assigns it the index value of 'i' as a new object in the array.
        // This changes the grid coordinates of the element at end of the array to match the grid coordinates of the next element in the array. As the 'for' loop continues to loop it will update 
        // the grid position of the entire snake body. This makes the tail and body of the snake follow the head as it moves around the CSS grid via 'inputDirection' 'X' and 'Y' coordinates.
        snakeBody[i + 1] = {...snakeBody[i] }
    }
    // This adds the 'X' coordinate value stored in the variable 'inputDirection' to the coordinate value of the first element in the array 'snakeBody' (The Snakes Head). This controls the snakes direction.
    snakeBody[0].x += inputDirection.x
    // This adds the 'Y' coordinate value stored in the variable 'inputDirection' to the coordinate value of the first element in the array 'snakeBody' (The Snakes Head). This controls the snakes direction.
    snakeBody[0].y += inputDirection.y
}

// This declares the function 'draw' and passes 'gameBoard' to it. Using the 'export' declaration its values can be imported in another file.
export function draw(gameBoard) {
    // For each element in the 'snakeBody' array.
    snakeBody.forEach(segment => {
        // This declares the 'const' type variable 'snakeElement' and assigns it the value of the 'createElement' method with a 'div' passed to it enabling the creation of a new 'div'.
        const snakeElement = document.createElement('div')
        // This sets the grid row start position as the value of 'segment y'.
        snakeElement.style.gridRowStart = segment.y
        // This sets the grid column start position as the value of 'segment x'.
        snakeElement.style.gridColumnStart = segment.x
        // This assigns the CSS properties of 'snake' to the newly created div.
        snakeElement.classList.add('snake')
        // Here the 'appendChild' method is used to add the newly created div to the array 'snakeBody' and then add it to the 'gameBoard'. This is the starting piece of the snake.
        gameBoard.appendChild(snakeElement)
    })
}

// This declares the function 'expandSnake' and passes the variable 'amount' to it. Using the 'export' declaration its values can be imported in another file.
export function expandSnake(amount) {
    // This adds the value of the variable 'amount' to the existing value of the variable 'newSegments'.
    newSegments += amount
} 

// This declares the function 'onSnake' and passes the variables 'position' and 'ignoreHead' (set to false) to it. Using the 'export' declaration its values can be imported in another file.
export function onSnake(position, { ignoreHead = false } = {}) {
    // This returns the array value stored in the variable 'snakeBody' and applies the 'some' method with the values stored in 'segment' and 'index' passed to it. Using the 'some' method each element in the array will have 
    // the 'onSnake' method applied to it as a test. If no element meets the parameters of the test, the 'some' method will return 'false', if an element meets the parameters of the test the 'some' method will return 'true'.
    return snakeBody.some((segment, index) => {
        // This IF statement checks the values assigned to the variables 'ignoreHead' and  'index', If both values equal '0' it returns false.
        if (ignoreHead && index === 0) 
        return false
        // This returns the method 'equalPositions' and passes the variables 'segment' and 'position' to it. This is the focus of the 'some' test.
        return equalPositions(segment, position)
    })
} 

// This declares the function 'getSnakeHead'. Using the 'export' declaration its values can be imported in another file.
export function getSnakeHead() {
    // This returns the value of the first element in the array assigned to the variable 'snakeBody'. (The first element is the head of the snake).
    return snakeBody[0]
}

// This declares the function 'snakeCollision'. Using the 'export' declaration its values can be imported in another file.
export function snakeCollision() {
    // This calls the 'onSnake' method passing it the first element in the array assigned to the variable 'snakeBody' and the variable 'ignoreHead' with its value assigned as true. This will pass the coordinates of the head of the snake 
    // to the 'onSnake' method checking if the coordinates of the head match any other element in the array (the coordinates of the body segments) ignoring the coordinates of the first element in the array (the coordinates of the head) to 
    // determine if the snake has collided with itself.
    return onSnake(snakeBody[0], {ignoreHead: true})
}

// This declares the function 'equalPositions' and passes the variables 'position1' and 'position2' to it.
function equalPositions(position1, position2) {
    // If the values of the variables 'position1' and 'position2' are equal to oneanother the method 'equalPositions' will return true.
    return position1.x === position2.x && position1.y === position2.y
}

// This declares the function 'addSegments' 
function addSegments() {
    // This is a 'for' loop, IF 'i' is less than the value of the variable 'newSegments' increment 'i' by 1 and execute the code block once. Then run the loop again.
    for (let i = 0; i < newSegments; i++) {
        // This uses the 'push' method to append an element to the end of the 'snakeBody' array and return the new length of the array.
        snakeBody.push({...snakeBody[snakeBody.length - 1] })
    }

    // This resets the value of the variable 'newSegments' by assigning its value to 'o' again.
    newSegments = 0
}