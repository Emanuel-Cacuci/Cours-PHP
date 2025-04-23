

<h1>Typage de classe en php</h1>

<p>Objectif : bien comprendre et bien utiliser le typage dans les propriétés, les arguments, le constructeur...</p>

<p>Compatible depuis php 7.4</p>

<p>Les types autorisés : int, float, string, bool, array, object, ?type</p>

<h3>Le typage dans une classe php</h3>

<?php

class Produit{

    private int $id; // on attend un entier
    private string $nom; // on attend une chaine de caractéres
    private float $prix; // on attend un nombre à virgule
    private ?string $description = null; // accepte null peut string ou null
    private bool $disponible = true; // on attend un booléen true ou false


    public function __construct(int $id, string $nom, float $prix, ?string $description, bool $disponible){

        $this->id = $id;
        $this->nom = $nom;
        $this->prix = $prix;
        $this->description = $description;
        $this->disponible = $disponible;

}


}
?>

<p>Les types permettent de sécuriser des données</p>

<p>On exige que les données du type attendu ici dans la class Produit : int, string, float, ?string</p>

<h2>Le typage dans les méthodes</h2>

<?php

class Panier{
    private array $produits = []; // j'attend a ce que $produit soit un tableau

    public function ajouterProduit(string $a):array // on impose que le paramétre $a soit une chaine de caractéres et que la fonction retourne un tableau
    {
        $this->produits[] = $a;
        return $this->produits; // on retourne le tableau
    }
}



class Article{

    private int $id;
    private string $nom;
    private float $prix;
    private bool $disponible = true;

    public function __construct(string|int $nom, float $prix, bool $disponible){

        $this->nom = $nom;
        $this->prix = $prix;
        $this->disponible = $disponible;
    }

    public function getNom():string // on exige que la function retourne un chaine de caractére
    {
        return $this->nom;
    }
    
    public function setNom(string $nom):void // ne renvoie rien
    {
        $this->nom = $nom;
    }
    public function getPrix():void
    {
        echo $this->prix;
    }
    public function getDisponible():bool{
        return $this->disponible;
    }
}

?>

<h4>Les erreurs de typages</h4>

<p>Si on met un type incorrect, on aura une erreur, PHP declenche une fatal error </p>

<h4>Le typage strict</h4>

<p>En mettent la function declare(strict_types=1); en haut du fichier, on active le typage strict</p>

<p>Avec ce mode PHP NE CONVERTI PAS les types INT et STRING</p>


