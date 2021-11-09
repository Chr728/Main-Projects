/*
 * COMP 352
 * Assignment 2
 * Summer 2021
 * 
 * James Partsafas 40170301
 * Christina Darstbanian 40097340
 */

public class MyLinkedList<E> implements List<E> {
	
	//Inner class
	public class Node {
		
		//attributes
		public Node next;
		public Node prev;
		public E e;
		
		//constructors
		public Node() {
			next = null;
			prev = null;
			e = null;
		}
		
		public Node(Node prev, Node next, E e) {
			this.next = next;
			this.prev = prev;
			this.e = e;
		}
		
		public Node(Node node) {
			this.next = node.next;
			this.prev = node.prev;
			this.e = (E) node.e;
		}
		
		//Methods
		public String toString() {
			return e.toString();
		}
		
	} //End inner class
	
	//Attributes
	public int size;
	public Node head;
	public Node tail;
	
	//Constructors
	public MyLinkedList() {
		size = 0;
		head = new Node(null, null, null);
		tail = new Node(head, null, null);
		head.next = tail;
	}
	
	
	//Implemented methods
	
	public boolean add(E e) {
		
		//empty list case
		if (size == 0) {
			Node inserted = new Node(null, null, e);
			head = inserted;
			tail = inserted;
		}
		//general case
		else {
			Node previousFinal = tail;
			Node inserted = new Node(previousFinal, null, e);
			previousFinal.next = inserted;
			tail = inserted;
		}
		
		size++;
		
		return true;
	}

	public void add(int index, E element) {
		
		//special case: invalid index
		if (index < 0 || index > size) {
			System.out.println("That is an invalid index.");
			return;
		}
		
		//index is valid
		//special case: index is at start of list
		Node t = null;
		if (index == 0) {
			addToStart(element);
			return;
		}
		
		//special case: index is at end of list
		if (index == size) {
			add(element);
			return;
		}
		
		//Get to index either starting from head or tail of list
		int mid = size/2;
		//index is closer to start:
		if (index < mid) {
			t = head;
			int counter = 0;
			while (counter != index) {
				t = t.next;
				counter++;
			}
		}
		//index is closer to end
		else {
			t = tail;
			int counter = size-1;
			while (counter != index) {
				t = t.prev;
				counter--;
			}
		}
		
		//We have a pointer on the correct node
		addBetween(element, t.prev, t);
		
	}

	public void clear() {
		head = null;
		tail = null;
		size = 0;
	}
	
	public E remove(int index) {
		//special case: Empty list
		if (size == 0) {
			System.out.println("The list is empty.");
			return null;
		}
		
		//special case: invalid index
		if (index < 0 || index >= size) {
			System.out.println("That is an invalid index.");
			return null;
		}
		
		//index is valid
		//special case: size is 1
		Node t = null;
		if (size == 1) {
			t = head;
			head = null;
			tail = null;
			size--;
			System.out.println("The element has been succesfully removed using the index.");
			return t.e;
		}
		
		//special case: index is at start of list
		if (index == 0) {
			t = head;
			t.next.prev = null;
			head = t.next;
			t.next = null;
			size--;
			System.out.println("The element has been succesfully removed using the index.");
			return t.e;
		}
		
		//special case: index is at end of list
		if (index == size-1) {
			t = tail;
			t.prev.next = null;
			tail = t.prev;
			t.prev = null;
			size--;
			System.out.println("The element has been succesfully removed using the index.");
			return t.e;
		}
		
		//Get to index either starting from head or tail of list
		int mid = size/2;
		//index is closer to start:
		if (index < mid) {
			t = head;
			int counter = 0;
			while (counter != index) {
				t = t.next;
				counter++;
			}
		}
		//index is closer to end
		else {
			t = tail;
			int counter = size-1;
			while (counter != index) {
				t = t.prev;
				counter--;
			}
		}
		
		//We have a pointer on the correct node
		t.prev.next = t.next;
		t.next.prev = t.prev;
		t.next = t.prev = null;
		size--;
		System.out.println("The element has been succesfully removed using the index.");
		return t.e;
	}
	
	public boolean remove(E e) {
		//Special case: empty list
		if (size == 0) {
			System.out.println("Nothing can be removed as the list is empty!\n");
			return false;
		}
		
		//Special case: Only 1 element in list
		if (size == 1) {
			if (e.equals(head.e)) {
				head = null;
				tail = null;
				size--;
				System.out.println("The element was succesfully removed!\n");
				return true;
			}
			else {
				System.out.println("The element could not be removed as it was not found...\n");
				return false;
			}
		}
		
		//General case:
		Node t = head;
		if (e.equals(t.e)) { //first element matches
			head = t.next;
			size--;
			System.out.println("The element was succesfully removed!\n");
			return true;
		}
		t = t.next;
		while (t.next != null) {
			if (e.equals(t.e)) {
				t.prev.next = t.next;
				t.next.prev = t.prev;
				size--;
				System.out.println("The element was succesfully removed!\n");
				return true;
			}
			t = t.next;
		}
		//Check if final element is a match
		if (e.equals(t.e)) {
			t.prev.next = null;
			tail = t.prev;
			t.prev = null;
			size--;
			System.out.println("The element was succesfully removed!\n");
			return true;
		}
		System.out.println("The element could not be removed as it was not found...\n");
		return false;
	}
	
	public String toString() {
		if (size == 0) {
			return "The list is empty!";
		}
		else {
			String s = "The list has " + size + " elements!\n";
			Node t = head;
			//Get toString of all elements in list
			while(t != null) {
				s += t.toString() + "\n";
				t = t.next;
			}
			return s;
		}
	}

	public int size() {
		return size;
	}
	
	//Helper methods
	private void addBetween(E e, Node prev, Node next) {
		Node inserted = new Node(prev, next, e);
		prev.next = inserted;
		next.prev = inserted;
		size++;
	}
	
	private void addToStart(E e) {
		if (size == 0) {
			add(e);
			return;
		}
		Node t = head;
		Node inserted = new Node(null, t, e);
		t.prev = inserted;
		head = inserted;
		size++;
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
