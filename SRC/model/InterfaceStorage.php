<?php

interface InterfaceStorage {

	/* Insère une nouvelle couleur dans la base. Renvoie l'identifiant
	 * de la nouvelle couleur. */
	public function create(Object $c);

	/* Renvoie la couleur d'identifiant $id, ou null
	 * si l'identifiant ne correspond à aucune couleur. */
	public function readId($id);

	/* Renvoie un tableau associatif id => Color
	* contenant toutes les couleurs de la base. */
	public function readAll();

	/* Renvoie un tableau associatif id => Color
	 * contenant toutes les couleurs de la base. */
	public function readAllListes();

	/* Met à jour une couleur dans la base. Renvoie
	 * true si la modification a été effectuée, false
	 * si l'identifiant ne correspond à aucune couleur. */
	public function update($id, Object $c);

	/* Supprime une couleur. Renvoie
	 * true si la suppression a été effectuée, false
	 * si l'identifiant ne correspond à aucune couleur. */
	public function delete($id);

	/* Vide la base. */
	public function deleteAll();

}

?>

    
