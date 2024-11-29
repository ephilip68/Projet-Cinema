-- a. Informations d’un film (id_film) : titre, année, durée (au format HH:MM) et réalisateur
SELECT f.titre, f.annee, round(f.duree/60, 2), p.nom
FROM film f
INNER JOIN realisateur r 
ON f.id_realisateur = r.id_realisateur
INNER JOIN personne p
ON p.id_personne = r.id_personne
WHERE f.titre = 'baby boy'


-- b. Liste des films dont la durée excède 2h15 classés par durée (du + long au + court)
SELECT *
FROM film f
WHERE duree > 135
ORDER BY duree DESC


-- c.  Liste des films d’un réalisateur (en précisant l’année de sortie) 
SELECT f.titre, f.annee
FROM film f
INNER JOIN realisateur r 
ON f.id_realisateur = r.id_realisateur
INNER JOIN personne p
ON p.id_personne = r.id_personne
WHERE p.nom = 'Gaztelu-Urrutia'


-- d. Nombre de films par genre (classés dans l’ordre décroissant)
SELECT g.nom_genre,COUNT(*) AS nombre
FROM appartenir a
INNER JOIN genre g
ON g.id_genre = a.id_genre
INNER JOIN film f 
ON f.id_film = a.id_film
GROUP BY g.nom_genre
ORDER BY nombre DESC 


-- e. Nombre de films par réalisateur (classés dans l’ordre décroissant)
SELECT p.nom, COUNT(*) AS nombre
FROM film f
INNER JOIN realisateur r 
ON f.id_realisateur = r.id_realisateur
INNER JOIN personne p
ON p.id_personne = r.id_personne
GROUP BY p.nom
ORDER BY nombre DESC 


-- f. Casting d’un film en particulier (id_film) : nom, prénom des acteurs + sexe
SELECT p.nom, p.prenom, p.sexe, f.titre
FROM film f
INNER JOIN jouer j
ON j.id_film = f.id_film
INNER JOIN acteur a
ON a.id_acteur = j.id_acteur
INNER JOIN personne p
ON p.id_personne = a.id_personne
WHERE f.titre = 'Braquage'


-- g. Films tournés par un acteur en particulier (id_acteur) avec leur rôle et l’année de sortie (du film le plus récent au plus ancien)
SELECT p.nom, r.nom_personnage, f.titre, f.annee
FROM film f
INNER JOIN jouer j
ON j.id_film = f.id_film
INNER JOIN roles r
ON r.id_role = j.id_role
INNER JOIN acteur a
ON a.id_acteur = j.id_acteur
INNER JOIN personne p
ON p.id_personne = a.id_personne
WHERE p.nom = 'Diesel'
ORDER BY f.annee DESC 


-- h. Liste des personnes qui sont à la fois acteurs et réalisateurs
SELECT p.nom, p.prenom
FROM personne p
INNER JOIN realisateur r 
ON p.id_personne = r.id_personne
INNER JOIN acteur a 
ON p.id_personne = a.id_personne


-- i. Liste des films qui ont moins de 5 ans (classés du plus récent au plus ancien)
SELECT f.titre, f.annee
FROM film f
WHERE f.annee >= (CURDATE() - INTERVAL 5 YEAR)
ORDER BY f.annee DESC 


-- j. Nombre d’hommes et de femmes parmi les acteurs
SELECT p.sexe, COUNT(*) AS nombre
FROM acteur a
INNER JOIN personne p
ON p.id_personne = a.id_personne
GROUP BY p.sexe


-- k. Liste des acteurs ayant plus de 50 ans (âge révolu et non révolu)
SELECT p.nom, p.prenom, p.dateNaissance
FROM acteur a
INNER JOIN personne p
ON p.id_personne = a.id_personne 
WHERE YEAR (CURDATE()) - YEAR (p.dateNaissance) > 50


-- l. Acteurs ayant joué dans 3 films ou plus
SELECT p.nom
FROM personne p 
INNER JOIN acteur a 
ON p.id_personne = a.id_personne
INNER JOIN jouer j 
ON j.id_acteur = a.id_acteur
GROUP BY p.nom
HAVING COUNT(j.id_acteur)>= 3