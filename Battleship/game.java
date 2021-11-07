
//-------------------------------------------//
// Assignment 4  //
// Written by : Christina Darstbanian   03-12-2020//
// Comp 248 Section R by Dr. Yuhong Yan  fall 2020 //
// the program starts with a welcoming banner ,  the purpose of this program is a game game, a game that is played between a user like human being and the computer, the game is basically that each user and computer sets
// ships and grenades in the GRID of 8 by 8 and the player who sinks all the ship of the opponent basically wins the game. Each time the player hits a grenade the opponent gets the
// the right to play twice . They each have the right to have 6 ships and 4 grenades where the player chooses the coordinates of the ships and grenades the computer does that randomly
//the player chooses a coordinates letters that are horizontal from A-H and Ns vertical from 1-8.
// the GRID is updated and displayed each single time so that players can follow up what is the situation and the state of the game
// none of players can choose a coordinate out of GRID or already used , and it will be asked the user to input another coordinate.
// after showing who is the winner the program has its closing message banner.
// the program was divided into two sections FIRST one is the class definition part and the SECOND is the main driver part.
// the classes and functions are defined in the beginning of the code and then they are used in the SECOND driver part.
// many variables , types are used which  comments are added  throughout the code//
// --------------------------------------------------------//

package ass4;
import java.util.Random;
import java.util.Scanner;


