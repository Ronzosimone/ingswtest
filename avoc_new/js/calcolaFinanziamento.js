function datiForm(){
				// 12 mesi
				if (document.getElementById('mesi1').checked) {
					document.getElementById("datiAnticipo1").innerHTML = Number(document.getElementById("valore").innerText * 0).toFixed(2);
					document.getElementById("datiAnticipo2").innerHTML = Number(document.getElementById("valore").innerText * 0.20 * 0.10).toFixed(2);
					document.getElementById("datiAnticipo3").innerHTML = Number(document.getElementById("valore").innerText * 0.20 * 0.20).toFixed(2);
					document.getElementById("datiAnticipo4").innerHTML = Number(document.getElementById("valore").innerText * 0.20 * 0.30).toFixed(2);
				}
				// 24 mesi
				if (document.getElementById('mesi2').checked) {
					document.getElementById("datiAnticipo1").innerHTML = Number(document.getElementById("valore").innerText * 0).toFixed(2);
					document.getElementById("datiAnticipo2").innerHTML = Number(document.getElementById("valore").innerText * 0.34 * 0.10).toFixed(2);
					document.getElementById("datiAnticipo3").innerHTML = Number(document.getElementById("valore").innerText * 0.34 * 0.20).toFixed(2);
					document.getElementById("datiAnticipo4").innerHTML = Number(document.getElementById("valore").innerText * 0.34 * 0.30).toFixed(2);
				}
				// 36 mesi
				if (document.getElementById('mesi3').checked) {
					document.getElementById("datiAnticipo1").innerHTML = Number(document.getElementById("valore").innerText * 0).toFixed(2);
					document.getElementById("datiAnticipo2").innerHTML = Number(document.getElementById("valore").innerText * 0.37 * 0.10).toFixed(2);
					document.getElementById("datiAnticipo3").innerHTML = Number(document.getElementById("valore").innerText * 0.37 * 0.20).toFixed(2);
					document.getElementById("datiAnticipo4").innerHTML = Number(document.getElementById("valore").innerText * 0.37 * 0.30).toFixed(2);
				}
				// 48 mesi
				if (document.getElementById('mesi4').checked) {
					document.getElementById("datiAnticipo1").innerHTML = Number(document.getElementById("valore").innerText * 0).toFixed(2);
					document.getElementById("datiAnticipo2").innerHTML = Number(document.getElementById("valore").innerText * 0.45 * 0.10).toFixed(2);
					document.getElementById("datiAnticipo3").innerHTML = Number(document.getElementById("valore").innerText * 0.45 * 0.20).toFixed(2);
					document.getElementById("datiAnticipo4").innerHTML = Number(document.getElementById("valore").innerText * 0.45 * 0.30).toFixed(2);
				}
		}

/* alfa romeo */
var alfa = {
    ValueA: 'tonale',
    ValueB: 'giulia',
    ValueC: 'giulietta'
};

var giuliaVersioni = {
    ValueA: 'turbo 200 cv',
    ValueB: 'turbo 280 cv',
    ValueC: 'turbodiesel 190 cv',
    ValueD: 'turbodiesel 230 cv'
};

var giuliettaVersioni = {
    ValueA: 'turbo 120 cv',
    ValueB: 'turbo 120 cv sport',
    ValueC: 'JTDm 170 cv'
};

var tonaleVersioni = {
    ValueA: 'turbo 240 cv',
    ValueB: 'turbo 200 cv',
    ValueC: 'turbo 180 cv'
};


/* Fiat */
var fiat = {
    ValueA: '500',
    ValueB: 'Grande Punto',
    ValueC: 'fullback'
};

var cinqueVersioni = {
    ValueA: '1.2pop',
    ValueB: 'tt 85 cv',
    ValueC: 'EP 120 cv',
    ValueD: 'EP 100 cv'
};

var fullbackVersioni = {
    ValueA: '200 cv',
    ValueB: '220 cv',
    ValueC: '180 cv',
    ValueD: '150 cv'
};

var grandePuntoVersioni = {
    ValueA: '1.4 Starjet 16V 95',
    ValueB: '1.4 T-Jet 16V 120',
    ValueC: '1.3 Multijet 16V 75',
    ValueD: '1.3 Multijet 16V 90'
};

