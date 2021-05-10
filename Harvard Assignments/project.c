#include <stdio.h>
#include <stdlib.h>
#include <math.h>
#include <ctype.h>
#include <string.h>
#include <stdlib.h>
#include <stdbool.h>
#include <cs50.h>

void getSymbolPosition(int *X, int *Y, char symbol) {
        int nX = 4;
        while(nX < 1 || nX > 3) {
            nX = get_int("Please pick horizontal position for symbol %c: ", symbol);
        }
        int nY = 4;
        while(nY < 1 || nY > 3) {
            nY = get_int("Please pick vertical position for symbol %c: ", symbol);
        }
        *X = nX;
        *Y = nY;
}

void printBoard(char board[3][3]) {
    printf("\n");
    for(int i = 2; i >= 0; i -= 1) {
        for(int j = 0; j < 3; j += 1) {
            printf(" %c", board[j][i]);
            if(j < 2) {
                printf(" |");
            }
        }
        if(i > 0) {
            printf("\n-----------\n");
        } else {
            printf("\n");
        }
    }
    printf("\n");
}

bool didPlayerWin(char board[3][3], char symbol) {
	return
	// Horizontal check.
	(board[0][0] == symbol && board[0][1] == symbol && board[0][2] == symbol) ||
	(board[1][0] == symbol && board[1][1] == symbol && board[1][2] == symbol) ||
	(board[2][0] == symbol && board[2][1] == symbol && board[2][2] == symbol) ||
	// Vertical check.
	(board[0][0] == symbol && board[1][0] == symbol && board[2][0] == symbol) ||
	(board[0][1] == symbol && board[1][1] == symbol && board[2][1] == symbol) ||
	(board[0][2] == symbol && board[1][2] == symbol && board[2][2] == symbol) ||
	// Diagonal check.
	(board[0][0] == symbol && board[1][1] == symbol && board[2][2] == symbol) ||
	(board[0][2] == symbol && board[1][1] == symbol && board[2][0] == symbol);
}

int main(int argc, string argv[]) {
    char board[3][3];
    for(int i = 0; i < 3; i += 1) {
        for(int j = 0; j < 3; j += 1) {
            board[j][i] = ' ';
        }
    }
    printf("Welcome to Tic-Tac-Toe\n");
    for(int i = 0; true; i += 1) {
        if(i % 2 == 0) {
            // If even number, X goes.
            int X, Y;
            while(true) {
                getSymbolPosition(&X, &Y, 'X');
                if(board[X - 1][Y - 1] != ' ') {
					printf("Position %d, %d is already taken!\n", X, Y);
                    continue;
                }
                board[X - 1][Y - 1] = 'X';
                break;
            }
            printBoard(board);
            if(didPlayerWin(board, 'X')) {
                printf("Player X won!\n");
                return 0;
            }
        } else {
            // If odd number, O goes.
            int X, Y;
            while(true) {
                getSymbolPosition(&X, &Y, 'O');
                if(board[X - 1][Y - 1] != ' ') {
                    printf("Position %d, %d is already taken!\n", X, Y);
                    continue;
                }
                board[X - 1][Y - 1] = 'O';
                break;
            }
            printBoard(board);
            if(didPlayerWin(board, 'O')) {
                printf("Player O won!\n");
                return 0;
            }
        }
    }
}
