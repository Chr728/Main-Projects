#include "helpers.h"
#include <cs50.h>
#include <stdio.h>
#include <math.h>
#include <ctype.h>
#include <string.h>
#include <stdlib.h>

// Convert image to grayscale
void grayscale(int height, int width, RGBTRIPLE image[height][width])
{

    for (int i = 0; i < height; i++)
    {
        for (int j = 0; j < width; j++)
        {

            int red = image[i][j].rgbtRed;
            int blue = image[i][j].rgbtBlue;
            int green = image[i][j].rgbtGreen;

            if (image[i][j].rgbtRed == image[i][j].rgbtGreen && image[i][j].rgbtRed == image[i][j].rgbtBlue)
            {
                continue ;
            }
            int average = round(((float)blue  + (float)green  + (float)red) / 3);


            image[i][j].rgbtRed = average;
            image[i][j].rgbtBlue = average;
            image[i][j].rgbtGreen = average;
        }
    }


    return;
}

// Convert image to sepia
void sepia(int height, int width, RGBTRIPLE image[height][width])
{
    for (int i = 0; i < height; i++)
    {
        for (int j = 0; j < width; j++)
        {
            float Red = .393 * image[i][j].rgbtRed + .769 *  image[i][j].rgbtGreen + .189 *  image[i][j].rgbtBlue ;
            float Green  = .349 * image[i][j].rgbtRed + .686 *  image[i][j].rgbtGreen + .168 *  image[i][j].rgbtBlue ;
            float Blue = .272 * image[i][j].rgbtRed + .534 *  image[i][j].rgbtGreen + .131 *  image[i][j].rgbtBlue ;

            int R = roundf(Red);
            int G = roundf(Green);
            int B = roundf(Blue);

            if (R > 255)
            {
                R = 255;
            }

            image[i][j].rgbtRed = R;
            if (G > 255)
            {
                G = 255;
            }
            image[i][j].rgbtGreen = G;
            if (B > 255)
            {
                B = 255;
            }
            image[i][j].rgbtBlue = B;
            }

    }
    return;
}













// Reflect image horizontally
void reflect(int height, int width, RGBTRIPLE image[height][width])
{


    for (int i = 0; i < height; i++)
    {
        int S = round((float)width / 2);
        for (int j = 0; j < S; j++)
        {



            RGBTRIPLE temp = image[i][j] ;
            image[i][j]  =  image[i][width - (1 + j)];
            image[i][width - (1 + j)] = temp ;






        }
    }

    return;
}









void blur(int height, int width, RGBTRIPLE image[height][width])

{
    RGBTRIPLE tmp[height][width];

    for (int i = 0; i < height; i++)

    {

        for (int j = 0; j < width; j++)

        {
            tmp[i][j] = image [i][j];
        }
    }



    for (int i = 0; i < height; i++)

    {

        for (int j = 0; j < width; j++)

        {

            int counter = 0;
            int A, R, G, B;
            R = 0;
            G = 0;
            B = 0;
            A = 0;
            for (int k = 0, m = i - 1; k < 3; k++, m++)
            {
                for (int s = 0, z = j - 1 ; s < 3; s++, z++)

                {

                    if (z < 0 || z >= width || m < 0 || m >= height)
                    {
                        continue;
                    }

                    else
                    {
                       R = R + tmp[m][z].rgbtRed;
                       G = G + tmp[m][z].rgbtGreen;
                       B = B + tmp[m][z].rgbtBlue;
                       A = A + 1;
                    }

               }

           }


           image[i][j].rgbtRed = round((float)R / A);
           image[i][j].rgbtGreen = round((float)G / A);
           image[i][j].rgbtBlue = round((float)B / A);

        }

   }

   return;

}