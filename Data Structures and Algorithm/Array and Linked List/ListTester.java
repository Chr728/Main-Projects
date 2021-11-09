
/*
 * COMP 352
 * Assignment 2
 * Summer 2021
 * 
 * James Partsafas 40170301
 * Christina Darstbanian 40097340
 */

public class ListTester {

	public static void main(String[] args)  {
		try {
		System.out.println("Welcome to our program we will test some of methods");
		MyLinkedList<Integer> list = new MyLinkedList<Integer>();
		// to test some of the method we start to insert 
		list.add(20);
		list.add(1);
		list.add(2);
		System.out.println(list);
		list.add(3);
		list.add(4);
		System.out.println(list.size());
		list.add(23);
		list.add(6);
		list.clear();
		list.add(25);
		
		list.add(16);

		System.out.println(list);
		System.out.println(list.remove(5));
		System.out.println(list);
	
		
		
		// we try to do same with arraylist
		MyArrayList<Integer> list1 = new MyArrayList<Integer>();
		
		list1.add(20);
		list1.add(1);
		list1.add(2);
		System.out.println(list1);
		list1.add(3);
		list1.add(4);
		System.out.println(list1.size());
		list1.add(23);
		list1.add(6);
		list1.clear();
		list1.add(25);
	
		list1.add(16);
		
		System.out.println(list1);
		
		
		System.out.println(list.contains(25));
		System.out.println(list.isEmpty());
		System.out.println(list1.contains(25));
		System.out.println(list1.isEmpty());
		System.out.println();System.out.println();System.out.println("Thank you for choosing us !");
		
		}
		catch(UnsupportedOperationException e) {
			System.out.println(e.getMessage());
	    	  
	      }
		}

}