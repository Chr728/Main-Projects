/*
 * COMP 352
 * Assignment 2
 * Summer 2021
 * 
 * James Partsafas 40170301
 * Christina Darstbanian 40097340
 */

public class MyArrayList<E> implements List<E> {
	
	//attributes
	private int size = 0; //size represents number of elements in array, not array size
	private static final int defaultSize = 3;
	private Object list[];
	
	//constructors
	public MyArrayList() {
		list = new Object[defaultSize];
	}
	
	public MyArrayList(int arraySize) {
		if (arraySize > 0)
			list = new Object[arraySize];
		else
			list = new Object[defaultSize];
	}
	
	//Implemented methods
	public boolean add(E e) {
		list[size] = e;
		size++;
		setLength();
		return true;
	}

	public void add(int index, E element) {
		//special case: incorrect index
		if (index < 0 || index > size) {
			System.out.println("An element cannot be added to that index...\n");
			return;
		}
		
		//General case
		upShift(index);
		list[index] = element;
		
	}

	public void clear() {
		for (int i = 0; i < size; i++) {
			list[i] = null;
		}
		size = 0;
		setLength();
	}

	public E remove(int index) {
		//special case: empty list
		if (size == 0) {
			System.out.println("An element cannot be removed as the ArrayList is empty\n");
			return null;
		}
		
		//special case: incorrect index
		if (index < 0 || index > size) {
			System.out.println("An element cannot be removed from that index...\n");
			return null;
		}
		
		//general case
		E e = (E) list[index];
		downShift(index);
		return e;
	}

	public boolean remove(E e) {
		//special case: empty list
		if (size == 0) {
			System.out.println("That element cannot be removed as the ArrayList is empty\n");
			return false;
		}
		
		//general case:
		boolean found = false;
		int index = 0;
		for (int i = 0; i < size; i++) {
			if (list[i].equals(e)) {
				index = i;
				found = true;
				break;
			}
		}
		
		if (found) {
			downShift(index);
			return true;
		}
		else {
			System.out.println("The element was not found in the ArrayList...\n");
			return false;
		}
	}

	public int size() {
		return size;
	}
	
	public String toString() {
		if (size == 0) {
			return "The list contains no elements...\n";
		}
		else {
			String s = "The list contains " + size + " elements: \n";
			for (int i = 0; i < size; i++)
				s += list[i].toString() + "\n";
			return s;
		}
	}
	
	
	//helper methods
	
	//Methods that shift elements after a given index
	public void downShift(int index) {
		for (int i = index; i < size; i++) {
			list[i] = list[i+1];
		}
		list[size] = null;
		size--;
		setLength();
	}
	
	private void upShift(int index) {
		size++;
		setLength();
		for (int i = size-1; i > index; i--)
			list[i] = list[i-1];
	}
	
	//Calls appropriate array resizing method
	private void setLength() {
		if (size >= list.length) {
			upSize();
			return;
		}
		else if (size <= list.length/4) {
			downSize();
			return;
		}
	}
	
	private void upSize() {
		int newSize = list.length * 2;
		Object newList[] = new Object[newSize];
		
		//copy items to new array
		for (int i = 0; i < size; i++) {
			newList[i] = list[i];
		}
		//Point list to new list
		list = newList;
	}
	
	private void downSize() {
		int newSize = list.length/2;
		Object newList[] = new Object[newSize];
		
		//copy items to new array
		for (int i = 0; i < size; i++) {
			newList[i] = list[i];
		}
		//Point list to new list
		list = newList;
	}
	
	public E get(int i) {
		return (E) list[i];
	}
	
	//Unimplemented methods
	
	public boolean isEmpty() throws UnsupportedOperationException {
		throw new UnsupportedOperationException();
	}
	public int[] toArray() throws UnsupportedOperationException {
		throw new UnsupportedOperationException();
	}
	public int indexOf(E e) throws UnsupportedOperationException {
		throw new UnsupportedOperationException();
	}
	public boolean contains(E e) throws UnsupportedOperationException {
		throw new UnsupportedOperationException();
	}

}
