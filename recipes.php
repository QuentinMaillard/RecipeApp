<?php
// 👩‍💻 Incluez les fonctions et le header

// 👩‍💻 Récuperez les recettes depuis le dossier data grâce à la fonction getAllRecipes
?>

<h1>Liste des Recettes</h1>
<ul>
    <?php
        // 👩‍💻 Réalisez une boucle foreach qui parcourt le tableau recipes, obtenu en appelant la fonction `getAllRecipes`
            // Pour chaque recipe dans le tableau, affichez un élément <li> contenant un lien
                // Dans chaque <li>, le lien (<a>) doit diriger vers recette.php, en passant l'ID de la recette courante comme paramètre dans l'URL
                    // Par exemple, si l'ID de la recette est 1, le lien sera <a href="recipe.php?id=1'>
                    // Le texte du lien doit être le titre de la recette.
                    // Par exemple, si le titre de la recette est "Spaghetti Bolognaise", le lien devrait ressembler à <a href="recipe.php?id=1'>Spaghetti Bolognaise</a>.
    ?>
</ul>

<?php
// 👩‍💻 Incluez le footer
?>