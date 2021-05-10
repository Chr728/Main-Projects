SELECT title  FROM
movies JOIN people ON movies.id = people.id JOIN
ratings ON  people.id =ratings.movie_id
WHERE name = "Chadwick Boseman" ;

SELECT title  FROM
movies JOIN people ON movies.id = people.id 
WHERE name = "Chadwick Boseman" ;

