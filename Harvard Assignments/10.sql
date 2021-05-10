SELECT name  FROM
people JOIN directors ON people.id = directors.person_id JOIN
ratings ON people.id =ratings.movie_id
WHERE rating >= 9.00;
