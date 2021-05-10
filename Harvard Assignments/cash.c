//begining 
#include <cs50.h>
#include <math.h>
#include <stdio.h>
int main(void)
{ 
     
    float n ;
    int yahya = 0 ;
    int x = 0 ;
    
    do 
    {
        n = get_float("change : ");
    
    } 
    
    // adding conditions 
    while (n < 0);  
    
    x  = round(n * 100);
    
    while (x > 0)
    {
        
        if (x >= 25)
    
        { 
          
            yahya = yahya + 1;
            x = x - 25; 
        }
     
      
        else  if (x >= 10)
        { 
            yahya = yahya + 1;
            x = x - 10; 
        }
    
        
        else  if (x >= 5)
        { 
            yahya = yahya + 1;
            x = x - 5; 
        }
     
        
        
        else  if (x >= 1)
        { 
            yahya = yahya + 1;
            x = x - 1; 
        } 
    
    }
    
    // printing the values 
    
    
    printf("Your total is yahya  %d.\n", yahya);
    
    
    printf("\n"); 


}


