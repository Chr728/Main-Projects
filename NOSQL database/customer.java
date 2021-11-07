package comp249A3;
import java.util.Scanner;
import java.io.PrintWriter;
import java.io.FileOutputStream;
import java.io.FileNotFoundException;
import java.io.FileInputStream;
import java.io.BufferedReader;
import java.io.FileReader;
import java.io.IOException;
import java.io.File;
import java.util.StringTokenizer;
/*
 * Assignment 3 due date 03-April-2021
 * This program is to design and implement a Java tool called CSV2JSON to help the car rental company read and process CSV files and create the corresponding JSON files.
 * There are two main files that exist one of them is called CarRentalRecord and the other one CarMaintenanceRecord. Each of those files have different attributes,each of them are read line by line
 * and then they are printed in the json files in the specified format the were required.Scanner and PrintWriter were used to read from the input file and output into the file.
 * After having  proper validation of checking whether there is any attribute or any data missing then  files are created and the json file the processed. With the demand of the user
 * the output files are then asked to read and display and the program terminates.
 */

/**
 * Written by 
 * @author Christina Darstbanian 
 *
 */

public class customer {
	/**
	 * this method is the method that tries to validate each files and see if there is anything missing if there is nothing missing then it creates the ouptut file
	 * parameter sc represents the scanner used and its either sc or sc1
	 * parameter pw represents the printWriter used to create the output files.
	 */
	public static void processFilesForValidation(Scanner sc, PrintWriter pw) 
	{           
		try{
			isvalid();
			
		}
	
		catch(Exception e9) {
     // After each exception here we call the exception the type of the exception is inside the method and it calls the super constructor
         System.out.println(e9.getMessage());
         
         try {
			/**
			 * in case there is an attribute missing then the program will create a log file and inside that log file it will report the title missing
			 */
			logopen();
			
			}
			
			catch(Exception e13) {
				
			}
         
         
        return;
         
		}
		
	/**
	 * After validations were done now the program can start created and printing in the output file 
	 */
		
		
		pw.println("[");
		String header= sc.nextLine();
		String[] titles=header.split(",");
		/*
		 * it will read line by line and print as long as there is still any word remaining . Variables of counter represent the counter  of missing lines in different methods of the program.Line represent the line that is read every time 
		 */
		   int counter=0;int counter1=0;int counter2=0;
		
		   while(sc.hasNext())
		{
			
			String line= sc.nextLine();
			
			try {
				counter++;
				hasEmptyField(line,counter); // this method now checks if there any data missing in the input file

				try {

					openlogagain(counter1,counter2);// if there is any data missing then it will not transfer that line into output json file	
				}
				catch(Exception e6) {

				}
					
				
				if (line.contains("\"")) { // in case there is quotation marks inside any of the data then it will go by scanning them, ignoring  the comma that exist inside the quotation marks and splitting all data with commas 
				String[] datas =line.split(",(?=([^\"]*\"[^\"]*\")*[^\"]*$)",-1);// there is a -1 in order to not ignore the last empty field in case it is empty 
				pw.println("{");
				for(int i =0 ; i<datas.length; i++) { // iterating over the fields and seeing if there is anything that is empty
			
					String s="\"" + titles[i]+ "\": "  +"\"" +  datas[i]+ "\",";

					pw.println(s);
				
				} pw.println("},");
				}
				
				else {	
				String[] fields =line.split(","); // in case there is no quotation then it will just split by comma
				pw.println("{");
				for(int i =0 ; i<fields.length; i++) {
					String s="\"" + titles[i]+ "\": "  +"\"" +  fields[i]+ "\",";

					pw.println(s);
				
				}pw.println("},");
	
			}
			}
		
			catch(Exception e50) {
				  System.out.println(e50.getMessage());
				 System.out.println();
		         System.out.println(line);
		         System.out.println();
		    
			}
			
	}pw.println("]");
	}
	
	
	
