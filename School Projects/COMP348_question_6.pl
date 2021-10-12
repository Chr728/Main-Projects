/*
 * COMP 348 Assignment 1 - Question 6
 * Nareg Mouradian (40044254) , Aline Kurkdjian (40131528) , Christina Darstbanian (40097340)
 */
%accept and path are taken from the notes on slide 20 of the prolog applications pdf
accept(Xs) :- start(Q), path(Q, Xs).

path(Q, [X|Xs]) :- transition(Q,X,Q1), path(Q1,Xs).

path(Q,[]) :- final(Q).

%Starting state
start(a).

%Ending states (determined by the double circles)
final(c).
final(d).
final(e).

%The transitions which show the change of state after the condition is applied
transition(a, 0 , b).
transition(a, 1 , d).
transition(b, 0 , a).
transition(b, 1 , c).
transition(c, 0 , e).
transition(c, 1 , f).
transition(d, 0 , e).
transition(d, 1 , f).
transition(e, 0 , e).
transition(e, 1 , f).
transition(f, 0 , f).
transition(f, 1 , f).

/* Question 6-2
?-accept([0])
?-accept([1])
?-accept([0,1])
?-accept([1,0])
 */

/* Question 6-3
?-accept([0])
Output: false
?-accept([1])
Output: true
?-accept([0,1])
Output: true
?-accept([1,0])
Output: true
 */
