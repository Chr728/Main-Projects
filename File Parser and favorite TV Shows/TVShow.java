/*
 * christina Darstbanian 40097340
 * Part 2 date 24-04-2021 
 * Its the Tv show class related to tv show 
 */
import java.util.Scanner;
import java.io.PrintWriter;
import java.io.FileOutputStream;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.IOException;

/*
 * watchable interface declared 
 */
interface Watchable  
{   
	public  String isOnSameTime (TVShow S);
	
}

public class TVShow  implements Watchable  {
	/*
	 * all the 4 parameters of the class
	 */
	private String showID= "";private String showName= ""; private double startTime; private double endTime; 
	public TVShow() {

		showID="";
		showName="";
		startTime=0;
		endTime=0;
	}


	public TVShow(String showID, String showName, double startTime, double endTime) {

		this.showID = showID;
		this.showName = showName;
		this.startTime = startTime;
		this.endTime = endTime;
	}



	public TVShow(TVShow show,String value)	
	{
		showID= value;
		showName = show.showName;
		startTime = show.startTime;
		endTime= show.endTime;
		
	}

	

	
	public String toString() {
		return "TVShow [showID=" + showID + ", showName=" + showName + ", startTime=" + startTime + ", endTime="
				+ endTime + "]";
	}



	public String getShowID() {
		return showID;
	}

	public void setShowID(String showID) {
		this.showID = showID;
	}

	public String getShowName() {
		return showName;
	}


	public void setShowName(String showName) {
		this.showName = showName;
	}


	public double getStartTime() {
		return startTime;
	}


	public void setStartTime(double startTime) {
		this.startTime = startTime;
	}


	public double getEndTime() {
		return endTime;
	}


	public void setEndTime(double endTime) {
		this.endTime = endTime;
	}


	/*
	 *the method verifies whether there is two shows that overlap with each other or they are exactly at same time or they are at different times
	 */
	
	 public String isOnSameTime(TVShow S) {
	        if (S == null || S.getClass() != this.getClass())
	            return null;

	        TVShow c = (TVShow) S;
	        if (c.getStartTime() >= this.getEndTime() || c.getEndTime() <= this.getStartTime())
	            return ("Different time");
	        if (c.getStartTime() == this.getStartTime())
	            return ("Same time");
	        else
	            return "Overlap";
	    }
	

		
		

	


		public TVShow clone(String showID) {
			
			return new TVShow(this, showID);
		}


		/*
		 * equals method that compares between two tvshow objects and if they have same name same starts and end time then returns that they are equal
		 */

	public boolean equals(Object x)
	{
		
		if (x == null || this.getClass() != x.getClass()) {

			return false;  } 
		else
		{
			// cast the passed object 
			TVShow tv = (TVShow)x;

			return (this.getShowName() == tv.getShowName() &&
				this.getStartTime() == tv.getStartTime() &&
				this.getEndTime()== tv.getEndTime());
			
		}
	}
  
}


