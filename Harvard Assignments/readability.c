#include <cs50.h>
#include <stdio.h>
#include <math.h>
#include <ctype.h>
#include <string.h>

int letters = 0;
int words = 1;
int sentences = 0;

int main(void)


{
    string text = get_string("Text: ");


    for (int i = 0, n = strlen(text); i < n; i++)
    {
        if (isalpha(text[i]))
        {
            letters ++;
        }
        else  if (isspace(text[i]))
        {
            words ++;
        }
        else  if (text[i] == '.' || text[i] == '!' || text[i] == '?')
        {
            sentences ++;
        }
    }

    float L  = (float)letters  * 100 / words ;
    float S = (float) sentences   * 100 / words;
    int index = round(0.0588 * L - 0.296 * S - 15.8);

    if (index >= 1 && index <= 16)
    {
        printf("Grade %i\n", index);
    }
    else if (index < 1)

    {
        printf("Before Grade 1\n");
    }

    else  if (index > 16)
    {
        printf("Grade 16+\n");
    }



}


