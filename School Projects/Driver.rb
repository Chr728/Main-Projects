#after loading all files has some test cases 
load "Circle.rb"
load "Shape.rb"
load "Ellipse.rb"
load "Rhombus.rb"
shape1 = Shape.new
  puts shape1.print()

  shape2 = Shape.new
  puts shape2.print()

c1 = Circle.new(3)
puts c1.print()

e1 = Ellipse.new(5,4)
puts e1.print
puts "eccentricity" 
puts e1.eccentricity()


puts puts 
r1 = Rhombus.new(3,2)
puts r1.print
puts  "inradius"
puts r1.inradius()

puts 
puts