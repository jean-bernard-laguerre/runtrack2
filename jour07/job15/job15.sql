SELECT salles.nom, etage.nom FROM salles
    JOIN etage ON id_etage = etage.id;