//////////////////////////////////////////
//----------------------------------------
/* @Christina Darstbanian    
 * @Shabia Saeed      
//COMP249  
//Assignment #1 
Due Date (08-FEBRUARY-2021)*/
// The program starts with a welcome message and the objective of the assignment is to create a Ladder and Snake game that asks the user to input number of players( between 2-4) and then let each player flip a dice.Depending on number value of dice they get the game determines the order with player
//getting largest value of dice being the first player and the player with the smallest value of dice being the last one who plays the game with a descending order. In case if there is a tie between any of players then they have to roll the dice again to determine among them who plays the first
//and then once order is determined , players start the game with that order and they roll the dice every time and it iterates every time and their position  inside that border gets updated if player 3 for example is initially at position 5 and gets a current dice value of 4 then the new position  player 3 
// becomes 9 being the total sum of previous dice values. The game continues until one of the players jumps or reached the position 100 of that board. If meanwhile throughout the game any of the players hit a position where there is ladder it will climb to the top of the ladder and get in a much higher position.
// on the other hand if the player hits a position where there is tip of the head of the snake then the players climbs or goes down below at the tip of snake's tail. The positions of ladders and snakes are preset and fix as they are determined from the beginning of the program.If in any case any of the players rolls a dice
// any the sum of the value of the dice + their previous position's value exceeds 100 then they start to go backwards with the exceed amount for example if any player is at position 95 and gets a roll dice value of 6 then 95+6=101 the exceed value is 1 after 100 so the player actually goes back from 100-1 =99 sets the position 99 as new 
//since it can't go to a position such as 101 or after.  The program terminates with a closing message after it declares the winner of the game.
//---------------------------------------------------------------------------------------------

