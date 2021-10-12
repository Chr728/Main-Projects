//-----------------------------------------------------
//Comp 348 Assignment 1
//Aline Kurkdjian 40131528
//Christina Darstbanian 40097340
//Nareg Mouradian 40044254
//-----------------------------------------------------

import java.io.IOException;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.util.ArrayList;
import java.util.Arrays;
import java.util.Comparator;
import java.util.Scanner;
import java.util.stream.Stream;

public class Driver {

	public static void main(String[] args) {

		//initializing array list 
		ArrayList<Shape> arr = new ArrayList<Shape>();
		ArrayList<Shape> arrCircles = new ArrayList<Shape>();
		ArrayList<Shape> arrRectangles = new ArrayList<Shape>();
		System.out.println(" Welcome, please enter the file name containing the shapes!");
		//scanner for file name 
		Scanner sc = new Scanner(System.in);
		String name = sc.nextLine();
		Path path = Paths.get(name);
		
		//go through each shape through text file using stream
        try (Stream<String> stream = Files.lines(path)) {
        	stream.forEach(a -> {
        		String[] val = a.split(",");
        		if(val[0].equals("Rectangle")) {
        			arr.add(Rectangle.parse(a));
        			arrRectangles.add(Rectangle.parse(a));
        		} else {
        			arr.add(Circle.parse(a));
        			arrCircles.add(Circle.parse(a));
        		}
        	});
        }
        catch (IOException e) {
            e.printStackTrace();
        }
        
        // Sorting by name and area
        arr.sort(Comparator.comparing(Shape::getname).thenComparing(Shape::getperimeter));
        Shape[] records = arr.toArray(new Shape[0]);
        System.out.println("Sorting by name & area:");
        arr.forEach(shape -> System.out.println(shape.getname() + ": " + shape.getarea()));
        
        // Sorting by perimeter
        Arrays.sort(records,(a,b)-> Double.compare(a.getperimeter(), b.getperimeter()));
        ArrayList<Shape> newList = new ArrayList<>();
        newList.addAll(Arrays.asList(records));
        System.out.println("\nSorting by Perimeter:");
        newList.forEach(shape -> System.out.println(shape.getname() + ": " +shape.getperimeter()));
        
        // Display average values
        System.out.println("\nTotal Number of Shapes: " + arr.size());
        System.out.println("\nTotal Number of Circles: " + arrCircles.size());
        System.out.println("Average perimeter for Circles: " + arrCircles.stream().mapToDouble(Shape::getperimeter).average().getAsDouble());
        System.out.println("Average area for Circles: " + arrCircles.stream().mapToDouble(Shape::getarea).average().getAsDouble());
        System.out.println("\nTotal Number of Rectangles: " + arrRectangles.size());
        System.out.println("Average perimeter for Rectangles: " + arrRectangles.stream().mapToDouble(Shape::getperimeter).average().getAsDouble());
        System.out.println("Average area for Rectangles: " + arrRectangles.stream().mapToDouble(Shape::getarea).average().getAsDouble());
        //closing message
        System.out.println("Thank you for using this program");
	}
}