#include <stdio.h>
#include <stdlib.h>
#include <math.h>
#include <ctype.h>
#include <string.h>
#include <stdlib.h>
#include <stdbool.h>

typedef unsigned char byte;

bool jpg_sign(unsigned char byte[512]);

int main(int argc, char *argv[])
{
    if (argc != 2)
    {
        printf("Usage: ./recover card.raw");
        return 1;
    }

    FILE *disc = fopen(argv[1], "r");
    if (disc == NULL)
    {
        fprintf(stderr, "does not open %s.\n", argv[1]);
        return 1;
    }

    int counter = 0;
    int k = 0;
    char jpg_name[10];

    do
    {
        byte byte[512];
        fread(byte, sizeof(char), 512, disc);
        if (jpg_sign(byte) == true)
        {
            sprintf(jpg_name, "%0003i.jpg", counter);
            counter += 1;
            printf("%i\n", counter);
            if (counter > 0)
            {
                FILE *img = fopen(jpg_name, "w");
                fwrite(byte, sizeof(char), 512,  img);
                fclose(img);
            }
        }

        if ((jpg_sign(byte) == false) && counter > 0)
        {
            FILE *img = fopen(jpg_name, "a");
            fwrite(byte, sizeof(char), 512, img);
            fclose(img);
        }
    }
    while (feof(disc) == 0);
}


bool jpg_sign(unsigned char byte[512])
{
    if (byte[0] == 0xff && byte[1] == 0xd8 && byte[2] == 0xff && (byte[3] & 0xf0) == 0xe0)
    {
        return true;
    }
    else
    {
        return false;
    }

}



