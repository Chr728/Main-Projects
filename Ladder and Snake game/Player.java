//////////////////////////////////////////
//////////////////////////////////////////
//----------------------------------------
/* @Christina Darstbanian  
 * @Shabia Saeed        
//COMP249  
//Assignment #1 
  Due Date (08-FEBRUARY-2021)*/
//----------------------------------------

package ladderandsnake;
// the class Player includes 4 attributes, id the player specific identification number whether its player 1 or 2 or 3. position is the location of the player at grid
public class Player {
	private int id;
    private int position;
    private int dice; // is the value of dice that player gets every time it rolls the dice
    private int tie;// in case if there is a tie  between players, players play again and this is the second value of dice they get. 
    
 // in order to get the value of dice players get after they had a tie already in other words this is to get the second value of dice of player because they had a tie  
public int getTie() {
		return tie;
	}
// if there is tie , it sets those two players with same value in a state of set value
	public void setTie(int tie) {
		this.tie = tie;
	}
// it returns the value of dice 
public int getDice() {
		return dice;
	}
// in order to set the value of flip dice as the number of dice 
	public void setDice(int dice) {
		this.dice = dice;
	}

// in order to set the id of a player
public void  setID ( int ID) {
	this.id= ID;
}

// Parameterized  constructor with 4 parameters 
public Player(int id, int dice, int tie, int position) {
	this.tie=tie;
	this.dice= dice;
	this.id = id;
	this.position = position;
	
}
public String toString() {
	return "player id=" + id + ", position= " + position + " dicevalue = "  + " " +dice + " Tievalue =  "  + " " +tie +"  ." ;
}


   // to get the id of player
    public int getId(){
        return id;
    }
 // in order to get the current position of the player 
    public int getPosition(){
        return position;
    }
 // in order to set the current position of the player to a new value  
public void setPosition(int position){
        this.position = position;
    }
}
   
