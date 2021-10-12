
load "Shape.rb"

class Ellipse < Shape
  def initialize(a, b)
    #calling constructor
    super()
    @a = a
    @b = b
  end
  
  def area
    #conditions of area
    result = (MathLibrary::PI * @a * @b).round(5)
    if(@a < 0 or @b < 0)
      result = nil
    end
    return result
  end
  
  def eccentricity
    if (@a>@b)
      (Math.sqrt((@a**2)-(@b**2))).round(5)
    elsif (@b>@a)
      (Math.sqrt((@b**2)-(@a**2))).round(5)
    else
      nil
    end
  end
end