#COMP 348 Assignment 3- Question 2
#  Nareg Mouradian  , Aline Kurkdjian  , Christina Darstbanian 
load "Circle.rb"
load "Shape.rb"
load "Ellipse.rb"
load "Rhombus.rb"

# hash containing the different shape quantities
hashShapes = {"Circle(s)" => 0,
              "Ellipse(s)" => 0,
              "Rhombus(es)" => 0,
              "Shape(s)" => 0}
# reads the txt file line by line
File.open("shapes.txt").each do |line|
  # splits the current line
  str = line.split(" ")
  if (str[0] == "shape")
    hashShapes["Shape(s)"] += 1
    obj = Shape.new
    obj.print
    # Checks if its type circle
  elsif (str[0] == "circle")
    hashShapes["Shape(s)"] += 1
    hashShapes["Circle(s)"] += 1
    #create new Circle object and pass radius as an integer
    obj = Circle.new(str[1].to_i)
    #error message for invalid radius value
    if(str[1].to_i < 0)
      puts "Error: Invalid " + obj.class.to_s
    end
    obj.print
    #Checks if its type ellipse
  elsif (str[0] == "ellipse")
    hashShapes["Shape(s)"] += 1
    hashShapes["Ellipse(s)"] += 1
    #create new Circle object and pass the semi-major and semi-minor axes as an integer
    obj = Ellipse.new(str[1].to_i, str[2].to_i)
    #error message for invalid value
    if(str[1].to_i < 0 or str[2].to_i < 0)
      puts "Error: Invalid " + obj.class.to_s
      obj.print
      next
    end
    obj.print
    puts "    linear eccentricity: " + obj.eccentricity.to_s
    # Checks if its type rhombus
  elsif (str[0] == "rhombus")
    hashShapes["Shape(s)"] += 1
    hashShapes["Rhombus(es)"] += 1
    #create new Rhombus object and pass the two diagonals as an integer
    obj = Rhombus.new(str[1].to_i, str[2].to_i)
    #error message for invalid value of diagonals
    if(str[1].to_i < 0 or str[2].to_i < 0)
      puts "Error: Invalid " + obj.class.to_s
      obj.print
      next
    end
    obj.print
    puts "    in-radius: " + obj.inradius.to_s
    # if line is empty, goes next line
  elsif (line.empty? || line == "\n")
    next
    # incorrect naming, tells the user invalid input
  else
    puts "****Invalid input!****"
  end
end
#prints the statistics
puts "\nStatistics: "
hashShapes.each { |key, value| puts "   " + key + ": " + value.to_s}
