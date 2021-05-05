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
 * @author Christina Darstbanian ID: 40097340 
 *
 */
public class CSVFileInvalidException  extends Exception{
	// this class has the constructor in case if any attribute missing it calls it 

	public   CSVFileInvalidException ()
	{
		
		super("**************File is invalid: field is missing*******************"+
		                   "\n  *******************!!!  Error !!!  ************************************  " );
		System.out.println();
		System.out.println("***************************************************************");
		System.out.println("**************File is not converted to JSON.*******************");
		
		System.out.println();
	
		
	}
	
	public CSVFileInvalidException (String message){

        super(message);

    }
	
	
	
	
	

	public String getMessage()
	{
		return super.getMessage();
	}

	
	
}











