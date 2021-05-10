from cs50 import get_string

def main():
        while True:
            text = get_string("text:  ")
            break

        letters = 0
        words = 1
        sentences = 0

        for i in range(len(text)):
            if text[i].isalpha():
                        letters +=1
            if text[i].isspace():
                            words +=1
            if  text[i] == '.' or text[i] == '!' or text[i] == '?':
                            sentences +=1

        L =float( letters * 100 / words )
        S = float (sentences * 100 / words)
        index = 0.0588 * L - 0.296 * S - 15.8
        K= round(index)

        if K>= 1 and K <= 16:
           print("Grade:", K )
        elif  K < 1:
           print("Before Grade 1")
        elif K > 16:
           print("Grade 16+")

main()