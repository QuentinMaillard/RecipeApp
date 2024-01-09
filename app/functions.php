<?php
/**
 * 📝 On créé une fonction qui récupère toutes les données de toutes les recettes. On apprendre plus tard que dans ces cas ci il ne faut jamais récupérer toute la donnée d'un item.
 * Lit toutes les recettes du dossier spécifié et récupère leur contenu.
 * @return array Tableau de toutes les recettes.
 */
function getAllRecipes() {
    // 👩‍💻 Déclarer la variable $recipes comme un tableau vide pour stocker les données des recettes.

    // 👩‍💻 Utiliser la fonction `glob()` pour récupérer les noms de tous les fichiers JSON de recettes dans le dossier 'data/recettes/'.

    // 👩‍💻 Itérer à travers chaque fichier de recettes récupéré par `glob()`.
        // Lire le contenu du fichier JSON actuel (file_get_contents).
        // Décoder le contenu JSON en un tableau PHP (json_decode) et l'ajouter au tableau $recipes.

    // 👩‍💻 Retourner le tableau $recipes contenant toutes les recettes.
}

/**
 * 
 * Lit une recette spécifique basée sur son ID et récupère son contenu.
 * @param int $id ID de la recette à lire.
 * @return array|null Tableau contenant les détails de la recette, null si non trouvée.
 */
function getRecipe($id) {
    // 👩‍💻 Définir une variable contenant le chemin du fichier en concaténant le chemin du dossier, l'ID de la recette, et l'extension '.json'.

    // 👩‍💻 Récupérer le contenu du fichier (si le fichier spécifié existe).
        // Lire le contenu du fichier JSON actuel (file_get_contents).
        // Décoder le contenu JSON en un tableau PHP (json_decode) et le retourner.

    // 👩‍💻 Si le fichier n'existe pas, retourner null.
}
?>