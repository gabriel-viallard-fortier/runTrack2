SELECT etage.nom, salles.nom AS 'Biggest Room', MAX(capacite)
FROM salles
INNER JOIN etage ON etage.id=salles.id_etage

