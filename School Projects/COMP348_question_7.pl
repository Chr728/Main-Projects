/*
 * COMP 348 Assignment 1 - Question 7
 * Nareg Mouradian (40044254) , Aline Kurkdjian (40131528) , Christina Darstbanian (40097340)
 */
%and with 2 inputs
and(1,1,1).
and(1,0,0).
and(0,1,0).
and(0,0,0).

%and with 3 inputs
and(0,0,0,0).
and(0,0,1,0).
and(0,1,0,0).
and(0,1,1,0).
and(1,0,0,0).
and(1,0,1,0).
and(1,1,0,0).
and(1,1,1,1).

%or with 2 inputs
or(0,0,0).
or(1,0,1).
or(0,1,1).
or(1,1,1).

%or with 3 inputs
or(0,0,0,0).
or(0,0,1,1).
or(0,1,0,1).
or(0,1,1,1).
or(1,0,0,1).
or(1,0,1,1).
or(1,1,0,1).
or(1,1,1,1).

%or with 4 inputs
or(0,0,0,0,0).
or(0,0,0,1,1).
or(0,0,1,0,1).
or(0,0,1,1,1).
or(0,1,0,0,1).
or(0,1,0,1,1).
or(0,1,1,0,1).
or(0,1,1,1,1).
or(1,0,0,0,1).
or(1,0,0,1,1).
or(1,0,1,0,1).
or(1,0,1,1,1).
or(1,1,0,0,1).
or(1,1,0,1,1).
or(1,1,1,0,1).
or(1,1,1,1,1).

%or with 5 inputs
or(1,_,_,_,_,1).
or(_,1,_,_,_,1).
or(_,_,1,_,_,1).
or(_,_,_,1,_,1).
or(_,_,_,_,1,1).
or(0,0,0,0,0,0).

%inverse procedure called not
not(0,1).
not(1,0).

%circuit procedure that prints the result of the inputs.
circuit(A,B,C,D):- not(D,ND), not(C,NC) , not(B,NB), 
    and(NB,ND,NBND) , and(B , D , BD) , and(B , ND , BND) , and(C , D , CD) , and(NC , ND , NCND),
    and(C , ND , CND) , and(B , NC , D , BNCD) , and(NB , C , NBC) , and(B , NC , BNC),
    or(A , NBND , BD , C , Res_a) , or(A , NB , CD , NCND , Res_b) , or(B , D , NCND , Res_c),
    or(A , NBND , CND , BNCD , NBC , Res_d), or(NBND , CND , Res_e) , or(A , BND , NCND , BNC , Res_f),
    or(A, CND, NBC , BNC , Res_g), write(Res_a), write(Res_b), write(Res_c) , write(Res_d), 
    write(Res_e), write(Res_f) , write(Res_g), !.

/* For b we have:
?-circuit(0,1,0,1)
Output: 1011011
*/