/* Jaguar */
var jaguar = {
    ValueA: 'F-PACE',
    ValueB: 'f-TYPE'
};

var fpaceVersioni = {
    ValueA: '163 CV RWD',
    ValueB: '180 CV RWD',
    ValueC: '180 CV AWD',
    ValueD: '300 CV AWD',
    ValueE: '550 CV AWD'
};

var ftypeVersioni = {
    ValueA: 'P300 RWD',
    ValueB: 'P450 RWD',
    ValueC: 'P450 AWD',
    ValueD: 'P575 AWD'
};

/* Renault */
var renault = {
    ValueA: 'clio',
    ValueB: 'kadjar',
    ValueC: 'alaskan'
};

var clioVersioni = {
    ValueA: 'SCe 65 cv',
    ValueB: 'TCe 100 cv',
    ValueC: 'TCe 130 cv',
    ValueD: 'st 160 cv'
};

var kadjarVersioni = {
    ValueA: 'Tce 140 cv',
    ValueB: 'Tce 160 cv',
    ValueC: 'TCe 170 cv'
};

var alaskanVersioni = {
    ValueA: 'St 160 cv',
    ValueB: 'twin turbo 190 cv',
    ValueC: 'St 210 cv',
    ValueD: 'twin turbo 210 cv'
};

function myModello() {
    var x = document.getElementById("brand").value;
    var select = document.getElementById("modello");
    document.getElementById('modello').options.length = 1;
    document.getElementById('versione').options.length = 1;
	document.getElementById("valore").innerHTML = '0.00';
	document.getElementById("myBtn").disabled = true;
    if (x == "alfa romeo") {
        for (index in alfa) {
            select.add(new Option(alfa[index], alfa[index]));
        }
    } else if (x == "fiat") {
        for (index in fiat) {
            select.add(new Option(fiat[index], fiat[index]));
        }
    } else if (x == "jaguar") {
        for (index in jaguar) {
            select.add(new Option(jaguar[index], jaguar[index]));
        }
    } else if (x == "renault"){
        for (index in renault) {
            select.add(new Option(renault[index], renault[index]));
        }
    }else{
	}
}

function myVersione() {
	document.getElementById("valore").innerHTML = '0.00';
	document.getElementById("myBtn").disabled = true;
    var x = document.getElementById("modello").value;
    var select = document.getElementById("versione");
    document.getElementById('versione').options.length = 1;
    if (x == "giulia") {
        for (index in giuliaVersioni) {
            select.add(new Option(giuliaVersioni[index], giuliaVersioni[index]));
        }
    } else if (x == "giulietta") {
        for (index in giuliettaVersioni) {
            select.add(new Option(giuliettaVersioni[index], giuliettaVersioni[index]));
        }
    } else if (x == "tonale") {
        for (index in tonaleVersioni) {
            select.add(new Option(tonaleVersioni[index], tonaleVersioni[index]));
        }
    } /* fiat */ else if (x == "500") {
        for (index in cinqueVersioni) {
            select.add(new Option(cinqueVersioni[index], cinqueVersioni[index]));
        }
    } else if (x == "Grande Punto") {
        for (index in grandePuntoVersioni) {
            select.add(new Option(grandePuntoVersioni[index], grandePuntoVersioni[index]));
        }
    } else if (x == "fullback") {
        for (index in fullbackVersioni) {
            select.add(new Option(fullbackVersioni[index], fullbackVersioni[index]));
        }
    }/* Jaguar */ else if (x == "f-TYPE") {
        for (index in ftypeVersioni) {
            select.add(new Option(ftypeVersioni[index], ftypeVersioni[index]));
        }
    } else if (x == "F-PACE") {
        for (index in fpaceVersioni) {
            select.add(new Option(fpaceVersioni[index], fpaceVersioni[index]));
        }
    }/* raenault */ else if (x == "clio") {
        for (index in clioVersioni) {
            select.add(new Option(clioVersioni[index], clioVersioni[index]));
        }
    } else if (x == "kadjar") {
        for (index in kadjarVersioni) {
            select.add(new Option(kadjarVersioni[index], kadjarVersioni[index]));
        }
    } else if (x == "alaskan"){
        for (index in alaskanVersioni) {
            select.add(new Option(alaskanVersioni[index], alaskanVersioni[index]));
        }
    }else{
	}
}