package ladderandsnake;
import java.util.*;
public class LadderAndSnake {
// where x is the number of players the user will input 	
	public int x = 2;
// this is the parameterized constructor that is set for the number of players 
	public LadderAndSnake(int x) {
		this.x= x;
	}
// the method flipDice that lets players flip a dice  and get a value each time between 1-6 	
	public static int flipDice() {
		int value = (int) (Math.random() * (7-1)+1);

		return value;
	}		
// the play method is  where actually the game starts with  players flip  their dice for first time it includes all necessary steps for the game 	
	public void play() {
		System.out.println();
		System.out.println("<<<<<<<<<< HERE IS OUR  GAME BOARD>>>>>>>>>>>>>>");
// GRID here represents the board of the game with a two dimensional array that gives 10 columns with 10 rows		
		int [][] GRID=new int[11][11];
// variable number is a number that will iterate over the rows 		
		int number=1;
// variable i here represents the number of rows		
		for (int i=10;i>=1;i--)
		{				
			if (i%2 !=0)
			{// y represents the second variable that will make the number of rows equal to number in the GRID
				for (int y=10; y>=1; y--, number++)
				{

					GRID[i][y]= number;					
				}	
			}
			else
			{// variable f is to iterate and make it the grid elements equal to a number in case if it is even 
				for(int f=1; f<=10;f++,number++)
				{

					GRID[i][f]=number;	
				}
			}
		}			
		for (int i=1; i<=10;i++)
		{
			for (int o=1; o<=10 ; o++)

			{	// printing the final grid with a tab between each column	
				System.out.print( GRID[i][o] + "\t");

			}
			System.out.println();
		}// variable n represents the length of number of object player 	
		int n=0;
// creating an array that have objects as players and then a second one with sorted players that will be after deciding their order of playing		
		Player[] player = new Player[x];
		Player[] playersorted = new Player[x];
		System.out.println();
		System.out.println(" Game is Played by " +  x + "  players (where " + x + " is the number of players set for that game).");
		System.out.println();
		System.out.println("Now deciding which player will start playing.");
		System.out.println();
// where i will be maximum  until the number of players 		
		for(int i = 1; i<=x;i++ ) {
// creating player objects where each player has 4 parameters and they are all initialized 			
			Player players=  new Player(i,flipDice(),7,0);
			player[i-1]= players;
			System.out.println(player[i-1]);
		}
		Player temp=  new Player(0,0,7,0);
		n= player.length;
		for(int i=0; i < n; i++){
			for( int j=1; j < (n-i); j++){
				if(player[j-1].getDice() > player[j].getDice()){
					//swap elements swap the higher values ones with the next one  
					temp = player[j-1];
					player[j-1]=player[j];
					player[j] = temp;

				}
			}
		}
		System.out.println();
		int count=0;// a variable to go over the loop and store the value of new sorted player object index
		for(int i = player.length-1; i>=0;i--,count ++) { // in order to print them with highest first we start with i = player.length then going down 
			playersorted[count]=player[i];
			System.out.println(playersorted[count]); 
		}
		System.out.println();
		for(int i = 1; i<x;i++ ) {
			if (player[i-1].getDice() == player[i].getDice()) { // if two of them have the same dice value then set them to  condition of set tie  which will make them flip dice again and then compare again 
				System.out.println("A tie was achieved between Player  "+ player[i-1].getId()+  " and " +  player[i].getId() + " Attempting to break the tie." );
				System.out.println();
				player[i-1].setTie(flipDice());
				player[i].setTie(flipDice());
			}
		}
		int u; // variable u that will go over the loop but now finally print the index of  sorted players after breaking the tie and have final order of players 
		for(u = 1; u<=x;u++ ) {
			if(playersorted[u-1].getTie()<7) {
				for(int i=0; i < n; i++){
					for( int j=1; j < (n-i); j++){
						if(playersorted[j-1].getTie() < playersorted[j].getTie()){
							//swap elements
							temp = playersorted[j-1];
							playersorted[j-1]=playersorted[j];
							playersorted[j] = temp;
						}
					}
				}

			}
			System.out.println(playersorted[u-1]);

		}System.out.println();
		System.out.print(" Reached final decision on order of playing:   ");
		for(u = 1; u<=x;u++ ) {
			System.out.print(playersorted[u-1].getId()+ "  ");
		}
		System.out.println();
		System.out.println();
		boolean oli=true; // oli here is a name of statement in order to make the loop happen while a condition is true 		
		while (oli) {	
			for(int i=0; i<playersorted.length ;i++) {
				playersorted[i].setDice(flipDice());
				int win= playersorted[i].getPosition()+ playersorted[i].getDice();// win is a variable where it is equal to sum of the position of the player + the value of dice they get 
				if(win >100) { // if  win exceeds the value of 100 then the player should go step backward with the amount the it exceeds 
					System.out.println(playersorted[i]);
					int e= win-100; // e is the exceeding value after 100 , meaning if player gets to 104 then e is 4 and the player will go back with value 4 from 100 so 100-4 = 96 new position of player
					win =100-e;
					playersorted[i].setPosition(win);
					System.out.println("player " + playersorted[i].getId() + "  was more than 100 so it went backward and  reached "  + playersorted[i].getPosition());
					continue; // making the program  to terminate the for loop check again control to the update expression.
				}
				switch(playersorted[i].getPosition()+ playersorted[i].getDice()) { // switch statement for ladder and snake positions
				case 100:
					System.out.println(playersorted[i]);
					System.out.println("player " +playersorted[i].getId()+ "  reached 100  so he  won the game ");
					System.out.println(); 
					System.out.println("<<<<<<< WE FOUND OUR WINNER FINALLY CONGRAGULATIONS !!!   IT IS THE END OF THE PROGRAM THANK YOU FOR PLAYING THIS GAME !  >>>>> ");
					System.exit(0);
				case 80:
					playersorted[i].setPosition(100);
					System.out.println(playersorted[i]);
					System.out.println("player " +playersorted[i].getId() +" hit a ladder");
					System.out.println("player " +playersorted[i].getId()+ "  reached 100  so he won the game");
					System.out.println();
					System.out.println("<<<<<<< WE FOUND OUR WINNER FINALLY CONGRAGULATIONS !!!   IT IS THE END OF THE PROGRAM THANK YOU FOR PLAYING THIS GAME !  >>>>> ");
					System.exit(0);
				case 16:
					playersorted[i].setPosition(6);
					System.out.println(playersorted[i]);
					System.out.println("player " +playersorted[i].getId() +" hit a snake");
					continue;

				case 48:
					playersorted[i].setPosition(30);
					System.out.println(playersorted[i]);
					System.out.println("player " +playersorted[i].getId() +" hit a snake");
					continue;
				case 64:
					playersorted[i].setPosition(60);
					System.out.println(playersorted[i]);
					System.out.println("player " +playersorted[i].getId() +" hit a snake");
					continue;

				case 93:
					playersorted[i].setPosition(68);
					System.out.println(playersorted[i]);
					System.out.println("player " +playersorted[i].getId() +" hit a snake");
					continue;
				case 95:
					playersorted[i].setPosition(24);
					System.out.println(playersorted[i]);
					System.out.println("player " +playersorted[i].getId() +" hit a snake");
					continue;

				case 97:
					playersorted[i].setPosition(76);
					System.out.println(playersorted[i]);
					System.out.println("player " +playersorted[i].getId() +" hit a snake");
					continue;
				case 98:
					playersorted[i].setPosition(78);
					System.out.println(playersorted[i]);
					System.out.println("player " +playersorted[i].getId() +" hit a snake");
					continue;

				case 1:
					playersorted[i].setPosition(38);
					System.out.println(playersorted[i]);
					System.out.println("player " +playersorted[i].getId() +" hit a ladder");
					continue;
				case 4:
					playersorted[i].setPosition(14);
					System.out.println(playersorted[i]);
					System.out.println("player " +playersorted[i].getId() +" hit a ladder");
					continue;
				case 9:
					playersorted[i].setPosition(31);
					System.out.println(playersorted[i]);
					System.out.println("player " +playersorted[i].getId() +" hit a ladder");
					continue;
				case 21:
					playersorted[i].setPosition(42);
					System.out.println(playersorted[i]);
					System.out.println("player " +playersorted[i].getId() +" hit a ladder");
					continue;
				case 28:
					playersorted[i].setPosition(84);
					System.out.println(playersorted[i]);
					System.out.println("player " +playersorted[i].getId() +" hit a ladder");
					continue;
				case 36:
					playersorted[i].setPosition(44);
					System.out.println(playersorted[i]);
					System.out.println("player " +playersorted[i].getId() +" hit a ladder");
					continue;
				case 51:
					playersorted[i].setPosition(67);				
					System.out.println(playersorted[i]);
					System.out.println("player " +playersorted[i].getId() +" hit a ladder");
					continue;
				case 71:
					playersorted[i].setPosition(91);
					System.out.println(playersorted[i]);
					System.out.println("player " +playersorted[i].getId() +" hit a ladder");
					continue;		
				default:
					playersorted[i].setDice(flipDice());
					playersorted[i].setPosition(playersorted[i].getDice()+playersorted[i].getPosition());
					System.out.println(playersorted[i]);

				}
				if(playersorted[i].getPosition()+ playersorted[i].getDice()==79) {
					playersorted[i].setPosition(19);
					System.out.println(playersorted[i]);
					System.out.println("player " +playersorted[i].getId() +" hit a snake");

				}
				if( playersorted[i].getPosition() >= 100) { // if any of the players wins the game then the game should stop  and therefore we make oli= false in order to stop the while loop

					oli= false;

				}	

			}
			System.out.println("Game not over, flipping again.");
			System.out.println();
		}

	}
}

		
			
			
			
			
			
				
	
		



	
