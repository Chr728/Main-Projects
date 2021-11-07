//////////////////////////////////////////
//----------------------------------------
/* @Christina Darstbanian  
 * @Shabia Saeed    
//COMP249  
//Assignment #1 
  Due Date (08-FEBRUARY-2021)*/
//----------------------------------------

package ladderandsnake;
import java.util.*;
import java.util.Scanner;
import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;
import java.util.Arrays;
import java.io.FileReader;
public class PlayLadderAndSnake {

		public static void main(String[] args) {
			System.out.println();
			System.out.println("//////////////////////////////////////////////////////////////////////////");
			System.out.println("//////////////////////////////////////////////////////////////////////////");
			System.out.println("    <<<<<<<<<<<<<<  WELCOME TO LADDER AND SNAKE GAME  >>>>>>>>>>>>>>>>       ");
			System.out.println(" <<<<<<<<<<<  Program written by Christina Darstbanian and Shabia Saeed >>>>> ");
			System.out.println("//////////////////////////////////////////////////////////////////////////");
			System.out.println("//////////////////////////////////////////////////////////////////////////");
			System.out.println();
			int x=2;
			// attempts is the maximum number of bad attempts user can have, it is maximum 4 bad attempts then the program exits.
			int attempts=1;
			// a do while loop it goes until while condition turns wrong
			do {
				System.out.println("Enter the # of players for your game – Number must be between 2 and 4 inclusively: ");	
			    Scanner scan = new Scanner(System.in);
			    x= scan.nextInt();
			    // ha is a random variable to iterate over a loop
				for(int ha=1;ha<=4;ha++,attempts ++) {	 
				if(x<2 || x>4 && ha<4) {
				 System.out.println("Bad Attempt "+ ha+ "- Invalid # of players. Please enter a # between 2 and\r\n" + 
					"4 inclusively: ");
			     	x=scan.nextInt();
				}
					if(ha==4 && (x<2 || x>4)) {
					System.out.println("Bad Attempt "+ ha + "! You have exhausted all your chances. Program will terminate! ");
					System.exit(0);}
			 
			
				
			}
			
			

			} while (attempts <=4 && (x<2 || x>4)); // loop continues until x is outside the bound and 4 attempts user already used or attempted
				if( x==2 || x<=4) {
			 LadderAndSnake ladderAndSnake = new LadderAndSnake(x);
			ladderAndSnake.play(); // after checking all conditions now the game can start
			
			
			}
				
		}
		
	}

	
	
	
	
	
	
	
	
	
	
	
	
	




































//	public static void main(String[] args) {	
//	
//		Scanner scan = new Scanner(System.in);
//		System.out.print("enter x:");
//		int x= scan.nextInt();
//		int c=0;
//		int V=1;
//		int D= 1;
//		int  k =1;	
//		int number=0;
//		int n=0;
//		int[] g = new int[x+5];
//		int[] b = new int[x+5];	
//		
//		for ( n=0;    n< x && x>=2 && x<5  && c<5; n++ ,c++)
//
//
//
//
//		{   
//			LadderAndSnake L = new LadderAndSnake();
//
//				b[c]= c+1;
//				g[n]=L.play();
//				System.out.println("Player  " + b[c]+ "   got a dice value of  " + g[n]);
//			
//		
//		}
//		
//		for (n=0,c=0;n<x;n++, b[c]++) {
//			if (g[n]> g[n+1]  && g[n]>g[n+2] && g[n]>g[n+3] && g[n]>g[n+4] && g[n]!= g[n+1]  && g[n]!=g[n+2] && g[n]!=g[n+3] &&g[n]!=g[n+4])
//			{
//			
//				g[n+1]=g[n];
//				g[n+2]=g[n];
//				g[n+3]=g[n];
//				g[n+4]=g[n];
//					
//				
//				 System.out.println("player" + b[c]+  "   starts the game " + g[n] + " ");
//				
//			
//			 if (g[n]== g[n+1] || g[n]==g[n+2] || g[n]==g[n+3] || g[n]==g[n+4]) {
//				
//				
//				System.out.println("there is a tie between player  ");
//				
//			}
//			}	 
//			}
			

			
			
//			
			
		
//			else
//			{
//				System.out.println("n");
//			}
//			
			
