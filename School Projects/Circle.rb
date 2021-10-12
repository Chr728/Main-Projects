
load "Shape.rb"
#defining library PI
module MathLibrary
  PI = 3.14159265
end

class Circle < Shape
    #constructor
    def initialize(radius)
      #calling super from parent class
      super()
      @radius = radius
    end
  
    def perimeter
      #having some conditions to work
      result = (MathLibrary::PI * @radius * 2).round(5)
      if(@radius < 0)
        result = nil
      end
      return result
    end
  
    def area
      result = (MathLibrary::PI * @radius**2).round(5)
      if(@radius < 0)
        result = nil
      end
      return result
    end
end