	public static void processFilesForValidation1(Scanner sc, PrintWriter pw) 
	{           try{
		isvalid2();
		
	}

	catch(Exception e8) {
 // After each exception here we call the exception the type of the exception is inside the method and it calls the super constructor
     System.out.println(e8.getMessage());
     
     try {
		/**
		 * in case there is an attribute missing then the program will create a log file and inside that log file it will report the title missing
		 */
		logopen();
		
		}
		
		catch(Exception e14) {
			
		}
     
     
    return;
     
	}
		
	/**
	 * After validations were done now the program can start created and printing in the output file 
	 */
		
		
		pw.println("[");
		String header= sc.nextLine();
		String[] titles=header.split(",");
		/*
		 * it will read line by line and print as long as there is still any word remaining . Variables of counter represent the counter  of missing lines in different methods of the program.Line represent the line that is read every time 
		 */
		   int counter=0;int counter1=0;int counter2=0;
		
		   while(sc.hasNext())
		{
			
			String line= sc.nextLine();
			
			try {
				counter++;
				hasEmptyField(line,counter); // this method now checks if there any data missing in the input file

				try {

					openlogagain(counter1,counter2);// if there is any data missing then it will not transfer that line into output json file	
				}
				catch(Exception e6) {

				}
					
				
				if (line.contains("\"")) { // in case there is quotation marks inside any of the data then it will go by scanning them, ignoring  the comma that exist inside the quotation marks and splitting all data with commas 
				String[] datas =line.split(",(?=([^\"]*\"[^\"]*\")*[^\"]*$)",-1);// there is a -1 in order to not ignore the last empty field in case it is empty 
				pw.println("{");
				for(int i =0 ; i<datas.length; i++) { // iterating over the fields and seeing if there is anything that is empty
			
					String s="\"" + titles[i]+ "\": "  +"\"" +  datas[i]+ "\",";

					pw.println(s);
				
				} pw.println("},");
				}
				
				else {	
				String[] fields =line.split(","); // in case there is no quotation then it will just split by comma
				pw.println("{");
				for(int i =0 ; i<fields.length; i++) {
					String s="\"" + titles[i]+ "\": "  +"\"" +  fields[i]+ "\",";

					pw.println(s);
				
				}pw.println("},");
	
			}
			}
		
			catch(Exception e50) {
				  System.out.println(e50.getMessage());
				 System.out.println();
		         System.out.println(line);
		         System.out.println();
		    
			}
			
	}pw.println("]");
	}
	
	/**
	 * this method checks the titles meaning the attributes one by one and checks if there is any of them empty if there is any empty it will throw the exception specified 
	 * @throws Exception
	 */
		public static void isvalid() throws Exception{
			String s1 = "CarRentalRecord";
			Scanner sc3 = new Scanner(new FileInputStream("C:\\Users\\chris\\eclipse-workspace\\Comp249_W21_Assg3_Files\\"+s1+".CSV"));
			String top= sc3.nextLine();
			
			
				if(top.contains(",,") || top.charAt(top.length()-1) == ',' || top.charAt(0) == ',' )
					throw new CSVFileInvalidException();	
		}
			
		public static void isvalid2() throws Exception{
			String s2= "CarMaintenanceRecord";
			Scanner sc4 = new Scanner(new FileInputStream("C:\\Users\\chris\\eclipse-workspace\\Comp249_W21_Assg3_Files\\"+s2+".CSV"));
			String topn= sc4.nextLine();
			
				if(topn.contains(",,")|| topn.charAt(topn.length()-1) == ',' || topn.charAt(0) == ',' )
					throw new CSVFileInvalidException();	
		}
		
