SELECT name FROM
people JOIN movies ON people.id = movies.id
WHERE year= 2004 order by year ASC;