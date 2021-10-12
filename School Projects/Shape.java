//-----------------------------------------------------
//Comp 348 Assignment 1
//Aline Kurkdjian 40131528
//Christina Darstbanian 40097340
//Nareg Mouradian 40044254
//-----------------------------------------------------
public interface Shape {
	double perimeter=0;
	double area=0;
	
	default String getname() 
	{
		return this.getClass().getName();
	}
		
	public  double getperimeter();
	public  double getarea();
		
}