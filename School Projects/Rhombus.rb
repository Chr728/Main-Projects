load "Shape.rb"

class Rhombus < Shape
  def initialize(d1, d2)
    super()
    @d1 = d1
    @d2 = d2
  end

  def perimeter
    # need to use the formula a * 4 
    result = (2 * Math.sqrt(@d1**2 + @d2**2)).round(5)
    if(@d1 < 0 or @d2 < 0)
      result = nil
    end
    return result
  end

  def area
    #having some conditions set
    result = (0.5 * @d1 * @d2).round(5)
    if(@d1 < 0 or @d2 < 0)
      result = nil
    end
    return result
  end

  def inradius
    result = ((@d1*@d2) / (2*(Math.sqrt((@d1**2)+(@d2**2))))).round(5)
    if(@d1 < 0 or @d2 < 0)
      result = nil
    end
    return result
  end
end