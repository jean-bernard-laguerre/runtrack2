SELECT etage.nom, salles.nom as "Biggest Room", salles.capacite FROM salles
    JOIN etage ON id_etage = etage.id
    WHERE salles.capacite IN( 
SELECT MAX(capacite) FROM salles);