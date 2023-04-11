// This declares the 'let' type variable 'inputDirection' and assigns its value. 'Let 'variable types must be initialised before they can be implemented.
let inputDirection = { x: 0, y: 0 }

// This declares the 'let' type variable 'lastInputDirection' and assigns its value.
let lastInputDirection = { x: 0, y: 0 }

// This is the event listener, litening for a keydown event.
window.addEventListener('keydown', e => {
    // This declares a switch statement which will execute a specific block of code dependent upon which key is pressed.
    switch (e.key) {
        // This is the 'ArrowUp' case.
        case 'ArrowUp' || 'W':
            // This IF statement declares that if the value of the y coordinate assigned to the variable 'lastInputDirection' is not equal to zero stop executing this code.
            // This code stops the snake from being able to move back on itself.
            if (lastInputDirection.y !== 0) break
            // This will decrease the value of the 'y' coordinate by 1
            inputDirection = { x: 0, y: -1 }
            break
        // This is the 'ArrowDown' case.
        case 'ArrowDown':
            // This IF statement declares that if the value of the y coordinate assigned to the variable 'lastInputDirection' is not equal to zero stop executing this code.
            // This code stops the snake from being able to move back on itself.
            if (lastInputDirection.y !== 0) break
            // This will increase the value of the 'y' coordinate by 1
            inputDirection = { x: 0, y: 1 }
            break
        // This is the 'ArrowLeft' case.
        case 'ArrowLeft':
            // This IF statement declares that if the value of the y coordinate assigned to the variable 'lastInputDirection' is not equal to zero stop executing this code.
            // This code stops the snake from being able to move back on itself.
            if (lastInputDirection.x !== 0) break
            // This will decrease the value of the 'x' coordinate by 1
            inputDirection = { x: -1, y: 0 }
            break
        // This is the 'ArrowRight' case.
        case 'ArrowRight':
            // This IF statement declares that if the value of the y coordinate assigned to the variable 'lastInputDirection' is not equal to zero stop executing this code.
            // This code stops the snake from being able to move back on itself.
            if (lastInputDirection.x !== 0) break
            // This will increase the value of the 'x' coordinate by 1
            inputDirection = { x: 1, y: 0 }
            break
    }
})

// This declares the function 'getInputDirection'. Using the 'export' declaration its values can be imported in another file.
export function getInputDirection() {
    // This assigns the value of the variable 'inputDirection' to the variable 'lastInputDirection' creating a record of the last directional input after each keydown event.
    lastInputDirection = inputDirection
    return inputDirection
}