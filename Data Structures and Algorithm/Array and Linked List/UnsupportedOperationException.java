/*
 * COMP 352
 * Assignment 2
 * Summer 2021
 * 
 * James Partsafas 40170301
 * Christina Darstbanian 40097340
 */

public class UnsupportedOperationException extends Exception {
	
	public UnsupportedOperationException() {
		super("That operation is not supported");
	}
	
	public UnsupportedOperationException(String message) {
		super(message);
	}
}