		public static void openlogagain(int counter1,int counter2) throws Exception{
		try {  // in case if there is anything missing then in this method will open a log file and report inside it missing ones.

			PrintWriter pwlog2=null;					
			 pwlog2=new PrintWriter(new FileOutputStream("C:\\Users\\chris\\eclipse-workspace\\Comp249_W21_Assg3_Files\\"+"CSVDataMissingLogfile"+".txt"));
			
			 String s1 = "CarRentalRecord";
				Scanner sc4 = new Scanner(new FileInputStream("C:\\Users\\chris\\eclipse-workspace\\Comp249_W21_Assg3_Files\\"+s1+".CSV"));
				 
				String header= sc4.nextLine();
				String[] titles = header.split(",",-1);int datafullcount2=8;int dataemptycount2= 0; //datafullcount represent the non empty information of the file whereas the dataemptycount represents the empty ones
				pwlog2.println("<<<<<<<<In File CarRentalRecord.CSV>>>>>>>>>> ");pwlog2.println();pwlog2.println();pwlog2.println();// pwlog2 is the log file thar will report the errors
				
				while(sc4.hasNext())
				{  
					counter1++; //iteraring each time there is missing empty one
				String line= sc4.nextLine();String[] fields = line.split(",",-1);
			
				int i;int j ;

				for(i = 0 ;  i<fields.length;i++) {

							 if(((fields[i].equals("") )))  {

						dataemptycount2 = dataemptycount2 + 1;
						datafullcount2= datafullcount2 - 1;
						line = line.replace(",,",",***,");// replacing each ,, with a star
					
						pwlog2.println();
					    pwlog2.println("   line   " +  counter1+  "      is missing"  );
					    pwlog2.println(line);pwlog2.println();
					   
					  
					}
				}
				
				for(j = 0 ;  j<fields.length ; 	 j++) {
					
					
					 if((fields[j].equals("")  )   ) {
						

					System.out.println("Missing data:  " +  titles[j]);

					pwlog2.println("Missing data:  " +  titles[j]+ "  ");
					pwlog2.println();	
	
					}
				
				}
				
				}	
				pwlog2.println();	
				pwlog2.print("In Total of ALL LINES  there are:     "  + dataemptycount2 + "     missing  data(fields)");	 
		
			pwlog2.close();
			sc4.close();
		
		
		}
		catch(Exception e) {

		}
		
		try { // trying same steps with the second file
		 PrintWriter pwlog5=null;					
		 pwlog5=new PrintWriter(new FileOutputStream("C:\\Users\\chris\\eclipse-workspace\\Comp249_W21_Assg3_Files\\"+"CSVDataMissingLogfile2"+".txt"));
		 String s2 = "CarMaintenanceRecord";
			Scanner sc5 = new Scanner(new FileInputStream("C:\\Users\\chris\\eclipse-workspace\\Comp249_W21_Assg3_Files\\"+s2+".CSV"));
			String header1= sc5.nextLine();
			String[] titles1 = header1.split(",",-1);int datafullcount22=9;int dataemptycount22= 0;
			pwlog5.println("<<<<<<<<In File CarRentalRecord.CSV>>>>>>>>>> ");pwlog5.println();pwlog5.println();pwlog5.println();
			int i;int j ;String line;
			while(sc5.hasNext())
		{  
			
				counter2++; //iterating every time there is something empty 
		 line= sc5.nextLine();

		
		  if (line.contains("\"")) {
			
			
			
			String[] fields =line.split(",(?=([^\"]*\"[^\"]*\")*[^\"]*$)",-1);
			for(i = 0 ;  i<fields.length;i++) {

				
				 if(((fields[i].equals("") ))) {

			dataemptycount22 = dataemptycount22 + 1;
			datafullcount22= datafullcount22 - 1;
			line = line.replace(",,",",***,");
		
			pwlog5.println(line);pwlog5.println();
		    pwlog5.println();
		    pwlog5.println("   line   " +  counter2+  "      is missing"  );
		  
		}
	    
	}
	

	for(j = 0 ;  j<fields.length ; 	 j++) {
		
		
		 if((fields[j].equals("") ))   {
			

		System.out.println("Missing data:  " +  titles1[j]);

		pwlog5.println("Missing data:  " +  titles1[j]+ "  ");
		pwlog5.println();	

		}
	
	}
	  
		  }
			
			else {
					
				String[] fields =line.split(",",-1);
			
				for(i = 0 ;  i<fields.length;i++) {
		
						 if(((fields[i].equals("") )   )) {

				dataemptycount22 = dataemptycount22 + 1;
				datafullcount22= datafullcount22 - 1;
				line = line.replace(",,",",***,");
			
				pwlog5.println();
			    pwlog5.println("   line   " +  counter2+  "      is missing"  );
			    pwlog5.println(line);pwlog5.println();
			
			}
		}
		
		for(j = 0 ;  j<fields.length ; 	 j++) {
			
			
			 if((fields[j].equals("")  ) ) {
				
				 	
			System.out.println("Missing data:  " +  titles1[j]);

			pwlog5.println("Missing data:  " +  titles1[j]+ "  ");
			pwlog5.println();	

			}
		
		}

			}
		
		}	
		 pwlog5.println();	
		pwlog5.print("In Total of ALL LINES  there are:     "  + dataemptycount22 + "     missing  data(fields)");	
		
		sc5.close(); pwlog5.close();

		}
	
		catch(Exception e) {
//			return;
			}
		
		}

