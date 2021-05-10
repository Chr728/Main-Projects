#include <cs50.h>
#include <stdio.h>
#include <math.h>
#include <ctype.h>
#include <string.h>
#include <stdlib.h>

int main(int argc, string argv[])
{
    if (argc != 2)
    {
        printf("Usage: ./caesar key\n");
        return 1;
    }
    long length = strlen(argv[1]);
    for (int i = 0; i < length; i = i + 1)
    {
        if (isalpha(argv[1][i]))
        {
            printf("Usage: ./caesar key\n");
            return 1;
        }
    }
    int key = atoi(argv[1]);
    //printf("Success\n");
    //printf("%d\n", key);
    string plaintext = get_string("plaintext: ");
    length = strlen(plaintext);
    char answer[256] = {0};
    for (int i = 0; i < length; i = i + 1)
    {
        if (plaintext[i] >= 'A' && plaintext[i] <= 'Z')
        {
            int delta = (plaintext[i] - 'A' + key) % 26;
            answer[i] = 'A' + delta;
        }
        else if (plaintext[i] >= 'a' && plaintext[i] <= 'z')
        {
            int delta = (plaintext[i] - 96 + key) % 26;
            answer[i] = delta + 96;
        }
        else
        {
            answer[i] =  plaintext[i];
        }
    }
    printf("ciphertext: %s\n", answer);
}





