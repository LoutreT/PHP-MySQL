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


INSERT INTO `Météo` -- il ne faut pas oublier de mettre les guillemets aussi autour du nom du tableau : 'Météo' !!!
(`ville`, `haut`, `bas`)

VALUES
   ('Ixelles', 32, 11)
   ;

   --Le tableau devient ainsi :
________________________
Bruxelles 	| 27 |	13 |
________________________
Liège 	    | 25 |	15 |
________________________
Namur 	    | 26 |	15 |
________________________
Charleroi 	| 25 |	12 |
________________________
Bruges 	    | 28 |	16 |
________________________
Ixelles 	  | 32 |	11 |
________________________
