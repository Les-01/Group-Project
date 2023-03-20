// This imports functions and variables from 'snake.js'
import { update as updateSnake, draw as drawSnake, SNAKE_SPEED, getSnakeHead, snakeCollision } from './snake.js'

// This imports functions from 'food.js'
import { update as updateFood, draw as drawFood } from './food.js'

// This imports functions from 'grid.js'
import { outsideGrid } from './grid.js'

// This declares the 'let' type variable 'lastRenderTime' and assigns it's value. 'Let 'variable types must be initialised before they can be implemented.
let lastRenderTime = 0

// This declares the 'let' type variable 'gameOver' and assigns it's value.
let gameOver = false

// This declares the 'const' type variable 'gameBoard' and retrieves the element gameboard from 'main.html' and assigns it to variable.
const gameBoard = document.getElementById('game-board')

// This is a game loop, a function that will repeat itself over and over agian at set intervals.
// This is the 'main' function (game loop) it has been passed the current time, this will create a time stamp of the exact time this function runs.
function main(currentTime) {
    // If the variable 'gameOver' equals true execute the code within the statement.
    if (gameOver) {
        // The 'confirm' method will produce the message within the parenthesis.
        // If the user clicks 'OK' the window will refresh and the game will start again.
        if (confirm('GAME OVER Play Again?')) {
            window.location = '/group_project/snake/main.html'
        }
        // If the user clicks cancel the return statement will stop the rest of the code from executing.
        return
        // window.location = '/add the main website page here
    }
    // This is the 'requestAnimationFrame' method that has been passed the 'main' function. This will request the next available frame to be rendered 
    // and log the timestamp of when that frame is going to render.      
    window.requestAnimationFrame(main)
    // This declares the 'const' type variable 'secondsSinceLastRender' and assigns it the value of 'currentTime' minus 'lastRenderTime' divided by 1000. 
    // This is done as the values stored in both 'currentTime' and 'lastRenderTime' are in milliseconds the resulting value is in seconds.
    const secondsSinceLastRender = (currentTime - lastRenderTime) / 1000    
    // This IF statements controls the FPS and determines if a new frame needs to be rendered.
    // If the value of 'secondsSinceLastRender' is less than 1 divided by the value of the variable 'SNAKE_SPEED' (currentley set to 2) then return out of 
    // this block of code, otherwise continue.
    if (secondsSinceLastRender < 1 / SNAKE_SPEED) return 
    // If the value of 'secondsSinceLastRender' is more than 1 divided by the value of the variable 'SNAKE_SPEED' the code block will continue to process
    // and assign the value of 'currentTime' to the variable 'lastRenderTime'. This will update the value of last render time as each new frame is rendered.
    lastRenderTime = currentTime    
    update()
    draw()
}
window.requestAnimationFrame(main)

// This declares the function 'update'
function update() {
    // This calls the function 'updateSnake' from 'snake.js'.
    updateSnake()
    // This calls the function 'updateFood' from 'food.js'.
    updateFood()
    checkDeath()
}

// This declares the function 'draw'
function draw() {
    // This sets the inner HTML of the gameBoard to nothing which which clears old elements from view.
    gameBoard.innerHTML = ''
    // This calls the function 'drawSnake' from 'snake.js' and passes 'gameBoard' to it.
    drawSnake(gameBoard)
    // This calls the function 'drawFood' from 'food.js' and passes 'gameBoard' to it.
    drawFood(gameBoard)
}

// This declares the function 'checkDeath'
function checkDeath() {
    // This assigns the result of the methods 'outsideGrid' and 'snakeCollision' to the variable 'gameOver'.
    gameOver = outsideGrid(getSnakeHead()) || snakeCollision()
}