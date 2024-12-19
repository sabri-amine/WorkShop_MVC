<?php
// controller.php

include 'model.php';  // Inclure les fonctions du modèle
include 'view.php';   // Inclure les fonctions de la vue

// Contrôler les actions
if (isset($_GET['action']) && $_GET['action'] === 'delete' && isset($_GET['index'])) {
    $index = $_GET['index'];
    deleteProduct($index);  // Supprimer un produit
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'Ajouter Produit') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    addProduct($name, $price, $description);  // Ajouter un produit
}

// Récupérer la liste des produits
$products = getProducts();

// Afficher la vue
displayProducts($products);
displayAddProductForm();
?>