//
//			
		
//		if (x==2) {
//			int number1= L.play();
//			int number2= L.play();
//			System.out.println("Player1  " + "   got a dice value of  " + number1);
//			System.out.println("Player2  " +  "   got a dice value of  " + number2);
//			if(number1>number2 ) {
//				System.out.println("Reached final decision on order of playing: Player1,Player2");
//			}
//			else {
//				System.out.println("Reached final decision on order of playing: Player2,Player1");
//
//			}
//		}
//		if (x==3) {
//			int number1= L.play();
//			int number2= L.play();
//			int number3= L.play();
//			System.out.println("Player1  " + "   got a dice value of  " + number1);
//			System.out.println("Player2  " +  "   got a dice value of  " + number2);
//			System.out.println("Player3  " + "   got a dice value of  " + number3);
//			if(number1>number2 &&number1>number3   && number2>number3) {
//				System.out.println("Reached final decision on order of playing: Player1,Player2,Player3");
//				
//			}
//			if(number1>number2 &&number1>number3   && number3>number2) {
//				System.out.println("Reached final decision on order of playing: Player1,Player3,Player2");
//				
//			}
//			if(number2>number1 &&number2>number3   && number1>number3) {
//				System.out.println("Reached final decision on order of playing: Player2,Player1,Player3");
//				
//			}
//		
//			if(number2>number1 &&number2>number3   && number3>number1) {
//				System.out.println("Reached final decision on order of playing: Player2,Player3,Player1");
//				
//			}
//			
//			if(number3>number1 &&number3>number2   && number1>number2) {
//				System.out.println("Reached final decision on order of playing: Player3,Player1,Player2");
//				
//			}
//		
//			if(number3>number1 &&number3>number1   && number2>number1) {
//				System.out.println("Reached final decision on order of playing: Player3,Player2,Player1");
//				
//			}
//			
//		}
//		
//		
//		
//		
//		
//		
//		
		
//		if (x==4) {
//			int number1= L.play();
//			int number2= L.play();
//			int number3= L.play();
//			int number4= L.play();
//
//			System.out.println("Player1  " + "   got a dice value of  " + number1);
//			System.out.println("Player2  " +  "   got a dice value of  " + number2);
//			System.out.println("Player3  " + "   got a dice value of  " + number3);
//			System.out.println("Player4  " + "   got a dice value of  " + number4);
//
//			
//			if(number1>number2 &&number1>number3 && number1>number4    && number2>number3 && number2>number4 && number3>number4) {
//				System.out.println("Reached final decision on order of playing: Player1,Player2,Player3,Player4");
//				
//			}
//			if(number1>number2 &&number1>number3 && number1>number4    && number2>number3 && number2>number4 && number4>number3) {
//				System.out.println("Reached final decision on order of playing: Player1,Player2,Player4,Player3");
//				
//			}
//			if(number1>number2 &&number1>number3 && number1>number4    && number3>number2 && number3>number4 && number2>number4) {
//				System.out.println("Reached final decision on order of playing: Player1,Player3,Player2,Player4");
//				
//			}
//			if(number1>number2 &&number1>number3 && number1>number4    && number3>number2 && number3>number4 && number4>number2) {
//				System.out.println("Reached final decision on order of playing: Player1,Player3,Player4,Player2");
//				
//			}
//			if(number1>number2 &&number1>number3 && number1>number4    && number3>number2 && number3>number4 && number4>number2) {
//				System.out.println("Reached final decision on order of playing: Player1,Player3,Player4,Player2");
//				
//			}
			
			
			
			
			
			
			
			
			
			
//		}
		
		
//		for ( int n=1;    n<= x && x>=2 && x<5 ; n++  , c++)
//
//		{    	
//			int number= L.play();
			
//			int[] number= new int[x];
//			int[] number =new int[x];
//			System.out.println("Player  " + c+ "   got a dice value of  "+ Arrays.toString(number));
//			System.out.println(Arrays.toString(number));
			
//			System.out.println("Player  " + c+ "   got a dice value of  " + number);
			 
			
//		}
		
		
//		if(x<2 || x>4) {
//		System.out.println("out of bound try again ");}
//		
//
//		
//		}
//		
		
