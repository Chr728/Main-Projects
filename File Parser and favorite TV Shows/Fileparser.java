/*
 * Christina Darstbanian 40097340
 * date 24-04-2021  part 1 
 */
import java.util.ArrayList;
import java.util.Scanner;
import java.io.PrintWriter;
import java.io.FileOutputStream;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.IOException;

/*
 * program starts with a method called process files for validation that takes into 3 arraylist
 */
public class Fileparser {

	public static void processFilesForValidation(Scanner sc,PrintWriter pw,PrintWriter pw1,PrintWriter pw2) 
	{           
		ArrayList<String> A1 = new ArrayList<String>();
		ArrayList<String> A2 = new ArrayList<String>();
		ArrayList<String> A3 = new ArrayList<String>();
		String line1= "", line2= "", line3 = "";
		while (sc.hasNext()) {
			String line=sc.next();
			line= line.replaceAll("[^a-zA-Z0-9]", "");
			char[] c = line.toLowerCase().toCharArray();
			/*
			 * each time we add the lines one by one to the array list 
			 */
			if(!(A1.contains(line))){
		 line1= line;
				A1.add(line1);
               pw.println(line1);
				// we print the contents each time to the output file

			}
			
			
			
			int counter =0;			
			for(char cc : c) {  
				/*
				 * to make sure that we have the required vowels
				 */
				if(cc== 'a' ||cc == 'i' || cc == 'e' || cc == 'u' || cc == 'o') {	
					counter++;
				}
			}
			if(counter>3) {

					 line2 = line;
				A2.add(line2);
				 pw1.println(line2);
				 /*
					 * again same thing we write everything to the second line 
					 */
			}
			line= line.toLowerCase();
			for(int i =0; i <line.length(); i++) {
				if(line.charAt(0) == 'o') {
					 line3= line;
					A3.add(line3);
					 pw2.println(line3);
					break;

				}
				else {
					System.out.print("");
				}
			}
		
		
		}
		
	}



	public static void count(Scanner sc1,PrintWriter pw,PrintWriter pw1,PrintWriter pw2 ) {

		ArrayList<String> A1 = new ArrayList<String>();
		ArrayList<String> A2 = new ArrayList<String>();
		ArrayList<String> A3 = new ArrayList<String>();
		while (sc1.hasNext()) {
			String line=sc1.next();
			/*
			 * replacing all nonalphanumeric values that we dont need
			 */
			line= line.replaceAll("[^a-zA-Z0-9]", "");
			char[] c = line.toLowerCase().toCharArray();
			if(!(A1.contains(line))){
				A1.add(line);
			}

			/*
			 * counteing the number of words that exist in the output file to display them at the top
			 */
			int counter =0;			
			for(char cc : c) { 	
				if(cc== 'a' ||cc == 'i' || cc == 'e' || cc == 'u' || cc == 'o') {	
					counter++;
				}
			}
			if(counter>3) {

				A2.add(line);

			}


			line= line.toLowerCase();
			for(int i =0; i <line.length(); i++) {
				if(line.charAt(0) == 'o') {
					A3.add(line);
					break;

				}
				else {
					System.out.print("");
				}
			}


		}	
		pw.println(A1.size());
		pw1.println(A2.size());
		pw2.println(A3.size());

	}
	public static void main(String[] args) {
		System.out.println("Welcome to my program");
		System.out.println("Written by Christina Darstbanian 40097340");
      System.out.println("Please enter  the file name: ");
		Scanner in = new Scanner(System.in); String name = in.next();
		Scanner sc = null;Scanner sc1 = null;Scanner sc2 = null;Scanner sc3 = null;	PrintWriter pw = null;PrintWriter pw1 = null;PrintWriter pw2 = null;
		try
		{
			
			/*
			 * opening all the scanners and closing them  
			 */
			sc = new Scanner(new FileInputStream("C:\\Users\\chris\\eclipse-workspace\\Comp249_W21_Assg4_Files\\"+name+".txt"));
			
			
			sc1 = new Scanner(new FileInputStream("C:\\Users\\chris\\eclipse-workspace\\Comp249_W21_Assg4_Files\\"+name+".txt"));
				
			System.out.println();System.out.println("We are processing this file........please wait it will not take long ");
			System.out.println();
			System.out.println("Processing was complete and now you can check the output files");

			pw=new PrintWriter(new FileOutputStream("C:\\\\Users\\\\chris\\\\eclipse-workspace\\\\Comp249_W21_Assg4_Files\\"+"distinct_ddata"+".txt"));

			pw1=new PrintWriter(new FileOutputStream("C:\\\\Users\\\\chris\\\\eclipse-workspace\\\\Comp249_W21_Assg4_Files\\"+"vowel_vverbiage"+".txt"));
			pw2=new PrintWriter(new FileOutputStream("C:\\\\Users\\\\chris\\\\eclipse-workspace\\\\Comp249_W21_Assg4_Files\\"+"obsessive_oo"+".txt"));
			
		}
		/*
		 * catching the exception not found
		 */
		catch(FileNotFoundException e) // in case none of the files can be created then it throws error exception 
		{							   
			System.out.println("Could not open input file "+   sc+  "for reading. Please check if file exists! Program will terminate after closing any opened files.");	

			System.exit(0);			   
		}


		count(sc1,pw,pw1,pw2);
		processFilesForValidation(sc,pw,pw1,pw2);


		sc.close();
		pw.close();
		sc1.close();
		pw1.close();
		pw2.close();
	}

		
		
		
		
		
		
		
		
		
		

	
	
	
	
	
	

}

