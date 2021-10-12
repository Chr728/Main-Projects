//-----------------------------------------------------
//Comp 348 Assignment 1
//Aline Kurkdjian 40131528
//Christina Darstbanian 40097340
//Nareg Mouradian 40044254
//-----------------------------------------------------
public class Circle implements Shape {
	
	double radius;
	double perimeter;
	double area;

    public Circle(double radius) {
		this.radius = radius;
		this.perimeter = Math.PI * 2 * radius;
		this.area = Math.PI * radius * radius;
    }      
	
	public double getRadius() {
		return radius;
	}

	public void setRadius(double r) {
		this.radius = r;
	}

	public static Circle parse(String cir)  // where cir represents the input that includes circle and the value of its radius seperated by comma
	{		
		String[] values =cir.split(",",-1);		
		double r =Double.parseDouble(values[1]);		
		return new Circle(r);	
	}
	
	public String toString() {		
		return this.getClass().getName() +"," + radius;
	}

	public double getperimeter() {
		return perimeter;
	}

	
	public double getarea() {
		return area;
	}
	
	public String getname() 
	{
		return this.getClass().getName().toUpperCase();
	}
}