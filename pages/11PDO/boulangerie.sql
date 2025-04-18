-- Création de la base

CREATE DATABASE IF NOT EXISTS boulangerie_simple;

USE boulangerie_simple;
 
-- Table des catégories (ex: Pain, Viennoiserie...)

CREATE TABLE IF NOT EXISTS categorie (

    id INT AUTO_INCREMENT PRIMARY KEY,

    nom VARCHAR(100) NOT NULL

);
 
-- Table des produits (catégorie non liée par clé étrangère, juste un champ texte)

CREATE TABLE IF NOT EXISTS produit (

    id INT AUTO_INCREMENT PRIMARY KEY,

    nom VARCHAR(100) NOT NULL,

    prix DECIMAL(5,2) NOT NULL,

    categorie VARCHAR(100) NOT NULL

);
 
-- Table des utilisateurs

CREATE TABLE IF NOT EXISTS utilisateur (

    id INT AUTO_INCREMENT PRIMARY KEY,

    nom VARCHAR(100) NOT NULL,

    prenom VARCHAR(100) NOT NULL,

    mot_de_passe VARCHAR(255) NOT NULL,

    est_admin TINYINT(1) NOT NULL DEFAULT 0

);
 
-- Données de test - catégories

INSERT INTO categorie (nom) VALUES

('Pain'),

('Viennoiserie'),

('Pâtisserie');
 
-- Données de test - produits (catégorie en texte)

INSERT INTO produit (nom, prix, categorie) VALUES

('Baguette', 1.00, 'Pain'),

('Croissant', 1.20, 'Viennoiserie'),

('Pain au chocolat', 1.30, 'Viennoiserie'),

('Éclair au chocolat', 2.50, 'Pâtisserie');
 
-- Données de test - utilisateurs

INSERT INTO utilisateur (nom, prenom, mot_de_passe, est_admin) VALUES

('Durand', 'Marie', 'azerty', 0),

('Martin', 'Paul', 'admin123', 1);

 