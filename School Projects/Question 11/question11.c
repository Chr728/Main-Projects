
// COMP 348 Assignment 2 - Question 11
// Nareg Mouradian  , Aline Kurkdjian  , Christina Darstbanian #include <stdio.h>
#include <stdlib.h>
#include "selectionsort2.h"
#include "selectionsort2.h" // included twice



int arr[] = { -2,45,98,0,1,9 };
int main() {
	int i;
	selectionsort(arr, 6, &findmin);
	for (i = 0; i < 6; i++) printf("%d ", arr[i]);
	return 0;
}

