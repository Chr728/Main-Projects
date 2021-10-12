// COMP 348 Assignment 3 - Questions 4 to 8, AspectJ Part
// Nareg Mouradian (40044254) , Aline Kurkdjian (40131528) , Christina Darstbanian (40097340)

//Made the aspect privileged to be able to access the private variables of the other files
public privileged  aspect IdentifiableAspect {
	private static int counter;

	//Question 4
	//Introducing Shape as a parent interface to both Circle and Rectangle
	declare parents : Circle implements Shape;
	declare parents : Rectangle implements Shape;

	//Implementing the getName() method for Circle
	public String Circle.getName() {
		return "Circle";
	}
	//Implementing the getName() method for Rectangle
	public String Rectangle.getName() {
		return "Rectangle";
	}

	//Question 5
	//Overriding the toString() method for Circle
	public String Circle.toString() {
		return Circle.class.getName() + "(" + (int) radius + ")";
	}
	//Overriding the toString() method for Rectangle
	public String Rectangle.toString() {
		return Rectangle.class.getName() + "(" + (int) width + ", " + (int) height + ")";
	}

	//Question 6
	//Implementing Circle.getArea() using context passing
	pointcut areaCalc (Circle c) : execution(double Circle.getArea()) && this(c);
	double around(Circle c) : areaCalc(c) {
		return Math.PI * Math.pow( c.radius , 2);
	}

	//Question 7
	//Handling the negative values using context passing
	double around(Circle c) : (execution(double Circle.getArea()) || execution(double Circle.getPerimeter())) && this(c) {
		if( c.radius < 0) {
			return 0;
		}
		else
			return proceed(c);
	}

	double around(Rectangle r) : (execution(double Rectangle.getArea()) || execution(double Rectangle.getPerimeter())) && this(r) {
		if( r.width < 0 || r.height < 0) {
			return 0;
		}
		else
			return proceed(r);
	}






	// Question 8 , implementing the identifiable
	declare parents : Rectangle implements Identifiable;

	declare parents : Circle implements Identifiable;

	int Circle.obj_ID;
	int Rectangle.obj_ID;

	// having the pointcut for execution 
	pointcut constructorcall(): execution(Circle.new(..)) ||  execution(Rectangle.new(..));

	after(Circle shapec): this(shapec) && constructorcall() {
		shapec.obj_ID= counter++;
	}

	// having the counter incrementing with the advice after
	after(Rectangle shaper): this(shaper)  && constructorcall()  {
		shaper.obj_ID = counter++;
	}

	public int Circle.getId(){
		return this.obj_ID;
	}

	public int Rectangle.getId(){
		return this.obj_ID;
	}




}