function calcola() {
                var brand = document.getElementById("brand").value;
				var modello = document.getElementById("modello").value;
				var versione = document.getElementById("versione").value;
                var url_ok = "php/calcola.php";
                $.ajax({
                    type: "POST",
                    url: url_ok,
                    data: {
                        "brand": brand,
                        "modello": modello,
						"versione": versione,
                    },
                    success: function(risposta) {
						document.getElementById("valore").innerHTML = risposta;
						document.getElementById("datiBrand").innerHTML = brand;
						document.getElementById("datiModello").innerHTML = modello;
						document.getElementById("datiVersione").innerHTML = versione;
						document.getElementById("datiPrezzo").innerHTML = risposta;
                    }

                });
				document.getElementById("myBtn").disabled = false;
            }


		function finanziamento() {
				var tipo;
				var prezzo;

				if (document.getElementById('tipo1').checked) {
					tipo = document.getElementById('tipo1').value;
				}
				if (document.getElementById('tipo2').checked) {
					tipo = document.getElementById('tipo2').value;
				}

				var mese;
				if (document.getElementById('mesi1').checked) {
					mese = document.getElementById('mesi1').value;
					prezzo  = Number(document.getElementById("valore").innerText * 0.20).toFixed(2)
				}
				if (document.getElementById('mesi2').checked) {
					mese = document.getElementById('mesi2').value;
					prezzo  = Number(document.getElementById("valore").innerText * 0.34).toFixed(2)
				}
				if (document.getElementById('mesi3').checked) {
					mese = document.getElementById('mesi3').value;
					prezzo  = Number(document.getElementById("valore").innerText * 0.37).toFixed(2)
				}
				if (document.getElementById('mesi4').checked) {
					mese = document.getElementById('mesi4').value;
					prezzo  = Number(document.getElementById("valore").innerText * 0.45).toFixed(2)
				}

				var chilometraggio;
				if (document.getElementById('km1').checked) {
					chilometraggio = document.getElementById('km1').value;
				}
				if (document.getElementById('km2').checked) {
					chilometraggio = document.getElementById('km2').value;
				}
				if (document.getElementById('km3').checked) {
					chilometraggio = document.getElementById('km3').value;
				}
				if (document.getElementById('km4').checked) {
					chilometraggio = document.getElementById('km4').value;
				}
				if (document.getElementById('km5').checked) {
					chilometraggio = document.getElementById('km5').value;
				}
				if (document.getElementById('km6').checked) {
					chilometraggio = document.getElementById('km6').value;
				}

				var anticipo;
				if (document.getElementById('anticipo1').checked) {
					anticipo = Number(document.getElementById('datiAnticipo1').innerText).toFixed(2);
				}
				if (document.getElementById('anticipo2').checked) {
					anticipo = Number(document.getElementById('datiAnticipo2').innerText).toFixed(2);
				}
				if (document.getElementById('anticipo3').checked) {
					anticipo = Number(document.getElementById('datiAnticipo3').innerText).toFixed(2);
				}
				if (document.getElementById('anticipo4').checked) {
					anticipo = Number(document.getElementById('datiAnticipo4').innerText).toFixed(2);
				}

                var brand = document.getElementById("datiBrand").innerText;
				var modello = document.getElementById("datiModello").innerText;
				var versione = document.getElementById("datiVersione").innerText;

				if(tipo && mese && chilometraggio && anticipo && brand && modello && versione && prezzo){
				window.location.href = "https://avoc.altervista.org/riepilogo.php?tipo="+tipo+"&brand="+brand+"&modello="+modello+"&versione="+versione+"&prezzo="+prezzo+"&mese="+mese+"&chilometraggio="+chilometraggio+"&anticipo="+anticipo;
				}else {
					alert("Errore dati incompleti");
				}
            }
