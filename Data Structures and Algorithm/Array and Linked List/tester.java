
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.PrintWriter;
import java.util.*;


/*
 * COMP 352
 * Assignment 2
 * Summer 2021
 * 
 * James Partsafas 40170301
 * Christina Darstbanian 40097340
 */
public class tester {

	public static void main(String[] args)  
	{
		System.out.println("Welcome to our experiment");
		// just an example of linkedlist to show how we are adding 
	      LinkedList<Integer> List1 = new LinkedList<>();
	      
	      int x=0;
	      long startTime = System.currentTimeMillis();
	      for(int i= 0 ; i<3 ; i++){
	       x = (int)(Math.random() * (20-0)+0);
	       List1.add(0,x);System.out.println( "inserting at start" );System.out.println(List1);

	      }
	    long stopTime = System.currentTimeMillis();
		      long elapsedTime = stopTime - startTime;
		      System.out.println("time is "+ elapsedTime);
               
		      
		      
		      System.out.println();System.out.println();System.out.println();
		      startTime = System.currentTimeMillis();
		      for(int i= 3 ; i<6  ; i++){
		       x = (int)(Math.random() * (20-0)+0);  int n  = (int)(Math.random() * (4-1)+1); 
		       List1.add(n,x);System.out.println( "inserting at index  "+n);System.out.println( List1);

		      }
		     stopTime = System.currentTimeMillis();
			     elapsedTime = stopTime - startTime;
			      System.out.println("time is "+ elapsedTime);
	    	  
	    	 
			      
			      System.out.println();System.out.println();System.out.println();
			      startTime = System.currentTimeMillis();
			      for(int i= 6 ; i<10 ; i++){
			       x = (int)(Math.random() * (20-0)+0);
			       List1.add(x);System.out.println( "inserting at end " );System.out.println(List1);

			      }
			     stopTime = System.currentTimeMillis();
				     elapsedTime = stopTime - startTime;
				      System.out.println("time is "+ elapsedTime);
	      

		   PrintWriter pw= null;
	      try {
				pw=new PrintWriter(new FileOutputStream("C:\\Users\\chris\\eclipse-workspace\\352A2\\src\\RLinkedlistN10000.txt",true));

	      }
	      catch(FileNotFoundException e) // in case none of the files can be created then it throws error exception 
			{							   
				System.out.println("Could not open input file for reading. Please check if file exists! Program will terminate after closing any opened files.");	

				System.exit(0);			   
			}
	      
	     LinkedList <Integer> list = new    LinkedList<Integer>();pw.println();pw.println(); 

	     	pw.println(); pw.println("<------------------------------------->");pw.println("<<<<<<<<<<<<<<< USING    LinkedList >>>>>>>>>>>>>>");pw.println();pw.println();
	    
		   x=0;
		   // adds again just so we have some numbers in the list before removing 
	      for(int i= 0 ; i<10; i++){
		       x = (int)(Math.random() * (20-0)+0);
		       list.add(0,x);
	
		      }
	      
          pw.println("Before deleting anything original list is :"+ list);
    
    
    
             pw.println();pw.println();pw.println();
			      startTime = System.currentTimeMillis();
			      for(int i= 8; i<10 ; i++){
			      
			       list.remove(list.size()-1);pw.println( "deleting at end " );pw.println(list);
			      }
			    stopTime = System.currentTimeMillis();
				     elapsedTime = stopTime - startTime;
				     pw.println("time is "+ elapsedTime); System.out.println("end time is  "+ elapsedTime);
				     
				     pw.println();pw.println();pw.println();
				     
	    startTime = System.currentTimeMillis();
	      for(int i= 0 ; i<20 ; i++){
	      
	       list.remove(0);pw.println( "deleting from start" );pw.println(list);

	      }
	   stopTime = System.currentTimeMillis();
		       elapsedTime = stopTime - startTime;
		      pw.println("time is "+ elapsedTime); System.out.println("start time is "+ elapsedTime);
		      
             
		      
		      
		      pw.println();pw.println();pw.println();
		      startTime = System.currentTimeMillis();
		      for(int i= 2 ; i<6  ; i++){
		         int n  = (int)(Math.random() * (3-1)+1); 
		       list.remove(n);
		       pw.println( "deleting from  index  "+n);pw.println(list);

		      }
		     stopTime = System.currentTimeMillis();
			     elapsedTime = stopTime - startTime;
			     pw.println("time is "+ elapsedTime);System.out.println("index time is "+ elapsedTime);
			     
			     
			     
			     
			     
			     
			     
			     pw.println();pw.println();pw.println();
				      startTime = System.currentTimeMillis();
				      for(int i= 6 ; i<8 ; i++){
				       x = (int)(Math.random() * (20-0)+0);
				       Integer myInt = new Integer(x); pw.println( "deleting by value "+ myInt );
				      for (int j= 0 ; j<list.size(); j++) {
				    	  int[] g= new int[list.size()];
				    	  if(g[j] != x) {
				    		  
				    		 pw.println("Cant remove this value does not exist in list");
				    		 
				    		
				    	  }
				    	 
				    		 
				    		 
				    	  } 
				      list.remove(myInt);pw.println(list);
				      }
				       
				      
				     stopTime = System.currentTimeMillis();
					     elapsedTime = stopTime - startTime;
					     pw.println("time is "+ elapsedTime); System.out.println("remove by value time is  "+ elapsedTime);
		      
	    	  
	
					     System.out.println("EXPERIMENT TERMINATED !");
					     pw.close();
	}

}
