
// COMP 348 Assignment 2 - Question 11
// Nareg Mouradian (40044254) , Aline Kurkdjian (40131528) , Christina Darstbanian (40097340)
#include "selectionsort2.h"


#include <stddef.h>


int* findmin(int* arr, int size) {
    int min = arr[0];
    int k = 0;
    for (int i = 0; i < size; i++) {
        if (arr[i] < min) {
            min = arr[i];
            k= i;
        }
    }

    return &arr[k];
}

void selectionsort(int arr[], int size, int* (*f)(int* , int)){
  // in case if the pointer is null then it will use the original function 
  if( f == NULL ){
    f = &findmin;
  }

// if not will go use the pointer function 
int temp;
for(int i=0;i<size;i++){

int   * m = f(arr+i,size-i);

int k= m - (arr+ i);

int temp = arr[i];
arr[i] = arr[i + k];
arr[i + k] = temp;

}

}
