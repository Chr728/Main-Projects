/*
 * Written By christina Darstbanian 40097340
 * Date 24-04-2021 Part 2
 * The file is about doing some methods in linked list of Tv shows
 */
import java.util.Scanner;
import java.io.PrintWriter;
import java.io.FileOutputStream;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.util.ArrayList;
import java.util.NoSuchElementException;

public class ShowList {
/*
 * all the constructor of the class including all private attriubute
 */
	public class ShowNode  {
		private TVShow show;
		private  ShowNode node;

		public ShowNode() {

			show= null;
			node= null;
		}


		public ShowNode(TVShow show, ShowNode node) {

			this.show= show;
			this.node = node;
		}

		

		
		

		
		public ShowNode(ShowNode nod)
		{
			show = nod.show.clone(nod.show.getShowID());	
			node = nod.node;		 
			
		}



		public ShowNode clone()
		{
			return new ShowNode(this);	
		}


		public TVShow getShow() {
			return show;
		}


		public void setShow(TVShow show) {
			this.show = show;
		}


		public ShowNode getNode() {
			return node;
		}


		public void setNode(ShowNode node) {
			this.node = node;
		}


		

	}
	
	private  ShowNode head = null ;private  int size=0;

	public ShowList()
	{
		head = null;
	}

	
	// copy constructor
	public ShowList(ShowList S)
	{
//   ShowList s= new ShowList();
		if(S.head == null)
			head = null;
		else
		{
			head = null;	// start with an empty list; then
			// copy the nodes one by one from S
			ShowNode t1, t2, t3;	// create 3 temporary pointers

			t1 = S.head;
			t2 = t3 = null;

			while(t1 != null)	// a node exists in the given list S
				// so create a new node and copy it
			{

				if (head == null)	// this happens only once
				{
					t2 = new ShowNode(t1);	
					// t2 will always point to the 
					// last node in the list
					head = t2;
				}
				else 	// new list is not empty. 
					// Create a new mode, link it from t2, 
					// then move t2 to that node
				{
					 t2.node = new ShowNode(t1);
					 t2 = t2.node;
					
				}
				t1 = t1.node;
			}

			t2 = t3 = null; 	// t1 is already null by now

		}

	}

	/*
	 * takes the size
	 */
		public int size()
		{
			
			ShowNode temp = head;	
			while(temp!= null)
			{
				size++;
				temp = temp.node;
			}
			return size;
		}


	
	/*
	 * adds a show in the first in the list
	 */
	public void addToStart(TVShow show)
	{
		 head = new ShowNode(show, head);					
		
		
	}
	
	
	
	public boolean  insertAtIndex(TVShow show, int i)
	{
	 
		try{

			if (head == null)
			{

				return false;
			}
			ShowNode t = head;
			while(t!= null && !(t.show.equals(show)))
				t = t.node;

			if (t == null)
			{

				return false;
			}

			// if this point is reached then i is found; do the insertion
			t.node = new ShowNode(show, t.node);			
					
		}
		catch(NoSuchElementException  e) {
			
			String s = e.getMessage();
			System.out.println(s);

			System.exit(0);
		}
		return true;
		
	}
	
/*
 * finds the showID
 */
	public ShowNode find(String  ShowID)
	{
		ShowNode temp = head;
        
       
		while(temp != null)
		{
            
			if (temp.show.getShowID().equalsIgnoreCase(ShowID))
			{
				return temp;
			}
			temp = temp.getNode();	// Move temp to the next node
		}
			
		// If this point is reached then the value was not found in the list
		
		return null;
	}
	
	
	
	public ShowNode find1(String  ShowName)
	{
		ShowNode temp1 = head;
        int count = 0;

		while(temp1 != null)
		{
            count++;
			if (temp1.show.getShowName().equalsIgnoreCase(ShowName))
			{				

				return temp1;	
			}
			temp1 = temp1.getNode();	// Move temp to the next node
		}
		
		// If this point is reached then the value was not found in the list
		return null;
	}


	
	
	public boolean replace(TVShow show, int i)
	{
		
		
		try{
			if(i<0 || i>size-1) { // not valid range
				throw new NoSuchElementException("not in valid range");
			}
			
		
			
			else{

				ShowNode t = find(show.getShowID());

				if(t == null)
				{
					System.out.println("\nCould not find value " + show);
					return false;
				}
				t.show = show;

		
			}

		}
			catch(NoSuchElementException  e) {
				
				String s = e.getMessage();
				System.out.println(s);

				System.exit(0);
			}
		return true;
	}
	
	
	
	/*
	 * deletes the element from that
	 */
	public boolean deleteFromIndex(int i )
	{
		if(head == null) {
			return false;
			
		}
		ShowNode t = head;
		if(i ==0) {
			head=head.node;
			
		}
		while (t.getNode() != null  && i<0 || i>size-1 )
		{
			head = head.node;
			return true;
		}
		 {
			t.node= t.node.node;
		}
			return false;
	}
	
	
	
