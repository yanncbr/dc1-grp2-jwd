USE dc1_grp2_jwd;

SELECT *
FROM photo, categorie
WHERE photo.categorie_id = categorie.id;

SELECT *
FROM photo
INNER JOIN categorie ON photo.categorie_id = categorie.id
LEFT JOIN photo_has_tag ON photo_has_tag.photo_id = photo.id;

-- Récupérer la liste des tags d'une photo
SELECT
	tag.id,
    tag.libelle
FROM tag
INNER JOIN photo_has_tag ON tag.id = photo_has_tag.tag_id
WHERE photo_has_tag.photo_id = 1;

-- Récupérer la liste des photos sur la page d'accueil
SELECT
	photo.id,
    photo.titre,
    photo.img,
    photo.date_creation,
    DATE_FORMAT(photo.date_creation, '%e %M %Y') AS 'date_creation_format',
    photo.nb_likes,
    categorie.libelle AS categorie
FROM photo
INNER JOIN categorie ON categorie.id = photo.categorie_id
ORDER BY photo.date_creation DESC
LIMIT 3;

SELECT
	id,
    titre,
    img,
    date_creation,
    DATE_FORMAT(date_creation, '%e %M %Y') AS 'date_creation_format',
    nb_likes,
    description
FROM photo
WHERE id = 2;