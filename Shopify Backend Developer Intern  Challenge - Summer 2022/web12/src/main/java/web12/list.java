package web12;

import java.util.ArrayList;

import java.io.File;
import java.io.PrintWriter;
import java.util.ArrayList;

public class list {
	static int counter = 0;
	public static ArrayList<item> items = new ArrayList<>();

	public static void insertitem(int quantity, String name) {
		items.add(new item(counter++, name, quantity));
	}

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






















































































//public class list {
//	static int counter=1;
//	public static ArrayList<item>  items= new ArrayList<>();
//	
//
//	
//	public static void insertitem(int quantity, String name)
//	{
//		
//		items.add(new item(counter++,name,quantity));
//		
//	}
//	
//	public static void deletetitem(int id)
//	{
//		System.out.println(id);
//	   int index=-1;
//	   for ( int i=0; i < items.size(); i++) 
//	   {
//		 if(items.get(i).getId() == id) 
//		 {
//		   index=i; 
//		   break;	 
//			 
//		 }
//		   
//	   }
//	   if(index  != -1) {
//	   items.remove(index);
//	   }
//	}
//	
//	
//	
//	
//	
//	public static void updateitem(int id, int quantity, String name) {
//		 int index=-1;
//		   for ( int i=0; i < items.size(); i++) 
//		   {
//			 if(items.get(i).getId() == id) 
//			 {
//			   index=i; 
//			   break;	 
//				 
//			 }
//			   
//		   }
//		
//		   if(index  != -1) {
//			   items.get(index).setquantity(quantity);
//			   items.get(index).setName(name);
//			   }
//		
//	}
//	
//}
//
//
