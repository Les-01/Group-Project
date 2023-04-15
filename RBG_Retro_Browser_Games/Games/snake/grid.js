// This declares the 'const' type variable 'GRID_SIZE' and assigns it a value of 21. This determines the size of the game board grid.
const GRID_SIZE = 21
// This declares the function 'randomGridPosition'. Using the 'export' declaration its values can be imported in another file.
export function randomGridPosition() {
    return {
        // This uses the 'Math.floor' , 'Math.random' and multipication combination to generate a random whole number. This is done because 'Math.random' will only generate a random number
        // between 0 and 1. Whereas Math.random used with Math.floor generates whole numbers. Here a random number would be generated between 0 and the value stored in the variable GRID_SIZE. 
        // The value 0 does not represent a coordinate on the CSS grid so + 1 is added to remove the possibility of a 0 result. 
        // Here a random number from 1 to 21 will be generated for both the X and Y coordinates.
        x: Math.floor(Math.random() * GRID_SIZE) + 1,
        y: Math.floor(Math.random() * GRID_SIZE) + 1
    }
}

// This declares the function 'outsideGrid' and passes it the variable 'position'. Using the 'export' declaration its values can be imported in another file.
export function outsideGrid(position) { 
    return (
        // This checks to see if the x OR y coordinates of the variable 'position' are outside the coordinates of the CSS grid.
        position.x < 1 || position.x > GRID_SIZE ||
        position.y < 1 || position.y > GRID_SIZE 
    )
}