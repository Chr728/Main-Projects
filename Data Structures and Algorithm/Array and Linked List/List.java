/*
 * COMP 352
 * Assignment 2
 * Summer 2021
 * 
 * James Partsafas 40170301
 * Christina Darstbanian 40097340
 */

public interface List<E> {
	public boolean add(E e);
	public void add(int index, E element);
	public void clear();
	public E remove(int index);
	public boolean remove(E o);
	public String toString();
	public int size();
	
	//Unimplemented methods
	public boolean isEmpty() throws UnsupportedOperationException;
	public int[] toArray() throws UnsupportedOperationException;
	public int indexOf(E e) throws UnsupportedOperationException;
	public boolean contains(E e) throws UnsupportedOperationException;
}
