from cs50 import get_float


def main():
        while True:
                n = get_float("change:  ")
                if n >=0:

                    break
        x = round(n * 100)
        Y=0
        H=0
        K=0
        L=0

        if  x >= 25:
              Y = x//25


        if x >= 10:
              H = (x% 25) //10


        if  x >= 5:
              K= (x %25 % 10) //5


        if  x >= 1:
              L= (x% 25 %10 %5 )//1


        V= Y+H +K +L
        print(V)

main()

