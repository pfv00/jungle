// Modifica les dades de la taula amb els usuaris trobats al json
/*----------------------------------------------*/
function printListaZapatos(lista) {
	let content = document.querySelector('#contingut');
	content.innerHTML = ''
	for(let peli of lista){

		content.innerHTML += `
			<li class="media py-2">
				<img src="img/${shoe.img}" class="mr-3" alt="..." style="width:100px">
				<div class="media-body">
					<a href="detall-film.html"><h5 class="mt-0 mb-1">${shoe.name}</h5></a>
					<span class="badge btn-warning">Estrena</span>
					<p class="py-0 my-0">${shoe.description}</p>
					<p class="py-0 my-0">2h 8min</p>
					<p class="py-0 my-0">16</p>
				</div>
			</li>
		`
	}
}

// Obtenir les dades de les pelis
/*----------------------------------------------*/
function getShoes() {
	// Petició asíncrona
	fetch('./data/llista-films-json.php')
	.then(result => result.json())
	.then( (data) => {
		// Actualitza les dades de la llista de zapatillas
		printListaShoes(data);
	});
}

getShoes();
