// This is the event listener for 'DOMContentLoaded' (Document Object Model). This is neccessary as the js script link to this file is in the head of the html file.
// This assures that the html file is fully processed so the js file can interact with it.
window.addEventListener('DOMContentLoaded', () => {
    // This declares the 'const' type variable 'tiles' and assigns it the result from the 'querySelectorAll' method converted into an array. 
    // Here the 'querySelectorAll' method has been passed the class '.tile' as the css selector to search for, so all elements within the document that have the class '.tile' will be 
    // stored in an array assigned to the variable 'tiles'.
    const tiles = Array.from(document.querySelectorAll('.tile'));
    // This declares the 'const' type variable 'playerDisplay' and assigns it the result from the 'querySelector' method. 
    // Here the 'querySelector' method has been passed the class '.display-player' as the css selector to search for, so the first element within the document that has the class '.display-player'
    // will be assigned to the variable 'playerDisplay'.
    const playerDisplay = document.querySelector('.display-player');
    // This declares the 'const' type variable 'resetButton' and assigns it the result from the 'querySelector' method. 
    // Here the 'querySelector' method has been passed the id '#reset' as the css selector to search for, so the first element within the document that has the id '#reset' will be assigned to the 
    // variable 'resetButton'.
    const resetButton = document.querySelector('#reset');
    // This declares the 'const' type variable 'announcer' and assigns it the result from the 'querySelector' method. 
    // Here the 'querySelector' method has been passed the class '.announcer' as the css selector to search for, so the first element within the document that has the class '.announcer' will be 
    // assigned to the variable 'announcer'.
    const announcer = document.querySelector('.announcer');

    // 'Let' type variables must be initialised before they can be implemented.
    // This declares the 'let' type variable 'board' and assigns an array with 9 empty string elements to it.
    let board = ['', '', '', '', '', '', '', '', ''];
    // This declares the 'let' type variable 'currentPlayer' and assigns the value 'X' to it.
    let currentPlayer = 'X';
    // This declares the 'let' type variable 'isGameActive' and assigns the value 'true' to it.
    let isGameActive = true;

    // This declares 'const' type variable 'PLAYER_X_WON' and assigns the value 'PLAYER_X_WON' to it.
    const PLAYER_X_WON = 'PLAYER_X_WON';
    // This declares 'const' type variable 'PLAYER_O_WON' and assigns the value 'PLAYER_O_WON' to it.
    const PLAYER_O_WON = 'PLAYER_O_WON';
    // This declares 'const' type variable 'DRAW' and assigns the value 'DRAW' to it.
    const DRAW = 'DRAW';


    /*
        Indexes within the board
        [0] [1] [2]
        [3] [4] [5]
        [6] [7] [8]
    */

    // This declares the 'const' type variable 'winningConditions' and assigns an array with 8 arrays stored in it as its value.
    // Each array within the 'winningConditions' array represents a winning game board configuration.
    const winningConditions = [
        [0, 1, 2],
        [3, 4, 5],
        [6, 7, 8],
        [0, 3, 6],
        [1, 4, 7],
        [2, 5, 8],
        [0, 4, 8],
        [2, 4, 6]
    ];

    // This is the function 'handleResultValidation' it determines if the game has reached a conclusion by looping through the 'winningConditions' array which contains 
    // sub arrays to see if the current game state matches a game winning combination.
    function handleResultValidation() {
        // This declares the 'let' type variable 'roundWon' and assigns the value 'false' to it. 
        let roundWon = false;
        // This is the for loop that loops through the 'winningConditions' array to determine if the current game state matches a game winning combination.
        for (let i = 0; i <= 7; i++) {
            // This declares the variable 'winCondition' and assigns the value of the array winningConditions which contains sub arrays to it after passing it the variable 'i'. 
            const winCondition = winningConditions[i];
            // This declares the 'const' type variable 'a' on each loop of the for loop it will be assigned the value of the array 'board' and passed the first element of a sub array 
            // within the 'winningConditions' array.
            const a = board[winCondition[0]];
            // This declares the 'const' type variable 'b' on each loop of the for loop it will be assigned the value of the array 'board' and passed the second element of a sub array 
            // within the 'winningConditions' array.
            const b = board[winCondition[1]];
            // This declares the 'const' type variable 'c' on each loop of the for loop it will be assigned the value of the array 'board' and passed the third element of a sub array 
            // within the 'winningConditions' array.
            const c = board[winCondition[2]];
            // If any of the variables 'a', 'b' or 'c' contain empty strings meaning the tiles have not been clicked yet skip this loop iteration and continue executing the for loop.
            if (a === '' || b === '' || c === '') {
                continue;
            }
            // If the variables 'a', 'b' and 'c' all match a winning condition assign the value 'true' to the variable 'roundWon' and exit the for loop using 'break'.
            if (a === b && b === c) {
                // Assigns the value of 'true' to the variable 'roundWon'.
                roundWon = true;
                // Exits the for loop using 'break'.
                break;
            }
        }

        // If the variable 'roundWon' equals 'true'.
        if (roundWon) {
            // Here the announce method acting as a function will announce the winner of the game either 'Player X' or 'Player O' based on the value of 'currentPlayer'.
            announce(currentPlayer === 'X' ? PLAYER_X_WON : PLAYER_O_WON);
            // This creates a cookie and stores the the value of the variable 'Min' in it
            document.cookie = "minutes="+Min;
             // This creates a cookie and stores the the value of the variable 'Sec' in it
             document.cookie = "seconds="+Sec;
             // This assigns the value of 'false' to the variable 'isGameActive'
            isGameActive = false;
            // This navigates the user to the page 'noughts_and_crosses_score.php'
             window.location = 'noughts_and_crosses_score.php';          
            // This ends the functions and stops executing the scripts
            return;
        }
        
        // If there is currently no matching 'wincondition' and there are no more spaces left on the game board.
        if (!board.includes(''))
        // Here the announce method acting as a function will announce the game is a draw.
        announce(DRAW);
        }

        // This declares the 'const' type variable 'announce' which operates as a function that announces the end game state to the users.
        const announce = (type) => {
            // This is a switch case statement.
            switch(type){
                // If player 'O' wins.
                case PLAYER_O_WON:
                    announcer.innerHTML = 'Player <span class="playerO">O</span> Won';
                    break;
                    // If player 'X' wins.
                case PLAYER_X_WON:
                    announcer.innerHTML = 'Player <span class="playerX">X</span> Won';
                    break;
                    // If the game is a draw.
                case DRAW:
                    announcer.innerText = 'DRAW';
            }
            // This removes 'hide' from the announcer class list displaying the information to the user.
            announcer.classList.remove('hide');
        };

        // This declares the 'const' type variable 'isValidAction' which operates as a function that determines if a player move is valid.
        const isValidAction = (tile) => {
            // If a selected tile already has a value of either 'X' or 'O' return 'false'. 
            if (tile.innerText === 'X' || tile.innerText === 'O'){
                // returns false.
                return false;
            }
            // If a selected tile does not already have a value return 'true'. 
            return true;
        };

        // This declares the 'const' type variable 'updateBoard' which operates as a function that updates the game board.
        const updateBoard =  (index) => {
            // This sets the value of the element in the 'board' array at the position passed to it in 'index' to be equal to the value of the variable 'currentPlayer'.
            board[index] = currentPlayer;
        }

        // This declares the 'const' type variable 'changePlayer' which operates as a function that changes the active player after a valid game turn.
        const changePlayer = () => {
            // Here template literal is implemented to interpolate the variable 'currentPlayer' with either 'X' or 'O' depending on which players turn it is. 
            // This value combined with the string 'player' is then removed from the playerDisplay classList.
            playerDisplay.classList.remove(`player${currentPlayer}`);
            // This changes the current active player. Here if the player was 'X' they're changed to 'O' and if it was 'O' they're changed to 'X'.
            currentPlayer = currentPlayer === 'X' ? 'O' : 'X';
            // This updates the player display to display the current player.
            playerDisplay.innerText = currentPlayer;
            // Here template literal is implemented to interpolate the variable 'currentPlayer' with either 'X' or 'O' depending on which players turn it is. 
            // This value combined with the string 'player' is then added to the playerDisplay classList.
            playerDisplay.classList.add(`player${currentPlayer}`);
        }

        // This declares the 'const' type variable 'userAction' which operates as a function that represents one turn in the game by being called when a player clicks on a tile taking their turn.
        const userAction = (tile, index) => {
            // Here the value of the tile is passed to the 'isValidAction' function to determine if the player click is a valid game move and the value of the variable 'isGameActive' is checked to 
            // determine the game state, eg has the game ended. If both conditions are true the code block will execute.
            if(isValidAction(tile) && isGameActive) {
                // This sets the text within the clicked tile to match the player that clicked on it, either 'X' or 'O'
                tile.innerText = currentPlayer;
                // Here template literal is implemented to interpolate the variable 'currentPlayer' with either 'X' or 'O' depending on which players turn it is. 
                // This value combined with the string 'player' is then added to the tile classList.
                tile.classList.add(`player${currentPlayer}`);
                // This calls the 'updateBoard' method and passes it the index value of the tile clicked which updates the 'board' array.
                updateBoard(index);
                // This calls the 'handleResultValidation' method to determine if the game has reached a conclusion.
                handleResultValidation();
                // This calls the 'changePlayer' method.
                changePlayer();
            }
        }
        
        // This declares the 'const' type variable 'resetBoard' which operates as a function that resets the game board to default parameters.
        const resetBoard = () => {
            // This sets the array 'board' to contain 9 empty string elements.
            board = ['', '', '', '', '', '', '', '', ''];
            // This assigns the value 'true' to the variable 'isGameActive'
            isGameActive = true;
            // This adds the 'hide' class to the announcer to hide the text from the display.
            announcer.classList.add('hide');
            // By default player 'X' starts the game. 
            // Here 'IF' the value of the variable 'currentPlayer' is equal to 'O' the 'changePlayer' method is called.
            if (currentPlayer === 'O') {
                changePlayer();
            }
            // Here a for each loop is applied to the array 'tiles' which contains all 9 of the game tiles that make up the game board. This effectively updates the UI.
            tiles.forEach(tile => {
                // This sets the inner text of the tile to be an empty string.
                tile.innerText = '';
                // This removes the 'playerX' class from the tile class list, if it had one.
                tile.classList.remove('playerX');
                // This removes the 'playerO' class from the tile class list, if it had one.
                tile.classList.remove('playerO');
            });
        }

        // Here the 'forEach' method is applied to the variable 'tiles' which has an array assigned to it which contains all the css game grid tiles. 
        // This will apply the context of the code block to every element in the array.
        tiles.forEach( (tile, index) => {
            // This will add an event listener to every tile in the array. Once an event takes place via a 'click' the 'userAction' function will be called with a reference to that specific tile
            // or array element along with the index of it. The 'tile' reference is used to modify the UI and the index is used to update in memory board array or game logic.
            tile.addEventListener('click', () => userAction(tile, index));
        });

        // This is the event listener for the game reset button. 
        resetButton.addEventListener('click', resetBoard);
    });