	public boolean deleteFromStart(int i)
	{
		
		
		try{
			if(i<0 || i>size-1) { // not  in valid range
				throw new NoSuchElementException("not in valid range");
				
			}
			else {	
		if (head != null)
		{
			head = head.getNode();
			return true;
		}
		
			}
		}		
	
	catch(NoSuchElementException  e) {
			
			String s = e.getMessage();
			System.out.println(s);

			System.exit(0);
		}
	return false;

		

			}
   


// chechs if it includes it or not
	public boolean contains(String showID)
	{
		if(find(showID) != null)
			return true;
		else 
			return false;
	}
	
	public boolean contains1(String ShowName)
	{
		if(find1(ShowName) != null)
			return true;
		else 
			return false;
	}
	
	public boolean equals(Object object) {   
		if (object == null || this.getClass() != object.getClass()) {
			return false;  
	    } 

		else {
			// cast the passed object 
			ShowList showList = (ShowList) object;
	        ShowNode temp1 = showList.head;
	        ShowNode temp2 = head;

	        while(temp1 != null && temp2 != null){
	            if(temp1.show.getShowName() == temp2.show.getShowName() &&
	                temp1.show.getStartTime() == temp2.show.getStartTime() &&
	                temp1.show.getEndTime()== temp2.show.getEndTime()) {
	                    temp1 = temp1.getNode();
	                    temp2 = temp2.getNode();
	                }
	                else {
	                return false;
	            }
	        }
	        if (temp1 == null && temp2 == null){
	            return true;
	        } else {
	            return false;
	        }
		}
	}
	
	
	
