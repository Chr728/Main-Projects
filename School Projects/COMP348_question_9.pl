/*
 * COMP 348 Assignment 1 - Question 9
 * Nareg Mouradian  , Aline Kurkdjian  , Christina Darstbanian 
 */
%lucasNumber procedure was created to find the Lucas number according to the specified index X.
lucasNumber(0, [2]).
lucasNumber(1,[1]).
lucasNumber(X,[Y]) :-    
	X > 1,    
	X1 is X-1,    
	X2 is X-2,   
	lucasNumber(X1, Y1),    
	lucasNumber(X2, Y2),    
	Y is Y1 + Y2.
%lucasSequenceList procedure was created to use the lucasNumber procedure and go through it and put 
%them in a list until the index specified by the input of N.
lucasSequenceList(0,[2]).
lucasSequenceList(N,List):-
   	N > 0,
    N1 is N-1,
    lucasSequenceList(N1,Temp),
    N2 is N1 + 1,
    lucasNumber(N2,Y),
    append(Temp,Y, List),
    N2 == N -> !.
