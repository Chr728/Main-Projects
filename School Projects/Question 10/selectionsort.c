// COMP 348 Assignment 2 - Question 10
// Nareg Mouradian  , Aline Kurkdjian  , Christina Darstbanian 

#include "selectionsort.h"

#include <stddef.h>
// findmin function returns a pointer 
static int* findmin(int* arr, int size) {
	int k = 0; int min = arr[0];	
	for (int i = 0; i < size; i++) {
		if (arr[i] < min) {
			min = arr[i];
			k = i;
		}
	}
	return &arr[k];
}

// sorts the array in ascending order 
void selectionsort(int arr[],int size){
int temp;
for (int i = 0; i < size; i++) {
    int* m = findmin(arr + i, size - i);
	int k = m - (arr + i);

	temp = arr[i];
	arr[i] = arr[i + k];
	arr[i + k] = temp;
	

}
}

