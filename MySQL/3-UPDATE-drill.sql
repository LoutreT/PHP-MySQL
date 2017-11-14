CREATE TABLE Météo
    (`ville` varchar(9), `haut` int, `bas` int)
;

INSERT INTO Météo
    (`ville`, `haut`, `bas`)
VALUES
    ('Bruxelles', 27, 13),
    ('Liège', 25, 15),
    ('Namur', 26, 15),
    ('Charleroi', 25, 12),
    ('Bruges', 28, 16)
;


UPDATE Météo
SET haut = 30
WHERE ville='Namur'
;

--Ci-dessus à mettre telle quel est, dans la colonne de gauche du siteweb suivant (sous linux): http://sqlfiddle.com/#!9/b94fb/2
--Et en même temps, mettre dans la colonne de droite  de ce siteweb, le lien suivant pour montrer le résultat dans la fenêtre du dessous :

SELECT * FROM Météo;

--La réponse de la nouvelle température à 30° sera modifiée dans la fenêtre du dessous pour 'Namur' :

________________________
Bruxelles 	| 27 |	13 |
________________________
Liège 	    | 25 |	15 |
________________________
Namur 	    | 30 |	15 |
________________________
Charleroi 	| 25 |	12 |
________________________
Bruges 	    | 28 |	16 |
________________________


--Voilà !



-- Voici La théorie :
--
-- UPDATE nom_de_la_table
-- SET nom_de_colonne = "nouvelle valeur"
-- WHERE nom_de_colonne OPERATEUR "valeur"
-- 	[and|or nom_de_colonne OPERATEUR "value"];
