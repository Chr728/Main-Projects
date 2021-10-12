 #!/usr/bin/ruby
 
 class Shape
  @@counter=1
  @id=0

  #initlializing the id 
  def initialize
    @id = @@counter
    @@counter +=1
  end

  #required print function
  def print
    puts @id.to_s + ": " + self.class.to_s + ', perimeter: ' + unless perimeter == nil then  perimeter.to_s   else "undefined"   end + ', area: ' +  unless area == nil then  area.to_s   else "undefined"   end
  end
   
  #returns nil by default 
  def perimeter
    nil
  end
  
  def area
    nil
  end
end
  