// This imports the functions 'update' as 'updateSnake', 'draw' as 'drawSnake', 'getSnakeHead' and 'snakeCollision'. And variable 'SNAKE_SPEED' from 'snake.js'.
import { update as updateSnake, draw as drawSnake, SNAKE_SPEED, getSnakeHead, snakeCollision } from './snake.js'
// This imports functions 'update' as 'updateFood' and 'draw' as 'drawFood' from 'food.js'.
import { update as updateFood, draw as drawFood, } from './food.js'
// This imports the variable 'score' from 'food.js.
import { score } from './food.js'
// This imports function 'outsideGrid' from 'grid.js'.
import { outsideGrid } from './grid.js'

// This declares the 'let' type variable 'lastRenderTime' and assigns it the value of '0'. 'Let' variable types must be initialised before they can be implemented.
let lastRenderTime = 0
// This declares the 'let' type variable 'gameOver' and assigns it the boolean value of 'false'.
let gameOver = false
// This declares the 'const' type variable 'gameBoard' and using the method 'getElementById' retrieves the element 'gameboard' from 'main.html' and assigns it to variable 'gameBoard'.
const gameBoard = document.getElementById('game-board')

// This is a game loop, a function that will repeat itself over and over again at set intervals. The game loop is the 'main' function of any animated game. It has been passed the current time, 
// this will create a time stamp of the time every time this function runs.
function main(currentTime) {
    // If the variable 'gameOver' equals true execute the code within the statement.
    if (gameOver) {
        // This creates a cookie in the browser called 'game_score' and stores the variable 'score' in it.
        document.cookie = "game_score="+score;
        // This navigates the user to the page 'snake_score.php'.
        window.location = 'snake_score.php'
        return
    }
    // This is the 'requestAnimationFrame' method that has been passed the 'main' function. This will request the next available frame to be rendered within the 'window' object and log the timestamp of when that frame is going to render.
    // This is essentially what drives the game loop.
    window.requestAnimationFrame(main)    
    // This declares the 'const' type variable 'secondsSinceLastRender' and assigns it the value of 'currentTime' minus 'lastRenderTime' divided by 1000. This is done as the values stored in both 
    // 'currentTime' and 'lastRenderTime' are in milliseconds the resulting value is in seconds.
    const secondsSinceLastRender = (currentTime - lastRenderTime) / 1000    
    // This IF statements controls the FPS and determines if a new frame needs to be rendered. If the value of 'secondsSinceLastRender' is less than 1 divided by the value of the variable 'SNAKE_SPEED', 
    // (currentley set to 10) then return out of this block of code, otherwise continue.
    if (secondsSinceLastRender < 1 / SNAKE_SPEED) return 
    // If the value of 'secondsSinceLastRender' is more than 1 divided by the value of the variable 'SNAKE_SPEED' the code block will continue to process and assign the value of 'currentTime' to the variable 
    // 'lastRenderTime'. This will update the value of last render time as each new frame is rendered.
    lastRenderTime = currentTime 
    // This calls the 'update' method.   
    update()
    // This calls the 'draw' method.
    draw()  
}

// This calls the 'requestAnimationFrame' method requesting the next available frame to be rendered within the 'window' object.
window.requestAnimationFrame(main)

// This declares the function 'update'
function update() {
    // This calls the function 'updateSnake'.
    updateSnake()    
    // This calls the function 'updateFood'.
    updateFood() 
    // This calls the function 'checkDeath'. 
    checkDeath()    
}

// This declares the function 'draw'
function draw() {
    // This sets the inner HTML of the gameBoard to nothing which which clears old elements from view.
    gameBoard.innerHTML = ''
    // This calls the function 'drawSnake' and passes the variable 'gameBoard' to it.
    drawSnake(gameBoard)
    // This calls the function 'drawFood' and passes the variable 'gameBoard' to it.
    drawFood(gameBoard)    
}

// This declares the function 'checkDeath'
function checkDeath() {
    // This assigns the result of the methods 'outsideGrid' and 'snakeCollision' to the variable 'gameOver'.
    gameOver = outsideGrid(getSnakeHead()) || snakeCollision()    
}