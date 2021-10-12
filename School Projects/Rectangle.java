//-----------------------------------------------------
//Comp 348 Assignment 1
//Aline Kurkdjian 40131528
//Christina Darstbanian 40097340
//Nareg Mouradian 40044254
//-----------------------------------------------------
public class Rectangle  implements Shape{
	double side1;
	double side2;
	double perimeter;
	double area;
	

	public Rectangle() {		
		 side1=0;
		 side2=0;
		 perimeter = 0;
		 area = 0;
	}

	public Rectangle(double side1, double side2) {		
		this.side1 = side1;
		this.side2 = side2;
		this.perimeter = 2*side1 + 2*side2;
		this.area = side1*side2;
	}


	public static Rectangle parse(String rec)  // where rec represents the input that includes rectangle and two values seperated by comma
	{		
		String[] values =rec.split(",",-1);
		
		double s1 = Double.parseDouble(values[1]);
		double s2 = Double.parseDouble(values[2]);
		return new Rectangle(s1,s2);	
	}
	
	
	public double getSide1() {
		return side1;
	}
	public void setSide1(double side1) {
		this.side1 = side1;
	}
	public double getSide2() {
		return side2;
	}
	public void setSide2(double side2) {
		this.side2 = side2;
	}
	
	public String toString() {
	
		return this.getClass().getName() + "," + side1 + "," + side2;
		
	}	

	public  double getperimeter() {
		return perimeter;
	}
	
	public  double getarea() {
		return area;
	}
	
	public String getname() 
	{
		return this.getClass().getName().toUpperCase();
	}
}