	// this file opens if there is any title missing and throws the CSVInvalidException
		public  static  void logopen() throws Exception  {

				try {
					PrintWriter pwlog=null;
			pwlog=new PrintWriter(new FileOutputStream("C:\\Users\\chris\\eclipse-workspace\\Comp249_W21_Assg3_Files\\"+"CSVFileInvalidExceptionLogfile"+".txt"));
			

			String s1 = "CarRentalRecord";

			Scanner sc4 = new Scanner(new FileInputStream("C:\\Users\\chris\\eclipse-workspace\\Comp249_W21_Assg3_Files\\"+s1+".CSV"));
			pwlog.println("File CarRentalRecord.CSV is  invalid");
			pwlog.println("File was not converted to .json");
			while(sc4.hasNextLine()) {
				String top= sc4.nextLine(); //top represent the first line of titles
				int dataemptycount= 0;
				String[] data0 = top.split(",",-1);
				int datafullcount =data0.length;// data0 represent each field of those lines 
				int i;

				for(i = 0 ;  i<data0.length ; i++) {

					
					if  ( (data0[i].equals("")))
					{

						top = top.replace(",,",",***,");

						dataemptycount ++;

						datafullcount --;

					}
				
				}

				pwlog.print(top);

				pwlog.print("\nMissing field: "  +  " " + datafullcount + "  detected,  "  + dataemptycount + " missing  ");	 
                break;	
			}
			pwlog.close();
				

				sc4.close();
					}
                 catch(Exception e) {
	                 //	return;
                             }

            try { // repeating same steps with the second file
            	String s2= "CarMaintenanceRecord";
			Scanner sc5 = new Scanner(new FileInputStream("C:\\Users\\chris\\eclipse-workspace\\Comp249_W21_Assg3_Files\\"+s2+".CSV"));
            	PrintWriter pwlog3=null;
			while(sc5.hasNextLine()) {
				
				pwlog3 =new PrintWriter(new FileOutputStream("C:\\Users\\chris\\eclipse-workspace\\Comp249_W21_Assg3_Files\\"+"CSVFileInvalidExceptionLogfile2"+".txt"));

				pwlog3.println("File CarRentalRecord.CSV is  invalid");
				pwlog3.println("File was not converted to .json");
				String topn= sc5.nextLine();
				int datafullcount2=0;int dataemptycount2= 0;
				String[] datanew= topn.split(",(?=([^\"]*\"[^\"]*\")*[^\"]*$)",-1);// datanewrepresent fields of eahc data

				datafullcount2 =datanew.length;

				int i ;
				for(i = 0 ;  i<datanew.length ; i++) {

					if  ( (datanew[i].equals("")))	
					{

						topn = topn.replace(",,",",***,");// repalcinf the empty data in the line 

						dataemptycount2 ++;

						datafullcount2 --;

					}	

				}
				
				pwlog3.print(topn);

				pwlog3.println("\nMissing field: "  +  " " + datafullcount2 + "  detected,  "  + dataemptycount2 + " missing  ");
		
			}
			pwlog3.close();	

				
				sc5.close();
            }
            catch(Exception e) {
//    			return;
    			}
		
		}
		/**
		 * this method checks if there is any field missing and if there is any data missing it throws CSVDataMissingException 
		 * param line
		 * param counter
		 * return
		 * throws Exception
		 */
		public static boolean hasEmptyField(String line,int counter) throws Exception{
			
	        String[] fields = line.split(",",-1);
	        for (int i = 0 ; i < fields.length ; i ++ ) 

	            	if (fields[i].equals("")  )
	            	throw new CSVDataMissingException(counter);
	        
	        return false;    
	    }
		
		
		
/**
 * 
 * The main method where it interactes with user
 */
		
