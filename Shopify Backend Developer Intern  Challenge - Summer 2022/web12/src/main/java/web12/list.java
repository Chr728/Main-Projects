package web12;
/*
Author: Christina Darstbanian
*/
import java.util.ArrayList;

import java.io.File;
import java.io.PrintWriter;
import java.util.ArrayList;

public class list {
	static int counter = 0;
	// all the items are stored in an ArrayList instead of using a database
	public static ArrayList<item> items = new ArrayList<>();
         
	/*
	the function adds items to the list by having the quantity and the name of the item
	*/
	public static void insertitem(int quantity, String name) {
		items.add(new item(counter++, name, quantity));
	}

	/*
	the function deletes items from the list using the unique item id of each item.
	*/
	public static void deletetitem(int id) {
		int index = -1;
		for (int i = 0; i < items.size(); i++) {
			if (items.get(i).getId() == id) {
				index = i;
				break;
			}
		}
		if (index != -1) {
			items.remove(index);
		}
	}
	
	/*
	the function updates the quantity and name of a specific item.
	Note  that the id is unique for each item and I chose to not change any specific id.
	*/

	public static void updateitem(int id, int quantity, String name) {
		int index = -1;
		for (int i = 0; i < items.size(); i++) {
			if (items.get(i).getId() == id) {
				index = i;
				break;
			}
		}
		if (index != -1) {
			items.get(index).setQuantity(quantity);
			items.get(index).setName(name);
		}

	}
	
	
	/*
	extra feature where by clicking it will generate a .csv file on the desktop
	*/
	
	public static void exportCSV() {
		StringBuilder stringBuilder = new StringBuilder();
		PrintWriter printWriter = null;
		
		stringBuilder.append("ID,Name,Quantity\r\n");
		for (item item : items) {
			stringBuilder.append(item.getId() + ",");
			stringBuilder.append(item.getName() + ",");
			stringBuilder.append(item.getQuantity() + "\r\n");
		}
		try {
			printWriter = new PrintWriter(new File("./Items.csv"));
			printWriter.write(stringBuilder.toString());
		} catch (Exception e) {
			e.printStackTrace();
		}finally {
			printWriter.close();
		}
	}

}

