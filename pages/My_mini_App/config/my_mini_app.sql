
-- Table utilisateur

CREATE TABLE user(
    id INT AUTO_INCREMENT PRIMARY KEY,
    est_admin TINYINT(1) NOT NULL DEFAULT 0,
    nom VARCHAR(15) NOT NULL,
    mot_de_passe VARCHAR(80) NOT NULL,
    mail VARCHAR(254) NOT NULL
);

-- Table produits

CREATE TABLE produits(
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(15) NOT NULL,
    description_ VARCHAR(255) NOT NULL,
    categorie VARCHAR(20) NOT NULL
);

-- Ajout des produits


INSERT INTO produits(nom, description_, categorie ) VALUES
('pizza_quatre_fromage','Tres savoureux !','pizzas')


-- ('pizza_quatre_fromage', 'pizzas'),
-- ('burger_double', 'burgers'),
-- ('kebab_Maxi', 'kebabs' ),
-- ('Tres savoureux !'),
-- ('Super !'),
-- ('Gourmand !');
    