	public static void main(String[] args) 
	{	
		
		
		System.out.println(" <<<<<<<<<<<<<<<<<<<<<< Welcome to my program that I designed >>>>>>>>>>>>>>>>");System.out.println(" <<<<<<<<<<<<<<<<<<<<<< Written by : Christina Darstbanian ID 40097340 >>>>>>>>>>>>>>>>");
		Scanner sc = null;		Scanner sc1 = null;	// A scanner object 
		String s1 = "CarRentalRecord";  String s2 = "CarMaintenanceRecord";
		PrintWriter pw=null;
		PrintWriter pw1=null;
		
		try
		{
			sc = new Scanner(new FileInputStream("C:\\Users\\chris\\eclipse-workspace\\Comp249_W21_Assg3_Files\\"+s1+".CSV"));
			sc1 = new Scanner(new FileInputStream("C:\\Users\\chris\\eclipse-workspace\\Comp249_W21_Assg3_Files\\"+s2+".CSV"));	
			pw=new PrintWriter(new FileOutputStream("C:\\Users\\chris\\eclipse-workspace\\Comp249_W21_Assg3_Files\\"+s1+".json"));
			pw1=new PrintWriter(new FileOutputStream("C:\\Users\\chris\\eclipse-workspace\\Comp249_W21_Assg3_Files\\"+s2+".json"));

		}
		catch(FileNotFoundException e) // in case none of the files can be created then it throws error exception 
		{							   
			System.out.println("Could not open input file "+   sc+  "for reading. Please check if file exists! Program will terminate after closing any opened files.");	
			
			System.exit(0);			   
		}
		
		System.out.println();	
		System.out.println("Now  we are processing file(s) for Validation Please wait  we are Validating......  ");
		System.out.println();	System.out.println();	System.out.println();
		/*
		 * it calls the method for validation 
		 */
		processFilesForValidation(sc, pw);
	
		processFilesForValidation1(sc1, pw1);
		
		sc.close();sc1.close();pw.close();pw1.close();
		try {
		test();
		
		}
		catch( Exception  e20) {
			System.out.println(e20.getMessage());
			
		}
	}
	
		public static void test() throws   Exception {
        int bigcounter=0; 
		String name1= null; Scanner kb = new Scanner(System.in);
	 while(bigcounter <2 ) 
	 {			      
	        bigcounter++; // counts the number of user can enter the file name
		 
	 
		       BufferedReader br = null;
		      
			 try {
				
    System.out.println("Please enter the  name of the file you wish to read and display: ");name1=kb.next(); 
					br = new BufferedReader(new FileReader("C:\\Users\\chris\\eclipse-workspace\\Comp249_W21_Assg3_Files\\"+name1+".json"));
						
						
					String lines = br.readLine();
					
					
					while(lines != null) // it will use buffereader class and read untill there is nothing left
					{
						
					System.out.println(lines);
					 lines = br.readLine();
					}
						
			 	
								
				 br.close();System.out.println();System.out.println();
				 System.out.println("<<<<<<<<<< The program will terminate thank you for choosing me to design this program. >>>>>>>>>>>>");
					System.exit(0);
					// terminating message of the program 
				}
	 
	 
		
			catch(Exception e33) {
				
				if(bigcounter == 2) {// in case the user enter twice and the file still not correct then it will catch the exception and exit
			System.out.println("!!!!!!!!!!ERROR  !!!!!!!!!! You have exhausted your attempts, SORRY  you can't enter another file name again the program will exit  ");
				kb.close(); throw new filenotfoundexception(); 
	             }
			}
		}
	 		
	
		}
		  		

}
