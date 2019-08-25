window.addEventListener("load", function() {

var paises = document.querySelector('[name=country]');

fetch('https://restcountries.eu/rest/v2/all')
	.then(function (response) {
		return response.json();
	})
	.then(function (config) {
		for (var pais of config) {
			paises.innerHTML += `<option value="${pais.alpha2Code}">${pais.name}</option>`;
		}
	})
	.catch(function (error) {
		console.log(error);
	});



 	var provincias = document.querySelector('[name=state]');
	var label = document.getElementById("state");

			paises.addEventListener("change", function (){

			if(paises.value == 'AR'){

				fetch('https://dev.digitalhouse.com/api/getProvincias')
				.then(function (response) {
					return response.json();
				})
				.then(function (config) {
					for (var provincia of config.data) {
						provincias.innerHTML += `<option value="${provincia.state}">${provincia.state}</option>`;
					}
				})
				.catch(function (error) {
					console.log(error);
				});
				provincias.style.display = "block";
				label.style.display = "block";
				} else {
				provincias.innerHTML = '';
				provincias.style.display = "none";
				label.style.display = "none";
			}
		});
});