/////////////////////////////////////////////////////
// FIRST of all I create the class  public game which is the program // 
	public class game {
		   // GRID here represents the full chart that are is composed of 8 rows and 8 columns
	// variable R here represent the rows while variable C here represents the columns of the grid //
	   private char GRID[][] = new char[8][8];
	   private int R;
	   private int C;
	
		public game() {
	       R = 0;
	       C = 0;
	 // we make a for loop to create a grid  chart of 8 by 8 while variable i is to draw or make  the rows and j  the columns here each time it draws "_" to make a position available
	       for (int i = 0; i < GRID.length; i++) {
	           for (int j = 0; j < GRID[i].length; j++) {
	               GRID[i][j] = '_';
	           }
	       }
	   }
		
		// the function Nofinput is only to verify the number of input , in order to make sure whether the user does not input more than two variables in order to choose the coordinate 
		 public boolean Nofinput(String coordinate) {
	       return (coordinate.length() > 2);
	   }
		 //  the variable checkcolumn is to check for columns, the switch function here is used to verify if the beginning  if the coordinate in each case if it represents coordinates from the grid or not taking into consideration capital case

	   public int checkcolumn(String coordinate) {
	       switch (coordinate.charAt(1)) {
	       case '1':
	           C = 0;
	           break;
	       case '2':
	           C = 1;
	           break;
	       case '3':
	           C = 2;
	           break;
	       case '4':
	           C = 3;
	           break;
	       case '5':
	           C = 4;
	           break;
	       case '6':
	           C = 5;
	           break;
	       case '7':
	           C = 6;
	           break;
	       case '8':
	           C = 7;
	           break;

	       }
	       return (C);
	   }
		
// variable checkrow is  for rows  to check them , the switch function here is used to verify if the beginning  if the coordinate in each case if it represents coordinates from the grid or not taking into consideration capital case
		 public int checkrow(String coordinate) {
	       switch (coordinate.charAt(0)) {
	       case 'A':
	       case 'a':
	           R = 0;
	           break;
	       case 'B':
	       case 'b':
	           R = 1;
	           break;
	       case 'C':
	       case 'c':
	           R = 2;
	           break;
	       case 'D':
	       case 'd':
	           R = 3;
	           break;
	       case 'E':
	       case 'e':
	           R = 4;
	           break;
	       case 'F':
	       case 'f':
	           R = 5;
	           break;
	       case 'G':
	       case 'g':
	           R = 6;
	           break;
	       case 'H':
	       case 'h':
	           R = 7;
	           break;

	       }

	       return (R);
	   }

	
	
	   
	  //  the function variable chooseRofC is that we make the computer choose coordinates randomly for row   
	   public int chooseRofC() {
	       this.R = (int) (Math.random() * (8));

	       return R;
	   }
	
	  //  the function variable chooseRofC is that we make the computer choose coordinates randomly for  column  
	   public int chooseCofC() {
	       this.C = (int) (Math.random() * (8));
	       return C;
	   }
	   
	   // the boolean variable Outbound is to verify if any of coordinates are out of the grid limits , whether it is more than letter H or the number 9 and if its smaller than A or smaller than 1 
	   public boolean Outbound(String coordinate) {
		   coordinate.toLowerCase();
		  // making sure that it can work with big and small letters
	       coordinate.toLowerCase();
	       // variable FIRST represent the first char of the user input and SECOND represents the second char 
	       char FIRST = coordinate.charAt(0);
	       char SECOND = coordinate.charAt(1);
	       return (FIRST >= 'A' && FIRST <= 'H' && SECOND >= '1' && SECOND < '9'|| FIRST >= 'a' && FIRST <= 'h' );

	   }
	   
	   //  the variable enteredalready is to verify that the there is already exist a grenades or the ship of the computer or user
	   public boolean enteredalready() {
	       return ( GRID[this.C][this.R] == 's' || GRID[this.C][this.R] == 'g' || GRID[this.C][this.R] == 'G' || GRID[this.C][this.R] == 'S'||  GRID[this.C][this.R] == '*');
	   }
	   public boolean same(game GRIDCopy) {
	       return (this.GRID == GRIDCopy.GRID);
	   }
	   
	   
	   //  variable  putShip() to set a ship of the user 
	   public void putShip() {
	       GRID[this.C][this.R] = 's';
	   }
	   // variable putShipforC()  to set a ship for the computer 
	   public void putShipforC() {
	       GRID[this.C][this.R] = 'S';
	   }
	   // variable  putGrenade() is to set a grenade for the user
	   public void putGrenade() {
	       GRID[this.C][this.R] = 'g';
	   }
	   // variable  putGrenadeforC() is to set a grenade for the computer 
	   public void putGrenadeforC() {
	       GRID[this.C][this.R] = 'G';
	   }
	   // variable  CheckSGsg() is  to check whether the position called at that coordinate already exist anything like grenade or ship of both computer or user
	  public boolean CheckSGsg() {
	       return (GRID[this.C][this.R] == 'G' ||GRID[this.C][this.R] == 'g'  || GRID[this.C][this.R] == 'S' || GRID[this.C][this.R] == 's');
	   }
	  // variable hitGrenade is when it hits a position that there is already a grenade set 
	  public boolean hitGrenade(game GRIDCopy) {
	       return (GRIDCopy.GRID[this.C][this.R] == 'g' || GRIDCopy.GRID[this.C][this.R] == 'G'  );

	   }
	  
	  // fucntion variable chooseanother is to make sure that the computer chooses another coordinate randomly  if it has already been used
	  public void chooseanother(game GRIDCopy) {
	       chooseRofC();
	       chooseCofC();
	  // Isfine variable to to check if the coordinate has been already entered by anyone or not     
	       boolean Isfine = enteredalready();
	       if (Isfine == true) {
	           chooseanother(GRIDCopy); 
	           return;
	       }
	       
	       if (GRIDCopy.GRID[this.C][this.R] == 'S' || GRIDCopy.GRID[this.C][this.R] == 'G') {
	           chooseRofC();
	           chooseCofC();
	       }
	     // after making sure the coordinate is not entered already then the computer can go ahead and choose coordinates
	     // first of all for coordinate of rows   
	       switch (this.R) {
	       case 0: {
	           System.out.print("position of my rocket: A");
	           break;
	       }
	       case 1: {
	           System.out.print("position of my rocket: B");
	           break;
	       }
	       case 2: {
	           System.out.print("position of my rocket: C");
	           break;
	       }

	       case 3: {
	           System.out.print("position of my rocket: D");
	           break;
	       }
	       case 4: {
	           System.out.print("position of my rocket: E");
	           break;
	       }
	       case 5: {
	           System.out.print("position of my rocket: F");
	           break;
	       }
	       case 6: {
	           System.out.print("position of my rocket: G");
	           break;
	       }
	       case 7: {
	           System.out.print("position of my rocket: H");
	           break;
	       }
	       }
		     // second  of all for coordinate of columns  

	       switch (this.C) {
	       case 0: {
	           System.out.println("1");
	           break;
	       }
	       case 1: {
	           System.out.println("2");
	           break;
	       }
	       case 2: {
	           System.out.println("3");
	           break;
	       }

	       case 3: {
	           System.out.println("4");
	           break;
	       }
	       case 4: {
	           System.out.println("5");
	           break;
	       }
	       case 5: {
	           System.out.println("6");
	           break;
	       }
	       case 6: {
	           System.out.println("7");
	           break;
	       }
	       case 7: {
	           System.out.println("8");
	           break;
	       }
	       }

	   }

	   // variable chartgrid is to make the chart of the grid 
	   public void chartgrid(game GRIDD) {
		   System.out.println();
	       for (int i = 0; i < GRID.length; i++) {
	           for (int j = 0; j < GRIDD.GRID[i].length; j++) {
	               System.out.print(GRIDD.GRID[i][j] + " ");
	           }
	           System.out.println();
	       }
	   }
	   
	   // making a chartgrid of all the board 
	    public void chartgrid() {
		   System.out.println();
	       for (int i = 0; i < GRID.length; i++) {
	           for (int j = 0; j < GRID[i].length; j++) {
	               System.out.print(GRID[i][j] + " ");
	           }
	           System.out.println();
	       }
	   }
	   // Player_1 here represents the FIRST player who is going to play the game and start choosing the coordinated and choosing the position and Player_2 is the SECOND other player which in this case is the computer 
	   private int Player_1;
	   private int Player_2;
	   
	   
	   //  class variable hitRocket is when it will hit a position  and it makes sure whether the place that is hit if there is a ship 
	   // or grenade and whether it is the one for computer or user meaning the player itself or the opponent
	   public void hitRocket(game GRIDD) {
	       if (GRIDD.GRID[this.C][this.R] == '_') {
	           System.out.print("nothing.");
	           GRID[this.C][this.R] = '*';
	           chartgrid();
	       } else if (GRIDD.GRID[this.C][this.R] == 's' || GRIDD.GRID[this.C][this.R] == 'S') {
	           System.out.print("ship hit.");
	           this.GRID[this.C][this.R] = GRIDD.GRID[this.C][this.R];
	           if (GRIDD.GRID[this.C][this.R] == 'S') {
	               this.Player_1++;
	               if (this.Player_1 == 6) {
	                   System.out.print("  You win!");
	                   chartgrid(GRIDD);
	                   System.out.println();
	        	       // finally printing the closing message
	                   System.out.println("Thank you for playing this game.");
	                   System.exit(0);
	               }
	             // making sure that if the computer hits and sinks all of the ships of the user then the user loses the game  
	           } else if (GRIDD.GRID[this.C][this.R] == 's') {
	               this.Player_2++;
	               // if the computer sinks all of  the 6  users' ships then the user loses the game
	               if (this.Player_2 == 6) {
	                   System.out.print("  You lose!");
	                   chartgrid(GRIDD);
	                   System.out.println();
	        	       // finally printing the closing message 
	                   System.out.println("Thank you for playing this game.");
	                   System.exit(0);
	               }
	           }
	           chartgrid();
	       }

	       else if (GRIDD.GRID[this.C][this.R] == 'g' || GRIDD.GRID[this.C][this.R] == 'G') {
	           System.out.print("boom! grenade.");
	           this.GRID[this.C][this.R] = GRIDD.GRID[this.C][this.R];
	           chartgrid();
	       }
	   }
	   
	   // making a function of ToString to make sure that it prints correctly
//	   public String ToString() {
//	       for (int i = 0; i < GRID.length; i++) {
//	           for (int j = 0; j < GRID[i].length; j++) {
//	               System.out.print(GRID[i][j] + " ");
//	           }
//	           System.out.println();
//	       }
//	       return "";
//	   }
	   
	   // making a new grid to make sure that the grid is always updated 
	   public void newgrid() {
	       for (int i = 0; i < GRID.length; i++) {
	           for (int j = 0; j < GRID[i].length; j++) {
	               GRID[i][j] = '_';
	           }
	       }
	   }
	   // making another copy of the grid to make sure we have always something to compare 
	   public game(game COPYOFGRID) {
	       for (int i = 0; i < GRID.length; i++) {
	           for (int j = 0; j < GRID[i].length; j++) {
	               this.GRID[i][j] = COPYOFGRID.GRID[i][j];
	           }
	       }
	   }
	 
	   
	   
	   
	   
////////////////////////////////////////////////////////////
// the start of the driver main function file //
////////////////////////////////////////////////////////////
	   
	public static void main(String[] args) {
		
		  game GRID = new game();
		  // opening a scanner so it can read the users inputs 
	       Scanner in = new Scanner(System.in);
	       System.out.println();
	       System.out.println("----------<<Welcome to Battleship game>>-------------");
	       System.out.println("Hi, let's play Battleship!");
	       System.out.println();
	       // the variable N represents the number of the ships and grenades that will be entered in our case ships are always 6 and grenades are always 4.
	       // the variable i represent the number of ships   
	       int N = 1;
	       int i = 0;
	       while (i < 6) { // user enters their ship coordinates
	           System.out.print("Enter the coordinates of your ship #" + N + ": ");
	           String coordinate = in.next();
	           coordinate.toLowerCase(); // turning everything to lower case so if the user types capital 
	           // variable outofB represents when its out of bound
	           boolean outofB = GRID.Nofinput(coordinate.toUpperCase());
	           if (outofB == true) {
	               System.out.println("sorry, coordinates outside the grid. try again.");
	               continue;
	           }
	           boolean Isfine = GRID.Outbound(coordinate.toUpperCase()); 
	           if (Isfine == false) {
	               System.out.println("sorry, coordinates outside the grid.  try again.");
	               continue;
	           } else {
	               GRID.checkrow(coordinate);
	               GRID.checkcolumn(coordinate);
	               boolean checkexist = GRID.CheckSGsg();
	               if (checkexist == true) { // if the user already entered these coordinates
	                   System.out.println("sorry, coordinates already  used.  try again.");
	                   continue;
	               } else {
	            	// if the coordinate is acceptable then the variable N  is incremented     
	                   GRID.putShip();
	                   i++; // increment only if they put a Isfine coordinate
	                   N++;
	               }
	           }
	       }
	       System.out.println();
	       
	       N = 1;
	       //the variable j is always the number of grenades 
	       int j = 0;
	       while (j < 4) { // user now enters grenade coordinates
	           System.out.print("Enter the coordinates of your grenade #" + N + ": ");
	           // coordinate2 is to check the validity of grenades coordinate
	           String coordinate2 = in.next();
	           boolean outofB = GRID.Nofinput(coordinate2.toUpperCase()); // if they enter a huge coordinate, make them retype it
	           if (outofB == true) {
	               System.out.println("sorry, coordinates outside the grid. try again.");
	               continue;
	           }
	           boolean Isfine = GRID.Outbound(coordinate2.toUpperCase()); // if the coordinate is out of bound
	           // so in case its wrong it will print error message 
	           if (Isfine == false)
	               System.out.println("sorry, coordinates outside the grid.  try again.");
	           else { 
	               GRID.checkrow(coordinate2);
	               GRID.checkcolumn(coordinate2);
	               boolean checkexist = GRID.CheckSGsg();
	               if (checkexist == true) {
	                   System.out.println("sorry, coordinates already being used.  try again.");
	                   continue;
	               } else {
	                   GRID.putGrenade();
	                   j++; // increment only if they put  a valid coordinate
	                   N++;
	               }
	           }
	       }
	       System.out.println();
	       // now the variable a represent the ships of computer 
	       int a = 0;
	       while (a < 6) { //  we use a while loop making sure that same coordinate is not used again 
	           GRID.chooseRofC();
	           GRID.chooseCofC();
	           boolean checkagain = GRID.CheckSGsg();
	           if (checkagain == true) {
	               continue;
	           } else {
	               GRID.putShipforC();
	               a++;
	           }
	       }
	       // the b represent the number of grenades of the computer 
	       int b = 0;
	       while (b < 4) { // same as above, but this is for grenades
	           GRID.chooseRofC();
	           GRID.chooseCofC();
	           boolean checkagain = GRID.CheckSGsg();
	           if (checkagain == true) {
	               continue;
	           } else {
	               GRID.putGrenadeforC();
	               b++;
	           }
	       }
	       game GRIDCopy = new game(GRID); // making a copy again for comparison reasons to make sure we can compare the grids after changes have been made and we can print them after  
	                                              
	    
	       GRID.newgrid(); // having a new grid
	       
	       System.out.println("OK, the computer placed its ships and grenades at random.  Let's play.");
	       System.out.println();
	       System.out.println();
	       // initializing a variable called tries which is the number of times that the game can run until 100000 making sure that it can run enough times to find a winner 
	       int tries = 0;
	       while (tries < 100000) { 
	           System.out.print("position of your rocket: "); 
	           String coordinate1 = in.next();
	           boolean outofB = GRID.Nofinput(coordinate1.toUpperCase()); // see if there is  a coordinate out of bounds
	           if (outofB == true) {
	               System.out.println("sorry, coordinates outside the grid. try again.");
	               continue;
	           }
	           boolean Isfine = GRID.Outbound(coordinate1.toUpperCase()); // see if the user enters a coordinate out of bounds
	           if (Isfine == false) {
	               System.out.println("sorry, coordinates out of the grid. try again.");
	               continue;
	           } else { // otherwise, set the coordinates they entered
	               GRID.checkrow(coordinate1);
	               GRID.checkcolumn(coordinate1);
	               boolean checkexist = GRID.enteredalready(); // checking if the user already entered these coordinates
	               if (checkexist == true) {
	                   System.out.println("position already called.");
	                   GRID.chartgrid();
	                   continue;
	               } else { // otherwise, launch a rocket
	                   GRID.hitRocket(GRIDCopy);
	                   boolean hitGrenade = GRID.hitGrenade(GRIDCopy);
	                   if(hitGrenade == true) {
	                       GRID.chooseanother(GRIDCopy);
	                       GRID.hitRocket(GRIDCopy);
	                   }

	               }
	               GRID.chooseanother(GRIDCopy); // now its the computer's turn
	               GRID.hitRocket(GRIDCopy);
	               boolean hitG = GRID.hitGrenade(GRIDCopy);
	               if (hitG == true) { 
	                   while (tries < 100000) {
	                       System.out.print("position of your rocket: ");
	                       String coordinate2 = in.next();
	                       // variable outofBound is again to make sure that it is not our of limits of grid 
	                       boolean outofBound = GRID.Nofinput(coordinate2.toUpperCase());
	                       if (outofBound == true) {
	                           System.out.println("This coordinate is outside the grid. Please enter another coordinate.");
	                           continue;
	                       }
	                       // variable out is to see if outside the bound
	                       boolean outside = GRID.Outbound(coordinate2.toUpperCase());
	                       if (outside == false) {
	                           System.out.println("This coordinate is outside the grid. Please enter  another coordinate.");
	                           continue;
	                       } else {
	                           GRID.checkrow(coordinate2);
	                           GRID.checkcolumn(coordinate2);
	                           boolean checkexist2 = GRID.enteredalready();
	                           if (checkexist2 == true) {
	                               System.out.println("position already called");
	                               GRID.chartgrid();
	                               continue;
	                           } else {
	                               GRID.hitRocket(GRIDCopy);
	                               boolean hitGrenadeE = GRID.hitGrenade(GRIDCopy);
	                               if(hitGrenadeE == true) {
	                                   GRID.chooseanother(GRIDCopy);
	                                   GRID.hitRocket(GRIDCopy);
	                               }
	                           }

	                       }
	                       
	                       break;
	                       
	                   }
	               }

	           }
	           
	           tries++; // increment the Number  of tries
	       }
	       
	       // closing the scanner in  
	      in.close();
	}
	
}
	
