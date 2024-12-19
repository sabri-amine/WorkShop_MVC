<?php
// view.php

// Affichage de la liste des produits
function displayProducts($products) {
    echo '<h2>Liste des Produits</h2>';
    echo '<table border="1">';
    echo '<tr><th>Nom</th><th>Prix</th><th>Description</th><th>Actions</th></tr>';
    foreach ($products as $index => $product) {
        echo '<tr>';
        echo '<td>' . htmlspecialchars($product['name']) . '</td>';
        echo '<td>' . htmlspecialchars($product['price']) . '€</td>';
        echo '<td>' . htmlspecialchars($product['description']) . '</td>';
        echo '<td><a href="index.php?action=delete&index=' . $index . '">Supprimer</a></td>';
        echo '</tr>';
    }
    echo '</table>';
}

// Formulaire pour ajouter un produit
function displayAddProductForm() {
    echo '<h2>Ajouter un Nouveau Produit</h2>';
    echo '<form action="index.php" method="post">
            <label for="name">Nom:</label><br>
            <input type="text" id="name" name="name" required><br><br>
            <label for="price">Prix:</label><br>
            <input type="number" id="price" name="price" required><br><br>
            <label for="description">Description:</label><br>
            <textarea id="description" name="description" required></textarea><br><br>
            <input type="submit" name="action" value="Ajouter Produit">
          </form>';
}
?>
