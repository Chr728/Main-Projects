/*
 * COMP 348 Assignment 1 - Question 8
 * Nareg Mouradian (40044254) , Aline Kurkdjian (40131528) , Christina Darstbanian (40097340)
 */
%Base Case 1: When the list that is passed on is empty. We return an empty list.
every-other([],[]).
%Base Case 2: When the list that is passed on has only one element. We only return that same element.
every-other([OneElement],[OneElement]).
/*The Recursive Case: When the list that is passed on has more than one element. We take the Head of the list and
 * whatever is the element that is right after the head element (which is the even index that we don't care about)
 * and we separate those 2 from the Tail of the list. Then we add the Head only to the Head of a new list. Then 
 * we recursively enter the every-other procedure with the Tail of the initially passed list and the Tail of the new
 * List, until we reach our base cases.*/
every-other([H,_|T],[H|L]):- every-other(T,L).
