http://sqlfiddle.com/#

CREATE TABLE Météo
    (`ville` varchar(9), `haut` int, `bas` int)
;

--LA FONCTION DELETE NE PERMET QUE DE SUPPRIMER ENTIEREMENT UNE LIGNE OU UNE
--COLONNE MAIS PAS UNE SEULE CASE D'UN TABLEAU. POUR UNE SEULE CASE, IL
--FAUT VOIR CELA AVEC UPDATE !


INSERT INTO Météo
    (`ville`, `haut`, `bas`)
VALUES
    ('Bruxelles', 27, 13),
    ('Liège', 25, 15),
    ('Namur', 26, 15),
    ('Charleroi', 25, 12),
    ('Bruges', 28, 16)
;
DELETE from Météo
WHERE ville ="Bruxelles"
;
________________________
            |     |    |    -- ET VOILÀ ! Une ligne éliminée !!!
________________________
Liège 	    | 25  |	15 |
________________________
Namur 	    | 26  |	15 |
________________________
Charleroi 	| 25  |	12 |
________________________
Bruges 	    | 28  |	16 |
________________________


--DELETE from nom_de_la_table
--WHERE nom_de_colonne OPERATEUR "valeur"
--[and|or "nom_de_colonne" OPERATEUR "valeur"];
