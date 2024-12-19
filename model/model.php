<?php
// model.php

// Liste de produits (simulée ici avec un tableau)
$products = [
    ['name' => 'Produit 1', 'price' => 100, 'description' => 'Description du produit 1'],
    ['name' => 'Produit 2', 'price' => 200, 'description' => 'Description du produit 2'],
];

// Fonction pour ajouter un produit
function addProduct($name, $price, $description) {
    global $products;
    $products[] = ['name' => $name, 'price' => $price, 'description' => $description];
}

// Fonction pour supprimer un produit
function deleteProduct($index) {
    global $products;
    if (isset($products[$index])) {
        unset($products[$index]);
        $products = array_values($products); // Réindexer l'array après suppression
    }
}

// Fonction pour obtenir la liste des produits
function getProducts() {
    global $products;
    return $products;
}
?>