	public static void main(String[] args) {
		System.out.println();
		System.out.println("<<<<<<<<<<<<<<<<<<<<<<<WELCOME TO MY PROGRAM>>>>>>>>>>>>>>>>>>>>");
		System.out.println();
		System.out.println();
		System.out.println("Written by Christina Darstbanian ID: 40097340");
		System.out.println();
		// create two empty lists
		ShowList showList = new ShowList();
		ShowList showList1 = new ShowList();

		 
		Scanner kb = new Scanner(System.in);String name1=null; String s1= "TVGuide";
		Scanner sc = null;Scanner sc1= null;
		PrintWriter pw = null;
		
		
		try
		{
			
			/// try and catch block 
			
			sc = new Scanner(new FileInputStream(".\\"+s1+".txt"));
			

			double startTime = 1;
	        double endTime = 2;
	        String showName = "temp";
	        String showID = "temp";
	        while (sc.hasNextLine()) {
	        	
	            String line =sc.nextLine();
	            	
	            if(line.length() > 1) {
	                String[] splitedInfo = line.split(" ");
	               
	                if (splitedInfo[0].equalsIgnoreCase("S")) {
	                    startTime = Double.parseDouble(splitedInfo[1]);
	                } else if (splitedInfo[0].equalsIgnoreCase("E")) {
	                    endTime = Double.parseDouble(splitedInfo[1]);
	                } else {
	                    showID = splitedInfo[0];
	                    showName = splitedInfo[1];
	                    
	                } 
	            }
	            else {
	            	/*
	            	 * after checking line by line now we can have them set in object
	            	 */
	            
	     
	                TVShow show = new TVShow(showID, showName, startTime,endTime);
	               if(!(showList.contains1(showName))){
	              showList.addToStart(show);
	               }
	              
	             

	         
	            }   
	        }
	        
	        System.out.println("Here are  all the shows  that we have in the list:");
	        ShowNode vic = showList.head;
           while (vic != null) {
        	   System.out.println(vic.getShow());
        	   
        			   vic = vic.node;
           }
	        
	        

			
			
			System.out.println("Please enter the  name of the file you need to check : ");name1=kb.next(); 
			sc1 = new Scanner(new FileInputStream(".\\"+name1+".txt"));
			pw=new PrintWriter(new FileOutputStream(".\\"+"results"+".txt"));
// having them in two array list in order to distinguish between them
			ArrayList<String> A2 = new ArrayList<String>(); 
			ArrayList<String> A3 = new ArrayList<String>(); 
			String line0 =sc1.nextLine();
			String line= null;
			 while (sc1.hasNextLine()) {
				  line =sc1.nextLine();
				  if(line.equalsIgnoreCase("Wishlist")) {	
				       break;
				 }
				 A2.add(line);
				
			 }
		            	String [] words = line.split("\\r?\\n");
		            	if(line.equalsIgnoreCase("Wishlist")) {	
		            		
		            	for (int i= 0 ; i<words.length; i++) {
		            		
		            			while(sc1.hasNext()) {
		            				 String line1 =sc1.nextLine();
		            		 A3.add(line1);
		            			}
		            		
		            	}
		            	}
		            	
			   
			
//			System.out.println(A2);
//			System.out.println(A3);
						


				                    TVShow obj1;// watching
				                    TVShow  obj2; // wishlist
				                    
				                    for (String a3 : A3) {
				                        obj2 = showList.find(a3).getShow();

				                        int watchCase = 0;

				                        for (String a2 : A2) {
				                            obj1 = showList.find(a2).getShow();
				                            if (obj2.isOnSameTime(obj1).equals("Same time")) {
				                                watchCase = 2;
				                                break;
				                            } else if (obj2.isOnSameTime(obj1).equals("Overlap")) {
				                                watchCase = 1;
				                                break;
				                            }
				                        }

				                        switch (watchCase) {
				                            case 0:
				                                System.out.println("User can watch show " + obj2.getShowID() + " as he/she is not watching anything else at that time.");
				                                pw.println("User can watch show " + obj2.getShowID() + " as he/she is not watching anything else at that time.");
				                                break;

				                            case 1:
				                                System.out.println("User can't watch show " + obj2.getShowID() + " as he/she is not finished with a show he/she is watching.");
				                                pw.println("User can't watch show " + obj2.getShowID() + " as he/she is not finished with a show he/she is watching.");
				                                break;

				                            case 2:
				                                System.out.println("User can't watch show " + obj2.getShowID() + " as he/she will begin another show at the same time.");
				                                pw.println("User can't watch show " + obj2.getShowID() + " as he/she will begin another show at the same time.");
				                                break;
				                        }
				                    }
				                    
				                    
				                
				//search in the list and print how many iterations it took to reach there
				 System.out.println();	System.out.println();System.out.println();System.out.println();
				System.out.println("Now enter  any ShowID  to search in the list  : "); String name2=kb.next(); 
				ShowNode temp1 = showList.head;
				int counterfinal=showList.size();
				while (temp1 != null) {
	                if (temp1.getShow().getShowID().equalsIgnoreCase(name2)) {
	                    System.out.println(showList.find(name2).getShow());
	                    System.out.println();
	                    System.out.println("and the number of  iterations that took to reach to this show was:    " + counterfinal);
	                    break;
	                }
	                counterfinal--;
	                temp1 = temp1.getNode();
	            }
				
				
				
				
				
				
				System.out.println();System.out.println();System.out.println();
				System.out.println("////////////////////////////////////////////////////////////////////////////////////////////////");
				System.out.println("///////////////////////////// NOW TESTING SOME METHODS //////////////////////////////////////////");
				 TVShow one;
				 // checking first the show if it can be added
				 TVShow show0= new TVShow("BBC21","Criminal_Minds", 22.00,23.00 );
					showList.addToStart(show0);
				System.out.println("Now enter  another  ShowID so we can compare with the previous showID you already entered : ");
				String name3=kb.next(); 
	                   one= showList.find(name2).getShow();
				TVShow two= showList.find(name3).getShow();
					if( one.equals(two) == true) {
						System.out.println("two shows  are the  same !!! ");
						
					}
					else if (one.equals(two) == false){
						System.out.println("Sorry two shows we are comparing, they are not same !!!!");
					}
					
						
					
					
					// testing add ,delete ,contains methods
				
					TVShow show1= new TVShow("BBC1","MY MOVIE", 20.0,22.0 );
					TVShow show2= new TVShow("BBC2","MY MOVIE", 20.0,22.0 );
					TVShow show3= new TVShow("BBC3","MY MOVIE", 20.0,22.0 );

					TVShow show4= new TVShow("BBC4","MY MOVIE", 20.0,22.0 );
					TVShow show5= new TVShow("BBC5","MY MOVIE", 20.0,22.0 );

					// adding more to the list 
					showList1.addToStart(show1);
					showList1.addToStart(show2);showList1.addToStart(show3);showList1.addToStart(show4);				
					ShowNode vic1 = showList1.head;
					System.out.println();System.out.println();System.out.println("Just after addition our list ");
			           while (vic1 != null) {
			        	   System.out.println(vic1.getShow());
			        	   
			        			   vic1 = vic1.node;
			           }
				showList1.deleteFromIndex(2);
				showList1.deleteFromIndex(0);
				showList1.insertAtIndex(show5,0);
				System.out.println();System.out.println();System.out.println("after deleting  and inserting at index our list becomes");
				ShowNode vic3 = showList1.head;
				 while (vic3 != null) {
		        	   System.out.println(vic3.getShow());
		        	   
		        			   vic3 = vic3.node;
		           }
			
				
				if(showList1.contains("BBC1") == true) {
					System.out.println("yes it is found, it is in your list");
				}
				
				TVShow show23 = show1.clone("CBC21");
				System.out.println();System.out.println();
				System.out.println("this is after cloning it "+ show23);
		
			
		}
		
		
		
		catch(FileNotFoundException e) // in case none of the files can be created then it throws error exception 
		{							   
			System.out.println("Could not open input file "+   sc+  "for reading. Please check if file exists! Program will terminate after closing any opened files.");	
			
			System.exit(0);			   
		}
		
		
		
		
		System.out.println();System.out.println();System.out.println();System.out.println();System.out.println();
		System.out.println("////////////////////COMMENT ABOUT PRIVACY LEAK////////////////////////////// ");
		System.out.println(" They allow the contents of a private attribute to be modified by others,  also since the user can create any pointer and access easily to the list and can destroy the list and modify many thins so in order to avoid this "
				+ "one can create a copy of the node  first on that pointer and then try to continue the modifications, a deep copy should be done in another words ");
		System.out.println();System.out.println();System.out.println("Thank you for attending this program");
		sc.close();
	sc1.close();
	pw.close();
	}









	
	

}
