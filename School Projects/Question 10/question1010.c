// COMP 348 Assignment 2 - Question 10
// Nareg Mouradian  , Aline Kurkdjian  , Christina Darstbanian 





#include <stdio.h>
#include <stdlib.h>
#include "selectionsort.h"
#include "selectionsort.h" // included twice



int arr[] = { -2,45,5,-3,1 };
int main() {
	int i;
	selectionsort(arr, 5);
	for (i = 0; i < 5; i++) printf("%d ", arr[i]);
	return 0;
}






