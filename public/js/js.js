// window.onload = function(){
//     sessionStorage.setItem("var","");
//     console.log(document.cookie.length)
// }

function session_id() {
    return document.cookie;
}

function leftPad(number, targetLength) {
    var output = number + '';
    while (output.length < targetLength) {
        output = '0' + output;
    }
    return output;
}


function isChiffres(str){
    return Number.isInteger(parseInt(str));
}

function resetErrorColor(id, idImage) {
    document.getElementById(id).classList.remove("invalid")
    if (document.getElementById(idImage).style.display == "block") {
        document.getElementById(idImage).style.display = "none";
    }
}

function resetErrorColorDate(id) {
    document.getElementById(id).classList.remove("invalid");
}

function resetErrorColorSelect(id) {
    document.getElementById(id).classList.remove("textColorRed");
}

function setError(id) {
    try {
        document.getElementById(id).classList.add("invalid");
        document.getElementById('error' + id).style.display = "block";
    } catch (error) {
        console.log("ERREUR - " + id + ":" + error);
    }
}


function setErrorColorSelect(id) {
    try {
        document.getElementById(id).classList.add("textColorRed");
    } catch (error) {
        console.log("ERREUR - " + id + ":" + error);
    }
}

function verifier_Numero_Telephone(num_tel) {
    if (num_tel.length > 10) {
        return false;
    }
    if(num_tel.length==0){
        return true;
    }
    const regex = new RegExp(/^(01|02|03|04|05|06|08|09)[0-9]{8}/gi);

    let match;

    match = regex.test(num_tel);
    return match;
}

function verifNombreEntier(nb) {
    if (nb.length != 7) {
        return false;
    }
    var regex = new RegExp(/^[0-9]{7}/gi);

    var match = false;

    if (regex.test(nb)) {
        match = true;
    } else {
        match = false;
    }
    return match;
}

function isInTheList(tableau, variable1) {
    for (let i = 0; i < tableau.length; i++) {
        if (tableau[i] == variable1) {
            return true;
        }
    }
    return false;
}

function enregistrer() {
    let isEveryThingCorrect = false;
    let tabErrors = [];
    let communes;
    let organismes;
    let particuliers;
    let tribunaux;
    let huissiers;
    let numsEnregistrements;
    $.ajax({
        url: 'php/getCommunes.php',
        type: 'GET',
        async: false,
        dataType: 'html',
        success: function (data) {
            communes = JSON.parse(data);
        }
    });

    $.ajax({
        url: 'php/getNomsParticuliers.php',
        type: 'GET',
        async: false,
        dataType: 'html',
        success: function (data) {
            particuliers = JSON.parse(data);
        }
    });
    $.ajax({
        url: 'php/getTribunaux.php',
        type: 'GET',
        async: false,
        dataType: 'html',
        success: function (data) {
            tribunaux = JSON.parse(data);
        }
    });
    $.ajax({
        url: 'php/getOrganismes.php',
        type: 'GET',
        async: false,
        dataType: 'html',
        success: function (data) {
            organismes = JSON.parse(data);
        }
    });
    $.ajax({
        url: 'php/getHuissiers.php',
        type: 'GET',
        async: false,
        dataType: 'html',
        success: function (data) {
            huissiers = JSON.parse(data);
        }
    });
    $.ajax({
        url: 'php/getNumsEnregistrements.php',
        type: 'GET',
        async: false,
        dataType: 'html',
        success: function (data) {
            numsEnregistrements = JSON.parse(data);
        }
    });
    //Expulsion
    var numEnregistrement = getNumEnregistrement();
    var dateEnregistrement = document.getElementById("dateEnregistrement").value;
    var anneeExpulsion = document.getElementById("anneeExpulsion").value;
    var numOrdre = document.getElementById("numOrdre").value;
    var dateRequisition = document.getElementById("dateRequisition").value;
    //console.log("Expulsion : "+numEnregistrement,dateEnregistrement,anneeExpulsion,numOrdre,dateRequisition);
    if (!verifNombreEntier(numEnregistrement)) {
        isEveryThingCorrect = true;
        document.getElementById("numEnregistrement1").classList.add("invalid");
        document.getElementById("numEnregistrement2").classList.add("invalid");
        document.getElementById('errornumEnregistrement').style.display = "block";

        tabErrors.push("Expulsion - Numéro d'enregistrement");
    } else if (isInTheList(numsEnregistrements, numEnregistrement)) {
        isEveryThingCorrect = true;
        document.getElementById("numEnregistrement1").classList.add("invalid");
        document.getElementById("numEnregistrement2").classList.add("invalid");
        document.getElementById('errornumEnregistrement').style.display = "block";

        tabErrors.push("Expulsion - Numéro déjà existant");
    }
    if (anneeExpulsion.length != 4) {
        isEveryThingCorrect = true;
        setError("anneeExpulsion");
        setError("numOrdre");
        tabErrors.push("Expulsion - Année d'expulsion");

    }
    if (dateEnregistrement == "") {
        isEveryThingCorrect = true;
        document.getElementById("dateEnregistrement").classList.add("invalid");
        tabErrors.push("Expulsion - Date d'enregistrement");

    }
    if (dateRequisition == "") {
        isEveryThingCorrect = true;
        document.getElementById("dateRequisition").classList.add("invalid");
        tabErrors.push("Expulsion - Date de la Réquisition");
    }

    //Personne expulsée 1
    var nomPersonne1 = document.getElementById("nomPersonne1").value;
    var prenomPersonne1 = document.getElementById("prenomPersonne1").value;
    var telephonePersonne1 = document.getElementById("telephonePersonne1").value;
    var genre1 = document.getElementById('selectGenre1').value;
    var nomJFPersonne1 = document.getElementById("nomJeuneFille1").value;
    var isConnu1 = document.getElementById('estConnu1').checked;
    //console.log("Personne1 : "+nomPersonne1,prenomPersonne1,tel1,genre1,nomJFPersonne1,isConnu1);
    if (!verifier_Numero_Telephone(telephonePersonne1)) {
        isEveryThingCorrect = true;
        setError("telephonePersonne1");
        tabErrors.push("Personne expulsée n°1 - Téléphone");
    }
    if (nomPersonne1 == "") {
        isEveryThingCorrect = true;
        setError("nomPersonne1");
        tabErrors.push("Personne expulsée n°1 - Prénom");

    }
    if (prenomPersonne1 == "") {
        isEveryThingCorrect = true;
        setError("prenomPersonne1");
        tabErrors.push("Personne expulsée n°1 - Prénom");
    }

    //Personne expulsée 2
    var nomPersonne2 = document.getElementById("nomPersonne2").value;
    var prenomPersonne2 = document.getElementById("prenomPersonne2").value;
    var telephonePersonne2 = document.getElementById("telephonePersonne2").value;
    var genre2 = document.getElementById('selectGenre2').value;
    var nomJFPersonne2 = document.getElementById("nomJeuneFille2").value;
    var isConnu2 = document.getElementById('estConnu2').checked;
    //console.log("Personne2 : "+nomPersonne2,prenomPersonne2,tel2,genre2,nomJFPersonne2,isConnu2);
    if (nomPersonne2 != "") {
        if (prenomPersonne2 == "") {
            isEveryThingCorrect = true;
            setError("prenomPersonne2");
            tabErrors.push("Personne expulsée n°2 - Prénom");

        }
        if (!verifier_Numero_Telephone(telephonePersonne2)) {
            isEveryThingCorrect = true;
            setError("telephonePersonne2");
            tabErrors.push("Personne expulsée n°2 - Téléphone");
        }
    }

    //Lieu d'expulsion
    var adresseExpulsion = document.getElementById("adresseExpulsion").value;
    var cpltAdresseExpulsion = document.getElementById("cpltAdresseExpulsion").value;
    var communeExpulsion = document.getElementById("communeExpulsion").value;
    //console.log("Lieu d'expulsion : "+adresseExpulsion,cpltAdresseExpulsion,communeExpulsion);
    if (adresseExpulsion == "") {
        isEveryThingCorrect = true;
        setError("adresseExpulsion");
        tabErrors.push("Lieu d'expulsion - Adresse");

    }
    if (!isInTheList(communes, communeExpulsion)) {
        isEveryThingCorrect = true;
        setError("communeExpulsion");
        tabErrors.push("Lieu d'expulsion - Commune");
    }

    //Demandeur
    var ele = document.getElementsByName("optionsRadiosOrgPart");
    var optionsRadiosOrgPart;
    for (i = 0; i < ele.length; i++) {
        if (ele[i].checked) {
            optionsRadiosOrgPart = ele[i].value;
        }
    }
    //ORGANISME
    var nomOrganisme = document.getElementById("organismeNom").value;
    var adresseOrganisme = document.getElementById("organismeAdresse").value;
    var communeOrganisme = document.getElementById("organismeCommune").value;
    //console.log("Organisme : "+nomOrganisme,adresseOrganisme,communeOrganisme);
    if (nomOrganisme != "") {
        if (!isInTheList(organismes, nomOrganisme)) {
            isEveryThingCorrect = true;
            setError("organismeNom");
            tabErrors.push("Organisme - Nom");
        }
        if (adresseOrganisme == "") {
            isEveryThingCorrect = true;
            setError("organismeAdresse");
            tabErrors.push("Organisme - Adresse");
        }
        if (communeOrganisme == "") {
            isEveryThingCorrect = true;
            setError("organismeCommune");
            tabErrors.push("Organisme - Commune");
        }
    }


    //PARTICULIER
    var nomParticulier = document.getElementById("particulierNom").value;
    var prenomParticulier = document.getElementById("particulierPrenom").value;
    var genreParticulier = document.getElementById("particulierGenre").value;
    var adresseParticulier = document.getElementById("particulierAdresse").value;
    var communeParticulier = document.getElementById("particulierCommune").value;
    //console.log("Particulier : "+nomParticulier,prenomParticulier,genreParticulier,adresseParticulier,communeParticulier);
    if (nomOrganisme == "" && nomParticulier == "") {
        if (!isInTheList(organismes, nomOrganisme)) {
            isEveryThingCorrect = true;
            setError("organismeNom");
            tabErrors.push("Organisme - Nom");
        }
        if (!isInTheList(particuliers, nomParticulier)) {
            isEveryThingCorrect = true;
            setError("particulierNom");
            tabErrors.push("Particulier - Nom");
        }
        if (adresseOrganisme == "") {
            isEveryThingCorrect = true;
            setError("organismeAdresse");
            tabErrors.push("Organisme - Adresse");
        }
        if (communeOrganisme == "") {
            isEveryThingCorrect = true;
            setError("organismeCommune");
            tabErrors.push("Organisme - Commune");
        }
        if (prenomParticulier == "") {
            isEveryThingCorrect = true;
            setError("particulierPrenom");
            tabErrors.push("Particulier - Prénom");
        }
        if (genreParticulier == "") {
            isEveryThingCorrect = true;
            setError("particulierGenre");
            tabErrors.push("Particulier - Genre");
        }
        if (adresseParticulier == "") {
            isEveryThingCorrect = true;
            setError("particulierAdresse");
            tabErrors.push("Particulier - Adresse");
        }
        if (communeParticulier == "") {
            isEveryThingCorrect = true;
            setError("particulierCommune");
            tabErrors.push("Particulier - Commune");
        }
    }
    if (nomParticulier != "") {
        if (!isInTheList(particuliers, nomParticulier)) {
            isEveryThingCorrect = true;
            setError("particulierNom");
            tabErrors.push("Particulier - Nom");
        }
        if (prenomParticulier == "") {
            isEveryThingCorrect = true;
            setError("particulierPrenom");
            tabErrors.push("Particulier - Prenom");
        }
        if (genreParticulier == "") {
            isEveryThingCorrect = true;
            setError("particulierGenre");
            tabErrors.push("Particulier - Genre");
        }
        if (adresseParticulier == "") {
            isEveryThingCorrect = true;
            setError("particulierAdresse");
            tabErrors.push("Particulier - Adresse");
        }
        if (communeParticulier == "") {
            isEveryThingCorrect = true;
            setError("particulierCommune");
            tabErrors.push("Particulier - Commune");
        }
    }

    //Tribunal
    var dateTribunal = document.getElementById("datetribunal").value;
    var tribunal = document.getElementById("tribunals").value;
    //console.log("Tribunal : "+dateTribunal,tribunal);
    if (dateTribunal == "") {
        isEveryThingCorrect = true;
        document.getElementById("datetribunal").classList.add("invalid");
        tabErrors.push("Tribunal - Date du tribunal");
    }
    if (tribunal == "") {
        isEveryThingCorrect = true;
        setError("tribunals");
        tabErrors.push("Tribunal - tribunal");
    } else if (!isInTheList(tribunaux, tribunal)) {
        isEveryThingCorrect = true;
        setError("tribunals");
        tabErrors.push("Tribunal - Tribunal");
    }

    //Huissier
    var nomHuissier = document.getElementById("nomhuissier").value;
    var titreHuissier = document.getElementById("titreHuissier").value;
    var adresseHuissier = document.getElementById("adresseHuissier").value;
    var communeHuissier = document.getElementById("communeHuissier").value;
    var codePostalHuissier = document.getElementById("codePostalHuissier").value;
    //console.log("Huissier : "+nomHuissier,titreHuissier,adresseHuissier,communeHuissier,codePostalHuissier);
    if (nomHuissier == "") {
        isEveryThingCorrect = true;
        setError("nomHuissiser");
        tabErrors.push("Huissier - Nom vide");
    } else if (!isInTheList(huissiers, nomHuissier)) {
        isEveryThingCorrect = true;
        setError("nomhuissier");
        tabErrors.push("Huissier - Inexistant");
    }
    if (titreHuissier == "") {
        isEveryThingCorrect = true;
        setError("titreHuissier");
        tabErrors.push("Huissier - Titre");
    }
    if (adresseHuissier == "") {
        isEveryThingCorrect = true;
        setError("adresseHuissier");
        tabErrors.push("Huissier - Adresse");

    }
    if (communeHuissier == "") {
        isEveryThingCorrect = true;
        setError("communeHuissier");
        tabErrors.push("Huissier - Commune");
    }
    if (codePostalHuissier == "") {
        isEveryThingCorrect = true;
        setError("codePostalHuissier");
        tabErrors.push("Huissier - Code Postal");
    }
    if (isEveryThingCorrect) {
        document.getElementById('popupError').style.display = "block";
        document.getElementById('main').style.filter = "blur(1px)";
        document.getElementById('main').style.pointerEvents = "none";
        document.getElementById("popupError").style.pointerEvents = "all";
        for (let i = 0; i < tabErrors.length; i++) {
            let b = document.getElementById('listInfoError');
            let newP = document.createElement('p');
            let error = tabErrors[i];
            newP.textContent = error;
            b.append(newP);
        }
        isEveryThingCorrect = false;
    } else {
        var data = {
            ne: numEnregistrement,
            de: dateEnregistrement,
            ae: anneeExpulsion,
            no: numOrdre,
            dr: dateRequisition,
            np1: nomPersonne1,
            tp1: telephonePersonne1,
            g1: genre1,
            njfp1: nomJFPersonne1,
            ic1: isConnu1,
            np2: nomPersonne2,
            tp2: telephonePersonne2,
            g2: genre2,
            njfp2: nomJFPersonne2,
            ic2: isConnu2,
            ade: adresseExpulsion,
            cpae: cpltAdresseExpulsion,
            ce: communeExpulsion,
            nog: nomOrganisme,
            ao: adresseOrganisme,
            co: communeOrganisme,
            np: nomParticulier,
            pp: prenomParticulier,
            gp: genreParticulier,
            ap: adresseParticulier,
            cp: communeParticulier,
            dt: dateTribunal,
            t: tribunal,
            nh: nomHuissier,
            th: titreHuissier,
            ah: adresseHuissier,
            ch: communeHuissier,
            cph: codePostalHuissier,
            pp1: prenomPersonne1,
            pp2: prenomPersonne2
        };
        $.ajax({
            url: 'php/enregistrementNouvelleExpulsion.php',
            type: 'GET',
            data: data,
            dataType: 'html',
            success: function (data) {
                if (data = "1111") {
                    document.getElementById('popupSuccess').style.display = "block";
                    document.getElementById('main').style.filter = "blur(1px)";
                    document.getElementById('main').style.pointerEvents = "none";
                    document.getElementById("popupSuccess").style.pointerEvents = "all";
                    let numEnreg = document.getElementById('infoNumEnregistrement');
                    let newP = document.createElement('p');
                    let numPart1=numEnregistrement.substring(0,2);
                    let numPart2=numEnregistrement.substring(2);
                    numEnregistrement=numPart1+"/"+numPart2;
                    let num = "Numéro d'enregistrement : " + numEnregistrement;
                    newP.textContent = num;
                    numEnreg.prepend(newP);
                    document.getElementById('inputInfoNumEnregistrement').value=numEnregistrement;

                    let numOr = document.getElementById('infoNumOrdre');
                    let newP2 = document.createElement('p');
                    let num2 = "Année/Numéro d'ordre : " + anneeExpulsion.substring(2)+"/"+numOrdre;
                    newP2.textContent = num2;
                    numOr.prepend(newP2);
                    document.getElementById('inputInfoNumOrdre').value=anneeExpulsion.substring(2)+"/"+numOrdre;

                } else {
                    document.getElementById('popupError').style.display = "block";
                    document.getElementById('main').style.filter = "blur(1px)";
                    document.getElementById('main').style.pointerEvents = "none";
                    document.getElementById("popupError").style.pointerEvents = "all";
                    let b = document.getElementById('listInfoError');
                    let newP = document.createElement('p');
                    let error = "Il y a eu des erreurs lors de l'ajout.";
                    newP.textContent = error;
                    b.append(newP);
                }
            }
        })
    }

}

function ajaxChangeListeDecision(numEnregistrement) {
    let data = {
        ne: numEnregistrement,
    };
    $.ajax({
        url: '/php/getTypeDecisionByNumEnregistrement.php',
        type: 'GET',
        data: data,
        async: true,
        dataType: 'html',
        success: function (data) {
            let decision = JSON.parse(data);
            if (decision != "") {
                let infoSelect = document.getElementById('selectTypeDecision').options;
                for (let i = 0; i < infoSelect.length; i++) {
                    if (infoSelect[i].value == decision) {
                        infoSelect[i].selected = true;
                        infoSelect[i].disabled = true;
                        infoSelect.remove(0);
                    }
                }
            } else {
                document.getElementById('defaultValueDecision').innerHTML = "Choisissez un type";
            }
        }
    });
}

function changeTabWidth(w, numEnregistrement,modif) {
    reloadCommunes();
    reloadcommissaire();
    reloadOrganismes();
    reloadParticuliers();
    reloadTribunaux();
    reloadTypesTribunaux();
    reloadHuissier();

    if(modif){
        getInfosPersonnes();
    }
    if (w == -1) {
        enregistrer();
        return;
    }
    if (w == 0) {
        var ele = document.getElementsByName("optionsRadios");
        for (i = 0; i < ele.length; i++) {
            if (ele[i].checked) {
                if (ele[i].value == "option2") {
                    document.getElementById('myTabContent').style.width = "60%";
                } else {
                    changeListe(1);
                    document.getElementById('myTabContent').style.width = "35%";
                }
                return;
            }
        }
    }
    if (w == -5) {
        document.getElementById('myTabContent').style.width = "900px";
        reloadSelectImpression();
        return;
    }
    if (w == -4) {
        document.getElementById('myTabContent').style.width = "35%";
        var data = {
            id: numEnregistrement,
        };
        $.ajax({
                url: '../../php/getIsDemenage.php',
                type: 'GET',
                data: data,
                dataType: 'html',
                success: function (data) {
                    let tab = JSON.parse(data);
                    if (tab[0] == "1") {
                        document.getElementById('optionsRadiosExec1').checked = true;
                        document.getElementById('optionsRadiosExec2').checked = false;
                    } else {
                        document.getElementById('optionsRadiosExec2').checked = true;
                        document.getElementById('optionsRadiosExec1').checked = false;
                    }
                }
            }
        )
    }


    if (w == -3) {
        var data = {
            id: numEnregistrement,
        };
        $.ajax({
                url: '../../php/getInfosDemandeurByIdDemandeur.php',
                type: 'GET',
                data: data,
                dataType: 'html',
                success: function (data) {
                    let tab = JSON.parse(data);
                    if (tab[2] == "1") {
                        document.getElementById('optionsRadiosOrgPart').checked = true;
                        document.getElementById('optionsRadiosOrgPart1').checked = false;
                        selectOrganisme(true);
                        document.getElementById('organismeNom').value = tab[3];
                        document.getElementById('organismeAdresse').value = tab[1];
                        document.getElementById('organismeCommune').value = tab[0];
                    } else {
                        document.getElementById('optionsRadiosOrgPart').checked = false;
                        document.getElementById('optionsRadiosOrgPart1').checked = true;
                        selectParticulier(true);
                        document.getElementById('particulierNom').value = tab[3];
                        document.getElementById('particulierPrenom').value = tab[4];
                        document.getElementById('particulierGenre').value = tab[5];
                        document.getElementById('particulierAdresse').value = tab[1];
                        document.getElementById('particulierCommune').value = tab[0];
                    }
                }
            }
        )
    }
    if(w==-2){
        const opt = document.getElementsByName("optionsRadios");
        for (i = 0; i < opt.length; i++) {
            if (opt[i].checked) {
                if (opt[i].value === "option2") {
                    document.getElementById('myTabContent').style.width = "60%";
                    setDeuxPersonnes();
                } else {
                    changeListe(1);
                    document.getElementById('myTabContent').style.width = "35%";
                    setUnePersonne();
                }
                return;
            }
        }
    }
    document.getElementById('myTabContent').style.width = w + "%";
}

function getInfosPersonnes() {

    let numEnregistrement = getNumEnregistrement();
    var data = {
        ne: numEnregistrement,
    };
    $.ajax({
        url: '../../php/getInfosPersonnesByNumEnregistrement.php',
        type: 'GET',
        data: data,
        async: false,
        dataType: 'html',
        success: function (data) {
            let tab = JSON.parse(data);
            if (tab.length == 14) {
                document.getElementById('optionsRadios').checked = false;
                document.getElementById('optionsRadios1').checked = true;
                document.getElementById('selectGenre1').value = tab[3];
                document.getElementById('nomPersonne1').value = tab[0];
                document.getElementById('prenomPersonne1').value = tab[1];
                document.getElementById('nomJeuneFille1').value = tab[4];
                document.getElementById('telephonePersonne1').value = tab[2];
                if (tab[5] == "0") {
                    document.getElementById('estConnu1').checked = false;
                } else {
                    document.getElementById('estConnu1').checked = true;
                }
                document.getElementById('tempIdPersonne1').value = tab[6];
                changeListe(1);

                document.getElementById('selectGenre2').value = tab[10];
                document.getElementById('nomPersonne2').value = tab[7];
                document.getElementById('prenomPersonne2').value = tab[8];
                document.getElementById('nomJeuneFille2').value = tab[11];
                document.getElementById('telephonePersonne2').value = tab[9];
                if (tab[12] == "0") {
                    document.getElementById('estConnu2').checked = false;
                } else {
                    document.getElementById('estConnu2').checked = true;
                }

                document.getElementById('tempIdPersonne2').value = tab[13];

                changeListe(2);
            } else if (tab.length == 7) {
                document.getElementsByName('optionsRadios').value = "option1";
                document.getElementById('selectGenre1').value = tab[3];
                document.getElementById('nomPersonne1').value = tab[0];
                document.getElementById('prenomPersonne1').value = tab[1];
                document.getElementById('nomJeuneFille1').value = tab[4];
                document.getElementById('telephonePersonne1').value = tab[2];
                if (tab[5] == "0") {
                    document.getElementById('estConnu1').checked = false;
                } else {
                    document.getElementById('estConnu1').checked = true;
                }
                document.getElementById('tempIdPersonne1').value = tab[6];
                document.getElementById('tempIdPersonne2').value = -1;
                changeListe(1);
            }
        }
    })
}

function setDeuxPersonnes() {
    document.getElementById('myTabContent').style.width = "60%";
    document.getElementById('dpersonne1').style.display = "block";
    document.getElementById('personne2').style.display = "block";
    //document.getElementById('telKnown2').style.display="flex";

}

function setUnePersonne(a) {
    if (!a) {
        document.getElementById('nomPersonne2').value = "";
        document.getElementById('nomJeuneFille2').value = "";
        document.getElementById('prenomPersonne2').value = "";
        document.getElementById('telephonePersonne2').value = "";
        document.getElementById('selectGenre2').selectedIndex = 0;
    }
    document.getElementById('myTabContent').style.width = "35%";
    document.getElementById('dpersonne1').style.display = "none";
    document.getElementById('personne2').style.display = "none";

    changeListe(2);
    resetChamps(false);
}

function closeFormError() {
    document.getElementById('popupError').style.display = "none";
    document.getElementById('listInfoError').innerHTML = "";
    document.getElementById('main').style.filter = "blur(0px)";
    document.getElementById('main').style.pointerEvents = "all";
    document.getElementById("popupError").style.pointerEvents = "none";
}

function openFormSuccessUpdate() {
    document.getElementById('main').style.filter = "blur(1px)";
    document.getElementById('popupSuccessUpdate').style.filter = "blur(0px)";
    document.getElementById('main').style.pointerEvents = "none";
    document.getElementById("popupSuccessUpdate").style.pointerEvents = "all";
    fadeIn(document.getElementById("popupSuccessUpdate"));
}

function openFormSuccessAddEnquete() {
    document.getElementById('main').style.filter = "blur(1px)";
    document.getElementById('popupSuccessAddEnquete').style.filter = "blur(0px)";
    document.getElementById('main').style.pointerEvents = "none";
    document.getElementById("popupSuccessAddEnquete").style.pointerEvents = "all";
    fadeIn(document.getElementById("popupSuccessAddEnquete"));
}

function closeFormSuccessAddEnquete() {
    document.getElementById("main").style.filter = "blur(0px)";
    document.getElementById('main').style.pointerEvents = "all";
    fadeOut(document.getElementById("popupSuccessAddEnquete"));
}

function closeFormSuccessUpdate() {
    document.getElementById("main").style.filter = "blur(0px)";
    document.getElementById('main').style.pointerEvents = "all";
    fadeOut(document.getElementById("popupSuccessUpdate"));
}

function openFormAddTribunal() {
    document.getElementById('main').style.filter = "blur(1px)";
    document.getElementById('popupTribunal').style.filter = "blur(0px)";
    document.getElementById('main').style.pointerEvents = "none";
    document.getElementById("popupTribunal").style.pointerEvents = "all";
    fadeIn(document.getElementById("popupTribunal"));
}

function closeFormAddTribunal() {
    document.getElementById("main").style.filter = "blur(0px)";
    document.getElementById('main').style.pointerEvents = "all";
    fadeOut(document.getElementById("popupTribunal"));
    document.getElementById('champsTribunal').style.display = "none";
    document.getElementById('nomTribunal').value = "";
    document.getElementById('villeTribunal').value = "";
    document.getElementById('typetribunal').value = "";
}

function openFormAddEnqueteur() {
    document.getElementById('main').style.filter = "blur(1px)";
    document.getElementById('popupEnqueteur').style.filter = "blur(0px)";
    document.getElementById('main').style.pointerEvents = "none";
    document.getElementById("popupEnqueteur").style.pointerEvents = "all";
    fadeIn(document.getElementById("popupEnqueteur"));
}

function closeFormAddEnqueteur() {
    document.getElementById("main").style.filter = "blur(0px)";
    document.getElementById('main').style.pointerEvents = "all";
    fadeOut(document.getElementById("popupEnqueteur"));
    document.getElementById('champsEnqueteur').style.display = "none";
    document.getElementById('nomaddenqueteur').value = "";
    document.getElementById('prenomaddenqueteur').value = "";
    document.getElementById('genreaddenqueteur').value = "";
    document.getElementById('statusaddenqueteur').value = "";
}

function openFormAddcommissaire() {
    document.getElementById('main').style.filter = "blur(1px)";
    document.getElementById('popupcommissaire').style.filter = "blur(0px)";
    document.getElementById('main').style.pointerEvents = "none";
    document.getElementById("popupcommissaire").style.pointerEvents = "all";
    fadeIn(document.getElementById("popupcommissaire"));
}

function closeFormAddcommissaire() {
    document.getElementById("main").style.filter = "blur(0px)";
    document.getElementById('main').style.pointerEvents = "all";
    fadeOut(document.getElementById("popupcommissaire"));
    document.getElementById('champscommissaire').style.display = "none";
    document.getElementById('nomaddcommissaire').value = "";
    document.getElementById('prenomaddcommissaire').value = "";
    document.getElementById('genreaddenqueteur').value = "";
}

function openFormAddCommune() {
    document.getElementById('main').style.filter = "blur(1px)";
    document.getElementById("popup").style.filter = "blur(0px)";
    document.getElementById('main').style.pointerEvents = "none";
    document.getElementById("popup").style.pointerEvents = "all";
    fadeIn(document.getElementById("popup"));
}

function closeFormAddCommune() {
    document.getElementById("main").style.filter = "blur(0px)";
    document.getElementById('main').style.pointerEvents = "all";
    fadeOut(document.getElementById("popup"));
    document.getElementById('champsCommune').style.display = "none";
    document.getElementById('nomCommune').value = "";
    document.getElementById('codepostalcommune').value = "";
}

function openFormAddHuissier() {
    document.getElementById('main').style.filter = "blur(1px)";
    document.getElementById("popupHuissier").style.filter = "blur(0px)";
    document.getElementById('main').style.pointerEvents = "none";
    document.getElementById("popupHuissier").style.pointerEvents = "all";
    fadeIn(document.getElementById("popupHuissier"));
}

function closeFormAddHuissier() {
    document.getElementById("main").style.filter = "blur(0px)";
    document.getElementById('error').style.display = "none";
    document.getElementById('champsHuissier').style.display = "none";
    document.getElementById('nomaddhuissier').value = "";
    document.getElementById('titreaddhuissier').value = "";
    document.getElementById('adresseaddhuissier').value = "";
    document.getElementById('communeaddhuissier').value = "";
    document.getElementById('main').style.pointerEvents = "all";
    fadeOut(document.getElementById("popupHuissier"));
}

function selectOrganisme(a) {
    if (!a) {
        document.getElementById('particulierNom').value = "";
        document.getElementById('particulierPrenom').value = "";
        document.getElementById('particulierGenre').value = "";
        document.getElementById('particulierAdresse').value = "";
        document.getElementById('particulierCommune').value = "";
    }
    document.getElementById('organismeForm').style.display = "block";
    document.getElementById('particulierForm').style.display = "none";
}

function selectParticulier(a) {
    if (!a) {
        document.getElementById('organismeNom').value = "";
        document.getElementById('organismeAdresse').value = "";
        document.getElementById('organismeCommune').value = "";
    }
    document.getElementById('particulierForm').style.display = "block";
    document.getElementById('organismeForm').style.display = "none";
}

function openFormAddOrganisme() {
    document.getElementById('main').style.filter = "blur(1px)";
    document.getElementById("popupOrganisme").style.filter = "blur(0px)";
    document.getElementById('main').style.pointerEvents = "none";
    document.getElementById("popupOrganisme").style.pointerEvents = "all";
    fadeIn(document.getElementById("popupOrganisme"));
}

function closeFormAddOrganisme() {
    document.getElementById("main").style.filter = "blur(0px)";
    document.getElementById('main').style.pointerEvents = "all";
    fadeOut(document.getElementById("popupOrganisme"));
    document.getElementById('champsOrganisme').style.display = "none";
    document.getElementById('errorOrganisme').style.display = "none";
    document.getElementById('nomOrganismeAdd').value = "";
    document.getElementById('adresseOrganismeAdd').value = "";
    document.getElementById('communeOrganismeAdd').value = "";
}

function openFormAddParticulier() {
    document.getElementById('main').style.filter = "blur(1px)";
    document.getElementById("popupParticulier").style.filter = "blur(0px)";
    document.getElementById('main').style.pointerEvents = "none";
    document.getElementById("popupParticulier").style.pointerEvents = "all";
    fadeIn(document.getElementById("popupParticulier"));
}

function closeFormAddParticulier() {
    document.getElementById("main").style.filter = "blur(0px)";
    document.getElementById('main').style.pointerEvents = "all";
    fadeOut(document.getElementById("popupParticulier"));
    document.getElementById('champsParticulier').style.display = "none";
    document.getElementById('nomParticulierAdd').value = "";
    document.getElementById('prenomParticulierAdd').value = "";
    document.getElementById('genreParticulierAdd').value = "";
    document.getElementById('adresseParticulierAdd').value = "";
    document.getElementById('communeParticulierAdd').value = "";
}

function fadeOut(element) {
    var op = 1;  // initial opacity
    var timer = setInterval(function () {
        if (op <= 0.1) {
            clearInterval(timer);
            element.style.display = 'none';
        }
        element.style.opacity = op;
        element.style.filter = 'alpha(opacity=' + op * 100 + ")";
        op -= op * 0.1;
    }, 5);
}

function fadeIn(element) {
    var op = 0.1;  // initial opacity


    var timer = setInterval(function () {
        if (op >= 1) {
            clearInterval(timer);
        }
        element.style.display = 'block';
        element.style.opacity = op;
        element.style.filter = 'alpha(opacity=' + op * 100 + ")";
        op += op * 0.1;
    }, 5);

}

function resetChamps(a) {
    if (!a) {
        document.getElementById("nomPersonne2").value = "";
        document.getElementById("prenomPersonne2").value = "";
        document.getElementById("nomJeuneFille2").value = "";
        document.getElementById("telephonePersonne2").value = "";
        document.getElementById("estConnu2").value = "";
        document.getElementById("tempIdPersonne2").value = "";
    }
}

function changeListe(nbListe) {

    document.getElementById("lNomPersonne".concat(nbListe)).style.display = "none";
    document.getElementById("lNomJeuneFille".concat(nbListe)).style.display = "none";
    document.getElementById("lPrenomPersonne".concat(nbListe)).style.display = "none";

    var idGenre = document.getElementById('selectGenre'.concat(nbListe)).selectedIndex;
    if (idGenre != -1) {
        var genre = document.getElementById('selectGenre'.concat(nbListe)).options[idGenre].value;
    }
    switch (genre) {
        case "Mr":
            document.getElementById("lNomPersonne".concat(nbListe)).style.display = "flex";
            document.getElementById("lPrenomPersonne".concat(nbListe)).style.display = "flex";

            break;
        case "Mme":
            document.getElementById("lNomPersonne".concat(nbListe)).style.display = "flex";
            document.getElementById("lPrenomPersonne".concat(nbListe)).style.display = "flex";
            document.getElementById("lNomJeuneFille".concat(nbListe)).style.display = "flex";
            break;
        default:
            document.getElementById("lNomPersonne".concat(nbListe)).style.display = "flex";
            document.getElementById("lPrenomPersonne".concat(nbListe)).style.display = "flex";
            break;
    }
}

function ajaxAddEnqueteur() {
    var nom = document.getElementById('nomaddenqueteur').value;
    var prenom = document.getElementById('prenomaddenqueteur').value;
    var genre = document.getElementById('genreaddenqueteur').value;
    var statut = document.getElementById('statusaddenqueteur').value;
    if (nom == "" || prenom == "" || genre == "" || statut == "") {
        document.getElementById('champsCommune').style.display = "block";
        return;
    }
    document.getElementById('champsCommune').style.display = "none";

    var data = {
        no: nom,
        pr: prenom,
        ge: genre,
        st: statut,
    };
    $.ajax({
        url: '/php/addEnqueteur.php',
        type: 'GET',
        data: data,
        dataType: 'html',
        success: function (data) {
            if (data == "1") {
                document.getElementById('nomEnqueteur').value = nom;
                document.getElementById('prenomEnqueteur').value = prenom;
                document.getElementById('genreEnqueteur').value = genre;
                document.getElementById('statusEnqueteur').value = statut;
                document.getElementById('nomaddenqueteur').value = "";
                document.getElementById('prenomaddenqueteur').value = "";
                document.getElementById('genreaddenqueteur').value = "";
                document.getElementById('statusaddenqueteur').value = "";
                closeFormAddEnqueteur();
                reloadNomsEnqueteurs();

            } else {
                console.log(data);
            }
        }
    })
}

function ajaxAddCommissaire() {
    var nom = document.getElementById('nomaddcommissaire').value;
    var prenom = document.getElementById('prenomaddcommissaire').value;
    var genre = document.getElementById('genreaddcommissaire').value;
    let grade = document.getElementById('gradeaddcommissaire').value;

    if (nom == "" || prenom == "" || genre == "") {
        document.getElementById('champscommissaire').style.display = "block";
        return;
    }
    document.getElementById('champscommissaire').style.display = "none";

    var data = {
        no: nom,
        pr: prenom,
        ge: genre,
        gc: grade,
    };
    $.ajax({
        url: '/php/addCommissaire.php',
        type: 'GET',
        data: data,
        dataType: 'html',
        success: function (data) {
            if (data == "1") {
                document.getElementById('nomcommissaire').value = nom;
                document.getElementById('prenomcommissaire').value = prenom;
                document.getElementById('genrecommissaire').value = genre;
                document.getElementById('gradecommissaire').value = grade;
                document.getElementById('nomaddcommissaire').value = "";
                document.getElementById('prenomaddcommissaire').value = "";
                document.getElementById('genreaddcommissaire').value = "";
                document.getElementById('gradeaddcommissaire').value = "";
                closeFormAddcommissaire();
                reloadcommissaire();
            } else {
                console.log(data);
            }
        }
    })
}

function ajaxAddCommune() {
    var nom = document.getElementById('nomCommune').value;
    var cp = document.getElementById('codepostalcommune').value;
    if (nom == "" || cp == "") {
        document.getElementById('champsCommune').style.display = "block";
        return;
    }else if(!isChiffres(cp)){
        document.getElementById('champsCommune').style.display = "block";
        return;
    }
    document.getElementById('champsCommune').style.display = "none";

    var data = {
        co: nom,
        cp: cp,
    };
    $.ajax({
        url: '/php/addCommune.php',
        type: 'GET',
        data: data,
        dataType: 'html',
        success: function (data) {
            if (data == "1") {
                document.getElementById('nomCommune').value = "";
                document.getElementById('codepostalcommune').value = "";
                closeFormAddCommune();
                reloadCommunes();
                document.getElementById('communeExpulsion').value = nom.concat(" - ", cp);

            } else {
                console.log(data);
            }
        }
    })
}

function ajaxAddTribunal() {
    var nom = document.getElementById('nomTribunal').value;
    var ville = document.getElementById('villeTribunal').value;
    var type = document.getElementById('typetribunal').value;
    if (nom == "" || ville == "" || type == "") {
        document.getElementById('champsTribunal').style.display = "block";
        return;
    }
    document.getElementById('champsTribunal').style.display = "none";
    var data = {
        no: nom,
        vi: ville,
        ty: type,
    };
    $.ajax({
        url: '/php/addTribunal.php',
        type: 'GET',
        data: data,
        dataType: 'html',
        success: function (data) {
            if (data == "1") {
                document.getElementById('nomTribunal').value = "";
                document.getElementById('villeTribunal').value = "";
                document.getElementById('typetribunal').value = "";
                closeFormAddTribunal();
                reloadTribunaux();
                document.getElementById('tribunals').value = ville.concat(" - ", type);

            } else {
                console.log(data);
            }
        }
    })
}


function ajaxAddHuissier() {
    var nom = document.getElementById('nomaddhuissier').value;
    var titre = document.getElementById('titreaddhuissier').value;
    var adresse = document.getElementById('adresseaddhuissier').value;
    var commune = document.getElementById('communeaddhuissier').value;
    console.log(nom,":",titre,":",adresse,":",commune)

    if (nom == "" || titre == "" || adresse == "" || commune == "") {
        document.getElementById('champsHuissier').style.display = "block";
        return;
    }
    document.getElementById('champsHuissier').style.display = "none";
    var data = {
        no: nom,
        ti: titre,
        ad: adresse,
        co: commune
    };
    $.ajax({
        url: '/php/addHuissier.php',
        type: 'GET',
        data: data,
        dataType: 'html',
        success: function (data) {
            if (data == "1") {
                document.getElementById('nomTribunal').value = "";
                document.getElementById('villeTribunal').value = "";
                document.getElementById('typetribunal').value = "";
                closeFormAddHuissier();
                document.getElementById('nomhuissier').value = nom;
                reloadHuissier();
                ajaxGetInfosHuissier();

            } else {
                document.getElementById('error').style.display = "block";
            }
        }
    })
}


function reloadTypesTribunaux() {
    let url = '/php/gettypestribunaux.php';
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'html',
        success: function (data) {
            var communes = JSON.parse(data);
            $("#typetribunal").autocomplete({
                source: communes
            });
            $("#typetribunal").autocomplete({
                autoFocus: true
            });
        }
    })
}

function reloadHuissier() {
    let url = '/php/getHuissiers.php';
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'html',
        success: function (data) {
            var communes = JSON.parse(data);
            $("#nomhuissier").autocomplete({
                source: communes
            });
            $("#nomhuissier").autocomplete({
                autoFocus: true
            });
            $("#nomhuissier").on("autocompleteselect", function (event, ui) {
                ajaxGetInfosHuissier(ui.item.value);
            });
        }
    })
}

function reloadIdTempPersonnes(numEnregistrements, moreThanOne) {
    let url = '/php/getInfosPersonnesByNumEnregistrement.php';
    var data = {
        ne: numEnregistrements,
    }
    $.ajax({
        url: url,
        data: data,
        async: false,
        type: 'GET',
        dataType: 'html',
        success: function (data) {
            var id = JSON.parse(data);
            if (moreThanOne) {
                document.getElementById('tempIdPersonne1').value = id[6];
                document.getElementById('tempIdPersonne2').value = id[13];
            } else {
                document.getElementById('tempIdPersonne1').value = id[6];
            }
        }
    })
}


function reloadcommissaire() {
    let url = '/php/getcommissaires.php';
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'html',
        success: function (data) {
            var commissaires = JSON.parse(data);
            $("#nomcommissaire").autocomplete({
                source: commissaires
            });
            $("#nomcommissaire").autocomplete({
                autoFocus: true
            });
            $("#nomcommissaire").on("autocompleteselect", function (event, ui) {
                ajaxGetInfoscommissaire(ui.item.value);
            });
        }
    })
}


function reloadCommunes(a) {

    let url = '/php/getCommunes.php';
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'html',
        headers: {
            Authorization:sessionStorage.getItem("var"),
        },
        success: function (data) {
            var communes = JSON.parse(data);
            $("#communeExpulsion").autocomplete({
                source: communes
            });
            $("#communeExpulsion").autocomplete({
                autoFocus: true
            });
            $("#communeaddhuissier").autocomplete({
                source: communes
            });
            $("#communeaddhuissier").autocomplete({
                autoFocus: true
            });
            $("#communeOrganismeAdd").autocomplete({
                source: communes
            });
            $("#communeOrganismeAdd").autocomplete({
                autoFocus: true
            });
            $("#communeParticulierAdd").autocomplete({
                source: communes
            });
            $("#communeParticulierAdd").autocomplete({
                autoFocus: true
            });
        }
    })
}

function reloadTribunaux() {
    let url = '/php/getTribunaux.php';
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'html',
        success: function (data) {
            var tribunaux = JSON.parse(data);
            $("#tribunals").autocomplete({
                source: tribunaux
            });
            $("#tribunals").autocomplete({
                autoFocus: true
            });
        }
    })
}

function reloadOrganismes() {
    let url = '/php/getOrganismes.php';
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'html',
        success: function (data) {
            var organismes = JSON.parse(data);
            $("#organismeNom").autocomplete({
                source: organismes
            });
            $("#organismeNom").autocomplete({
                autoFocus: true
            });
            $("#organismeNom").on("autocompleteselect", function (event, ui) {
                ajaxGetInfosOrganisme(ui.item.value);
            });
        }
    })
}

function openAutocompletePrenom() {
    $("#particulierPrenom").autocomplete("search", "");
}

function reloadPrenomsParticuliers(nom, a) {
    let url = '/php/getPrenomsParticuliers.php';
    var data = {
        no: nom
    };
    $.ajax({
        url: url,
        type: 'GET',
        data: data,
        dataType: 'html',
        success: function (data) {
            var prenoms = JSON.parse(data);
            if (a) {
                if (prenoms.length == 1) {
                    ajaxGetInfosParticuliers(nom, prenoms[0]);
                    document.getElementById('particulierPrenom').value = prenoms[0];
                }
            }
            $("#particulierPrenom").autocomplete({
                source: prenoms
            });
            $("#particulierPrenom").autocomplete({
                autoFocus: true
            });
            $("#particulierPrenom").autocomplete({
                minLength: 0
            });
            $("#particulierPrenom").on("autocompleteselect", function (event, ui) {
                ajaxGetInfosParticuliers(nom, ui.item.value);
            });
        }
    })
}

function changeParticulier() {
    reloadPrenomsParticuliers(document.getElementById('particulierNom').value);
}

function updateParticuliers() {
    if (document.getElementById('particulierNom').value != "") {
        document.getElementById('particulierPrenom').disabled = false;
        document.getElementById('particulierPrenom').value = "";
        document.getElementById('particulierGenre').value = "";
        document.getElementById('particulierAdresse').value = "";
        document.getElementById('particulierCommune').value = "";

    } else {
        document.getElementById('particulierPrenom').disabled = true;
    }

}


function reloadNomsEnqueteurs() {
    let url = '/php/getNomsEnqueteurs.php'
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'html',
        success: function (data) {
            var noms = JSON.parse(data);

            $("#nomEnqueteur").autocomplete({
                source: noms
            });
            $("#nomEnqueteur").autocomplete({
                autoFocus: true
            });
            $("#nomEnqueteur").on("autocompleteselect", function (event, ui) {
                ajaxGetInfosEnqueteur(ui.item.value, true);
            });
            $("#nomEnqueteur").autocomplete({
                minLength: 0
            });
        }
    })
}


function ajaxGetInfosEnqueteur(a) {
    let url = '/php/enqueteurs.php'
    if (a == undefined) {
        a = document.getElementById('nomEnqueteur').value;
    }
    var data = {
        no: a
    };
    $.ajax({
        url: url,
        type: 'GET',
        data: data,
        dataType: 'html',
        success: function (data) {
            if (data != "") {
                var tab = JSON.parse(data);
                if (tab.length != 0) {
                    document.getElementById('prenomEnqueteur').value = tab[0];
                    document.getElementById('genreEnqueteur').value = tab[1];
                    document.getElementById('statusEnqueteur').value = tab[2];
                } else {
                    document.getElementById('prenomEnqueteur').value = "";
                    document.getElementById('genreEnqueteur').value = "";
                    document.getElementById('statusEnqueteur').value = "";
                }
            }
        }
    })
}

function updatePrenom() {
    document.getElementById('particulierGenre').value = "";
    document.getElementById('particulierAdresse').value = "";
    document.getElementById('particulierCommune').value = "";
}

function reloadParticuliers() {
    let url = '/php/getNomsParticuliers.php';
    $.ajax({
        url: url,
        type: 'GET',
        dataType: 'html',
        success: function (data) {
            var noms = JSON.parse(data);

            $("#particulierNom").autocomplete({
                source: noms
            });
            $("#particulierNom").autocomplete({
                autoFocus: true
            });
            $("#particulierNom").on("autocompleteselect", function (event, ui) {
                reloadPrenomsParticuliers(ui.item.value, true);
            });

        }
    })
}

function reloadSelectDecision() {
    let infoSelect = document.getElementById('selectTypeDecision').options;
    let decisionActuelIndex = document.getElementById('selectTypeDecision').selectedIndex;
    let decisionActuel = document.getElementById('selectTypeDecision').options[decisionActuelIndex].value;
    if (infoSelect[0].innerHTML == "Choisissez un type") {
        infoSelect.remove(0);
    }
    for (let i = 0; i < infoSelect.length; i++) {
        if (infoSelect[i].value == decisionActuel) {
            infoSelect[i].disabled = true;
        } else {
            infoSelect[i].disabled = false;
        }
    }
}

function reloadSelectImpression() {
    let numEnregistrement = getNumEnregistrement();
    var data = {
        ne: numEnregistrement,
    }
    $.ajax({
        url: "/php/getNbEnquetes.php",
        type: 'GET',
        data: data,
        dataType: 'html',
        success: function (data) {
            let selectImpression = document.getElementById('selectEnqueteImpression').options;
            if (data == "[]") {
                if (!selectImpression.length > 0) {
                    let option = new Option("Aucune enquête", null);
                    selectImpression.add(option);
                    document.getElementById('selectEnqueteImpression').selectedIndex = 0;
                    document.getElementById('selectEnqueteImpression').options[0].disabled = true;
                }
            } else {
                let enquetes = JSON.parse(data);
                if (!selectImpression.length > 0) {
                    for (let i = 0; i < enquetes.length; i++) {
                        let option = new Option("Enquête n°" + (i + 1), enquetes[i]);
                        selectImpression.add(option);
                    }
                    document.getElementById('selectEnqueteImpression').selectedIndex = 0;
                    document.getElementById('selectEnqueteImpression').options[0].disabled = true;
                } else {
                    let index = document.getElementById('selectEnqueteImpression').selectedIndex;
                    for (let i = 0; i < enquetes.length; i++) {
                        document.getElementById('selectEnqueteImpression').options[i].disabled = false;
                    }
                    document.getElementById('selectEnqueteImpression').options[index].disabled = true;
                }
            }

        }
    })

}


function ajaxGetNumOrdre() {
    var a = document.getElementById('anneeExpulsion').value;
    var annee = {
        an: a,
    };
    let url = '/php/numordre.php'
    $.ajax({
        url: url,
        type: 'GET',
        data: annee,
        dataType: 'html',
        success: function (data) {
            if (data == "") {
                document.getElementById('numOrdre').value = "";
            } else {
                intdata = parseInt(data);
                document.getElementById('numOrdre').value = intdata + 1;
            }
        }
    })
}


function ajaxAddParticulier() {
    var nom = document.getElementById('nomParticulierAdd').value;
    var prenom = document.getElementById('prenomParticulierAdd').value;
    var genre = document.getElementById('genreParticulierAdd').value;
    var adresse = document.getElementById('adresseParticulierAdd').value;
    var commune = document.getElementById('communeParticulierAdd').value;

    if (nom == "" || adresse == "" || commune == "" || prenom == "" || genre == "") {
        document.getElementById('champsParticulier').style.display = "block";
        return;
    }
    document.getElementById('champsParticulier').style.display = "none";
    var data = {
        no: nom,
        ad: adresse,
        co: commune,
        pr: prenom,
        ge: genre,
    };
    $.ajax({
        url: '/php/addParticulier.php',
        type: 'GET',
        data: data,
        dataType: 'html',
        success: function (data) {
            if (data == "1") {

                document.getElementById('nomParticulierAdd').value = "";
                document.getElementById('prenomParticulierAdd').value = "";
                document.getElementById('genreParticulierAdd').value = "";
                document.getElementById('adresseParticulierAdd').value = "";
                document.getElementById('communeParticulierAdd').value = "";
                document.getElementById('particulierNom').value = nom;
                document.getElementById('particulierPrenom').value = prenom;
                closeFormAddParticulier();
                reloadParticuliers();
                ajaxGetInfosParticuliers(nom, prenom);

            } else {
                document.getElementById('errorParticulier').style.display = "block";
            }
        }
    })
}

function ajaxAddOrganisme() {
    var nom = document.getElementById('nomOrganismeAdd').value;
    var adresse = document.getElementById('adresseOrganismeAdd').value;
    var commune = document.getElementById('communeOrganismeAdd').value;

    if (nom == "" || adresse == "" || commune == "") {
        document.getElementById('champsOrganisme').style.display = "block";
        return;
    }
    document.getElementById('champsOrganisme').style.display = "none";
    var data = {
        no: nom,
        ad: adresse,
        co: commune
    };
    $.ajax({
        url: '/php/addOrganisme.php',
        type: 'GET',
        data: data,
        dataType: 'html',
        success: function (data) {
            if (data == "1") {
                document.getElementById('nomOrganismeAdd').value = "";
                document.getElementById('adresseOrganismeAdd').value = "";
                document.getElementById('communeOrganismeAdd').value = "";
                document.getElementById('organismeNom').value = nom;
                closeFormAddOrganisme();
                reloadOrganismes();
                ajaxGetInfosOrganisme();

            } else {
                document.getElementById('errorOrganisme').style.display = "block";
            }
        }
    })
}

function ajaxGetInfosParticuliers(a, b) {
    if(document.getElementById('particulierNom').value !=a){
        return;
    }
    var ab = ""
    if (a == undefined) {
        ab = document.getElementById('particulierNom').value;
        ac = document.getElementById('particulierPrenom').value;
        var data = {
            nom: ab,
            prenom: ac,
        };
    } else {
        var data = {
            nom: a,
            prenom: b,
        };
    }

    $.ajax({
        url: '/php/particuliers.php',
        type: 'GET',
        data: data,
        dataType: 'html',
        success: function (data) {
            if (data.length == 0 || data.length == 2) {
                document.getElementById('particulierGenre').value = "";
                document.getElementById('particulierAdresse').value = "";
                document.getElementById('particulierCommune').value = "";
            } else {
                var particulier = JSON.parse(data);
                document.getElementById('particulierGenre').value = particulier[0];
                document.getElementById('particulierAdresse').value = particulier[1];
                document.getElementById('particulierCommune').value = particulier[2] + " - " + particulier[3];
            }
        }
    })
}

function ajaxGetInfoscommissaire(a) {
    var ab = ""
    if (a == undefined) {
        ab = document.getElementById('organismeNom').value;
        var data = {
            nom: ab,
        };
    } else {
        var data = {
            nom: a,
        };
    }

    $.ajax({
        url: '/php/commissaires.php',
        type: 'GET',
        data: data,
        dataType: 'html',
        success: function (data) {
            if (data.length == 0 || data.length == 2) {
                document.getElementById('prenomcommissaire').value = "";
                document.getElementById('genrecommissaire').value = "";
            } else {
                var organisme = JSON.parse(data);
                document.getElementById('prenomcommissaire').value = organisme[0];
                document.getElementById('genrecommissaire').value = organisme[1];
                document.getElementById('gradecommissaire').value = organisme[2];
            }
        }
    })
}

function ajaxGetInfosOrganisme(a) {
    var ab = ""
    if (a == undefined) {
        ab = document.getElementById('organismeNom').value;
        var data = {
            nom: ab,
        };
    } else {
        var data = {
            nom: a,
        };
    }

    $.ajax({
        url: '/php/organismes.php',
        type: 'GET',
        data: data,
        dataType: 'html',
        success: function (data) {

            if (data.length == 0 || data.length == 2) {
                document.getElementById('organismeAdresse').value = "";
                document.getElementById('organismeCommune').value = "";
            } else {
                var organisme = JSON.parse(data);
                document.getElementById('organismeAdresse').value = organisme[0];
                document.getElementById('organismeCommune').value = organisme[1] + " - " + organisme[2];
            }
        }
    })
}

function ajaxGetInfosHuissier(a) {
    var ab = ""
    if (a == undefined) {
        ab = document.getElementById('nomhuissier').value;
        var data = {
            nom: ab,
        };
    } else {
        var data = {
            nom: a,
        };
    }

    $.ajax({
        url: '/php/huissiers.php',
        type: 'GET',
        data: data,
        dataType: 'html',
        success: function (data) {
            if (data.length == 0 || data.length == 2) {
                document.getElementById('titreHuissier').value = "";
                document.getElementById('adresseHuissier').value = "";
                document.getElementById('communeHuissier').value = "";
                document.getElementById('codePostalHuissier').value = "";
            } else {
                var huissier = JSON.parse(data);
                document.getElementById('titreHuissier').value = huissier[0];
                document.getElementById('adresseHuissier').value = huissier[1];
                document.getElementById('communeHuissier').value = huissier[2];
                document.getElementById('codePostalHuissier').value = huissier[3];
            }
        }
    })
}


function ajaxUpdateExpulsion() {

    let isEveryThingCorrect = false;
    let tabErrors = [];
    let numEnregistrement = getNumEnregistrement();
    let dateEnregistrement = document.getElementById('dateEnregistrement').value;
    let anneeExpulsion = document.getElementById('anneeExpulsion').value;
    let dateRequisition = document.getElementById('dateRequisition').value;
    let numOrdre = document.getElementById('numOrdre').value;
    let dateCloture = document.getElementById('dateCloture').value;
    let typeCloture = document.getElementById('typeCloture').value;


    if (dateEnregistrement == "") {
        isEveryThingCorrect = true;
        document.getElementById("dateEnregistrement").classList.add("invalid");
        tabErrors.push("Expulsion - Date d'enregistrement");
    }

    if (dateRequisition == "") {
        isEveryThingCorrect = true;
        document.getElementById("dateRequisition").classList.add("invalid");
        tabErrors.push("Expulsion - Date de requisition");
    }



    if (isEveryThingCorrect) {
        document.getElementById('popupError').style.display = "block";
        document.getElementById('main').style.filter = "blur(1px)";
        document.getElementById('main').style.pointerEvents = "none";
        document.getElementById("popupError").style.pointerEvents = "all";
        for (let i = 0; i < tabErrors.length; i++) {
            let b = document.getElementById('listInfoError');
            let newP = document.createElement('p');
            let error = tabErrors[i];
            newP.textContent = error;
            b.append(newP);
        }
    } else {
        var data = {
            ne: numEnregistrement,
            de: dateEnregistrement,
            ae: anneeExpulsion,
            dr: dateRequisition,
            no: numOrdre,
            dc: dateCloture,
            tc: typeCloture,
        };
        $.ajax({
            url: '/php/updateExpulsion.php',
            type: 'GET',
            data: data,
            dataType: 'html',
            success: function (data) {
                if (data == "1") {
                    openFormSuccessUpdate();
                }
            }
        })
    }
}

function ajaxUpdateLieu() {
    let isEveryThingCorrect = false;
    let tabErrors = [];
    let communes = "";
    $.ajax({
        url: '/php/getCommunes.php',
        type: 'GET',
        async: false,
        dataType: 'html',
        success: function (data) {
            communes = JSON.parse(data);

        }
    });

    let adresse = document.getElementById('adresseExpulsion').value;
    let cpltAdresse = document.getElementById('cpltAdresseExpulsion').value;
    let communeExpulsion = document.getElementById('communeExpulsion').value;
    let numEnregistrement = getNumEnregistrement();
    if (adresse == "") {
        isEveryThingCorrect = true;
        setError("adresseExpulsion");
        tabErrors.push("Lieu d'expulsion - Adresse");

    }
    if (cpltAdresse == "") {
        isEveryThingCorrect = true;
        setError("cpltAdresseExpulsion");
        tabErrors.push("Lieu d'expulsion - Complément d'adresse");

    }
    if (!isInTheList(communes, communeExpulsion)) {
        isEveryThingCorrect = true;
        setError("communeExpulsion");
        tabErrors.push("Lieu d'expulsion - Commune");
    }

    if (isEveryThingCorrect) {
        document.getElementById('popupError').style.display = "block";
        document.getElementById('main').style.filter = "blur(1px)";
        document.getElementById('main').style.pointerEvents = "none";
        document.getElementById("popupError").style.pointerEvents = "all";
        for (let i = 0; i < tabErrors.length; i++) {
            let b = document.getElementById('listInfoError');
            let newP = document.createElement('p');
            let error = tabErrors[i];
            newP.textContent = error;
            b.append(newP);
        }
    } else {
        var data = {
            ad: adresse,
            cplt: cpltAdresse,
            co: communeExpulsion,
            ne: numEnregistrement,
        };
        $.ajax({
            url: '/php/updateLieu.php',
            type: 'GET',
            data: data,
            dataType: 'html',
            success: function (data) {
                if (data == "1") {
                    openFormSuccessUpdate();
                }
            }
        })
    }

}


function ajaxUpdatecommissaire() {
    let isEveryThingCorrect = false;
    let tabErrors = [];

    let nom = document.getElementById('nomcommissaire').value;
    let prenom = document.getElementById('prenomcommissaire').value;
    let numEnregistrement = getNumEnregistrement();

    if (nom == "") {
        isEveryThingCorrect = true;
        setError("nomcommissaire");
        tabErrors.push("commissaire - Nom");
    }
    if (prenom == "") {
        isEveryThingCorrect = true;
        setError("prenomcommissaire");
        tabErrors.push("commissaire - Prénom");
    }
    if (isEveryThingCorrect) {
        document.getElementById('popupError').style.display = "block";
        document.getElementById('main').style.filter = "blur(1px)";
        document.getElementById('main').style.pointerEvents = "none";
        document.getElementById("popupError").style.pointerEvents = "all";
        for (let i = 0; i < tabErrors.length; i++) {
            let b = document.getElementById('listInfoError');
            let newP = document.createElement('p');
            let error = tabErrors[i];
            newP.textContent = error;
            b.append(newP);
        }
    } else {
        var data = {
            no: nom,
            pr: prenom,
            ne: numEnregistrement,
        };
        $.ajax({
            url: '/php/updateCommissaire.php',
            type: 'GET',
            data: data,
            dataType: 'html',
            success: function (data) {
                if (data == "1") {
                    openFormSuccessUpdate();
                } else {
                    console.log(data);
                }
            }
        })
    }
}


function ajaxUpdateExecution() {
    let isEveryThingCorrect = false;
    let tabErrors = [];

    let dateExecution = document.getElementById('dateExecution').value;
    let mesures = document.getElementById('mesures').value;
    let incidents = document.getElementById('incident').value;
    let numEnregistrement = getNumEnregistrement();

    let isDemenage = 0;

    if (document.getElementById("optionsRadiosExec1").checked) {
        isDemenage = 1;
    }


    var data = {
        de: dateExecution,
        me: mesures,
        in: incidents,
        id: isDemenage,
        ne: numEnregistrement,
    };
    $.ajax({
        url: '/php/updateExecution.php',
        type: 'GET',
        data: data,
        dataType: 'html',
        success: function (data) {
            if (data == "1") {
                openFormSuccessUpdate();
            } else {
                console.log(data);
            }
        }
    });
}

function ajaxUpdateTribunal() {
    let tribunaux = "";
    let isEveryThingCorrect = false;
    let tabErrors = [];

    let dateTribunal = document.getElementById('datetribunal').value;
    let tribunal = document.getElementById('tribunals').value;
    let numEnregistrement = getNumEnregistrement();

    $.ajax({
        url: '/php/getTribunaux.php',
        type: 'GET',
        async: false,
        dataType: 'html',
        success: function (data) {
            tribunaux = JSON.parse(data);
        }
    });

    if (dateTribunal == "") {
        isEveryThingCorrect = true;
        document.getElementById("datetribunal").classList.add("invalid");
        tabErrors.push("Tribunal - Date du tribunal");
    }

    if (tribunal == "") {
        isEveryThingCorrect = true;
        setError('tribunals');
        tabErrors.push("Tribunal - Tribunal vide");
    } else {
        if (!isInTheList(tribunaux, tribunal)) {
            isEveryThingCorrect = true;
            setError("communeExpulsion");
            tabErrors.push("Tribunal - Tribunal inexistant");
        }
    }

    if (isEveryThingCorrect) {
        document.getElementById('popupError').style.display = "block";
        document.getElementById('main').style.filter = "blur(1px)";
        document.getElementById('main').style.pointerEvents = "none";
        document.getElementById("popupError").style.pointerEvents = "all";
        for (let i = 0; i < tabErrors.length; i++) {
            let b = document.getElementById('listInfoError');
            let newP = document.createElement('p');
            let error = tabErrors[i];
            newP.textContent = error;
            b.append(newP);
        }
    } else {
        var data = {
            dt: dateTribunal,
            tr: tribunal,
            ne: numEnregistrement,
        };
        $.ajax({
            url: '/php/updateTribunal.php',
            type: 'GET',
            data: data,
            dataType: 'html',
            success: function (data) {

                if (data == "1") {
                    openFormSuccessUpdate();
                } else {
                    console.log(data);
                }
            }
        });
    }
}

function ajaxUpdateHuissier() {
    let huissiers = "";
    let isEveryThingCorrect = false;
    let tabErrors = [];

    let nom = document.getElementById('nomhuissier').value;
    let numEnregistrement = getNumEnregistrement();

    $.ajax({
        url: '/php/getHuissiers.php',
        type: 'GET',
        async: false,
        dataType: 'html',
        success: function (data) {
            huissiers = JSON.parse(data);
        }
    });
    if (nom == "") {
        isEveryThingCorrect = true;
        setError("nomhuissier");
        setError("titreHuissier");
        setError("adresseHuissier");
        setError("communeHuissier");
        setError("codePostalHuissier");
        tabErrors.push("Huissier - Nom vide");
    } else {
        if (!isInTheList(huissiers, nom)) {
            isEveryThingCorrect = true;
            setError("nomhuissier");
            setError("titreHuissier");
            setError("adresseHuissier");
            setError("communeHuissier");
            setError("codePostalHuissier");
            tabErrors.push("Huissier - Huissier inexistant");
        }
    }


    if (isEveryThingCorrect) {
        document.getElementById('popupError').style.display = "block";
        document.getElementById('main').style.filter = "blur(1px)";
        document.getElementById('main').style.pointerEvents = "none";
        document.getElementById("popupError").style.pointerEvents = "all";
        for (let i = 0; i < tabErrors.length; i++) {
            let b = document.getElementById('listInfoError');
            let newP = document.createElement('p');
            let error = tabErrors[i];
            newP.textContent = error;
            b.append(newP);
        }
    } else {
        var data = {
            no: nom,
            ne: numEnregistrement,
        };
        $.ajax({
            url: '/php/updateHuissier.php',
            type: 'GET',
            data: data,
            dataType: 'html',
            success: function (data) {
                if (data == "11") {
                    openFormSuccessUpdate();
                }
            }
        })
    }
}

function ajaxUpdatePersonnes() {
    let isEveryThingCorrect = false;
    let tabErrors = [];
    let data = "";

    let ele = document.getElementsByName('optionsRadios');
    var optionsRadiosPersonnes;
    for (i = 0; i < ele.length; i++) {
        if (ele[i].checked) {
            optionsRadiosPersonnes = ele[i].value;
        }
    }
    let numEnregistrement = getNumEnregistrement();
    let genre1 = document.getElementById('selectGenre1').value;
    let nom1 = document.getElementById('nomPersonne1').value;
    let prenom1 = document.getElementById('prenomPersonne1').value;
    let telephone1 = document.getElementById('telephonePersonne1').value;
    let isConnu1 = document.getElementById('estConnu1').checked;
    let genre2 = document.getElementById('selectGenre2').value;
    let nom2 = document.getElementById('nomPersonne2').value;
    let prenom2 = document.getElementById('prenomPersonne2').value;
    let telephone2 = document.getElementById('telephonePersonne2').value;
    let isConnu2 = document.getElementById('estConnu2').checked;
    let idPersonne1 = document.getElementById('tempIdPersonne1').value;
    let idPersonne2 = document.getElementById('tempIdPersonne2').value;
    let nomJF2 = document.getElementById('nomJeuneFille2').value;
    let nomJF1 = document.getElementById('nomJeuneFille1').value;


    if (nom1 == "") {
        isEveryThingCorrect = true;
        setError("nomPersonne1");
        tabErrors.push("Personne n°1 - Nom");
    }

    if (prenom1 == "") {
        isEveryThingCorrect = true;
        setError("prenomPersonne1");
        tabErrors.push("Personne n°1 - Prénom");
    }

    if (telephone1 == "") {
        isEveryThingCorrect = true;
        setError("telephonePersonne1");
        tabErrors.push("Personne n°1 - Téléphone vide");
    } else {
        if (!verifier_Numero_Telephone(telephone1)) {
            isEveryThingCorrect = true;
            setError("telephonePersonne1");
            tabErrors.push("Personne n°1 - Téléphone format");
        }
    }

    if (optionsRadiosPersonnes == "option2") {
        if (nom2 == "") {
            isEveryThingCorrect = true;
            setError("nomPersonne2");
            tabErrors.push("Personne n°2 - Nom");
        }

        if (prenom2 == "") {
            isEveryThingCorrect = true;
            setError("prenomPersonne2");
            tabErrors.push("Personne n°2 - Prénom");
        }
        if (telephone2 == "") {
            isEveryThingCorrect = true;
            setError("telephonePersonne2");
            tabErrors.push("Personne n°2 - Téléphone vide");
        } else {
            if (!verifier_Numero_Telephone(telephone2)) {
                isEveryThingCorrect = true;
                setError("telephonePersonne2");
                tabErrors.push("Personne n°2 - Téléphone format");
            }
        }
    }

    data = {
        ne: numEnregistrement,
        np1: nom1,
        pp1: prenom1,
        gp1: genre1,
        nJF1: nomJF1,
        tp1: telephone1,
        icp1: isConnu1,
        np2: nom2,
        pp2: prenom2,
        gp2: genre2,
        nJF2: nomJF2,
        tp2: telephone2,
        icp2: isConnu2,
        idp1: idPersonne1,
        idp2: idPersonne2,
    }


    if (isEveryThingCorrect) {
        document.getElementById('popupError').style.display = "block";
        document.getElementById('main').style.filter = "blur(1px)";
        document.getElementById('main').style.pointerEvents = "none";
        document.getElementById("popupError").style.pointerEvents = "all";
        for (let i = 0; i < tabErrors.length; i++) {
            let b = document.getElementById('listInfoError');
            let newP = document.createElement('p');
            let error = tabErrors[i];
            newP.textContent = error;
            b.append(newP);
        }
    } else {
        $.ajax({
            url: '/php/updatePersonne.php',
            type: 'GET',
            data: data,
            dataType: 'html',
            success: function (data) {
                if (data == "1") {
                    openFormSuccessUpdate();
                }
            }
        });
    }
}

function ajaxUpdateDecisionPrefet() {
    let decisionPrefet = "";
    let isEveryThingCorrect = false;
    let tabErrors = [];

    let dateExecution = document.getElementById('dateDecisionPrefet').value;
    let typeDecision = document.getElementById('selectTypeDecision').value;
    let numEnregistrement = getNumEnregistrement();
    let specificationDecision = document.getElementById('specificationDecision').value;
    let typeDecisionOptionSelect = document.getElementById('selectTypeDecision').selectedIndex;

    if (typeDecision == "defaultValue") {
        isEveryThingCorrect = true;
        tabErrors.push("Décision Préfet - Type de décision");
    }

    if (typeDecisionOptionSelect == 0) {
        typeDecision = document.getElementById('defaultValue').innerHTML;
    }

    if (dateExecution == "") {
        isEveryThingCorrect = true;
        document.getElementById("dateDecisionPrefet").classList.add("invalid");
        tabErrors.push("Décision Préfet - Date Décision");
    }

    if (isEveryThingCorrect) {
        document.getElementById('popupError').style.display = "block";
        document.getElementById('main').style.filter = "blur(1px)";
        document.getElementById('main').style.pointerEvents = "none";
        document.getElementById("popupError").style.pointerEvents = "all";
        for (let i = 0; i < tabErrors.length; i++) {
            let b = document.getElementById('listInfoError');
            let newP = document.createElement('p');
            let error = tabErrors[i];
            newP.textContent = error;
            b.append(newP);
        }
    } else {
        let data = {
            ne: numEnregistrement,
            dd: dateExecution,
            td: typeDecision,
            sd: specificationDecision,
        }
        $.ajax({
            url: '/php/updateDecisionPrefet.php',
            type: 'GET',
            data: data,
            dataType: 'html',
            success: function (data) {
                if (data == "1") {
                    openFormSuccessUpdate();
                }
            }
        });
    }
}


function ajaxUpdateDemandeur() {
    let demandeur = "";
    let isEveryThingCorrect = false;
    let tabErrors = [];
    let nomOrganisme = "";
    let adresseOrganisme = "";
    let communeOrganisme = "";
    let communes = [];
    let organismes = [];
    let particuliers = [];
    let isParticulier = false;
    let data;

    $.ajax({
        url: '/php/getCommunes.php',
        type: 'GET',
        async: false,
        dataType: 'html',
        success: function (data) {
            communes = JSON.parse(data);
        }
    });

    $.ajax({
        url: '/php/getOrganismes.php',
        type: 'GET',
        async: false,
        dataType: 'html',
        success: function (data) {
            organismes = JSON.parse(data);
        }
    });

    $.ajax({
        url: '/php/getNomsParticuliers.php',
        type: 'GET',
        async: false,
        dataType: 'html',
        success: function (data) {
            particuliers = JSON.parse(data);
        }
    });


    var ele = document.getElementsByName("optionsRadiosOrgPart");
    var optionsRadiosOrgPart;
    for (i = 0; i < ele.length; i++) {
        if (ele[i].checked) {
            optionsRadiosOrgPart = ele[i].value;
        }
    }
    let numEnregistrement = getNumEnregistrement();

    if (optionsRadiosOrgPart == "option1") {
        nomOrganisme = document.getElementById('organismeNom').value;
        communeOrganisme = document.getElementById('organismeCommune').value;
        adresseOrganisme = document.getElementById('organismeAdresse').value;

        if (nomOrganisme == "") {
            isEveryThingCorrect = true;
            setError("organismeNom");
            tabErrors.push("Organisme - Nom vide");
        } else {
            if (!isInTheList(organismes, nomOrganisme)) {
                isEveryThingCorrect = true;
                setError("organismeNom");
                tabErrors.push("Organisme - Inexistant");
            }
        }

        data = {
            no: nomOrganisme,
            ne: numEnregistrement,
            ao: adresseOrganisme,
            co: communeOrganisme,
            ip: isParticulier,
        }

    } else {
        isParticulier = true;
        let nomParticulier = document.getElementById('particulierNom').value;
        let prenomParticulier = document.getElementById('particulierPrenom').value;
        let genreParticulier = document.getElementById('particulierGenre').value;
        let adresseParticulier = document.getElementById('particulierAdresse').value;
        let communeParticulier = document.getElementById('particulierCommune').value;

        if (nomParticulier == "") {
            isEveryThingCorrect = true;
            setError("particulierNom");
            tabErrors.push("Particulier - Nom vide");
        }
        if (!isInTheList(particuliers, nomParticulier)) {
            isEveryThingCorrect = true;
            setError("particulierNom");
            tabErrors.push("Particulier - Inexistant");
        }

        if (prenomParticulier == "") {
            isEveryThingCorrect = true;
            setError("particulierPrenom");
            tabErrors.push("Particulier - Prénom vide");

        }

        data = {
            ip: isParticulier,
            ne: numEnregistrement,
            np: nomParticulier,
            pp: prenomParticulier,
            gp: genreParticulier,
            ap: adresseParticulier,
            cp: communeParticulier
        }
    }

    if (isEveryThingCorrect) {
        document.getElementById('popupError').style.display = "block";
        document.getElementById('main').style.filter = "blur(1px)";
        document.getElementById('main').style.pointerEvents = "none";
        document.getElementById("popupError").style.pointerEvents = "all";
        for (let i = 0; i < tabErrors.length; i++) {
            let b = document.getElementById('listInfoError');
            let newP = document.createElement('p');
            let error = tabErrors[i];
            newP.textContent = error;
            b.append(newP);
        }
    } else {
        $.ajax({
            url: '/php/updateDemandeur.php',
            type: 'GET',
            data: data,
            dataType: 'html',
            success: function (data) {
                if (data == "1") {
                    openFormSuccessUpdate();
                }
            }
        });
    }
}

function updateEnquete() {
    let enqueteurs = "";

    $.ajax({
        url: '/php/getNomsEnqueteurs.php',
        type: 'GET',
        async: false,
        dataType: 'html',
        success: function (data) {
            enqueteurs = JSON.parse(data);
        }
    });

    let isEveryThingCorrect = false;
    let tabErrors = [];

    let numEnregistrement = getNumEnregistrement();
    let dateEnquete = document.getElementById('dateEnquete').value;
    let observation = document.getElementById('observationEnquete').value;
    let nomEnqueteur = document.getElementById('nomEnqueteur').value;
    let prenomEnqueteur = document.getElementById('prenomEnqueteur').value;
    let idEnquete = document.getElementById('selectEnquetes').value;
    if (nomEnqueteur == "") {
        isEveryThingCorrect = true;
        setError('nomEnqueteur');
        setError('prenomEnqueteur');
        setError('genreEnqueteur');
        setError('statusEnqueteur');
        tabErrors.push("Enquêteur - Nom vide");
    } else {
        if ((!isInTheList(enqueteurs, nomEnqueteur))) {
            isEveryThingCorrect = true;
            setError("nomEnqueteur");
            setError('prenomEnqueteur');
            setError('genreEnqueteur');
            setError('statusEnqueteur');
            tabErrors.push("Enquêteur - Inexistant");
        }
    }

    if (dateEnquete == "") {
        isEveryThingCorrect = true;
        document.getElementById("dateEnquete").classList.add("invalid");
        tabErrors.push("Enquête - Date de l'enquête");
    }

    if (isEveryThingCorrect) {
        document.getElementById('popupError').style.display = "block";
        document.getElementById('main').style.filter = "blur(1px)";
        document.getElementById('main').style.pointerEvents = "none";
        document.getElementById("popupError").style.pointerEvents = "all";
        for (let i = 0; i < tabErrors.length; i++) {
            let b = document.getElementById('listInfoError');
            let newP = document.createElement('p');
            let error = tabErrors[i];
            newP.textContent = error;
            b.append(newP);
        }
    } else {
        let data = {
            ne: numEnregistrement,
            de: dateEnquete,
            oe: observation,
            no: nomEnqueteur,
            pr: prenomEnqueteur,
            ie: idEnquete,
        }
        $.ajax({
            url: '/php/updateEnquete.php',
            type: 'GET',
            data: data,
            dataType: 'html',
            success: function (data) {
                if (data == "1") {
                    openFormSuccessUpdate();
                }
            }
        });
    }
}

function getDataEnquete() {
    let selectedIndex = document.getElementById("selectEnquetes").selectedIndex;
    let id = document.getElementById("selectEnquetes").options[selectedIndex].value;
    let data = {
        id: id,
    }

    resetErrorColor('nomEnqueteur', 'errornomEnqueteur');
    resetErrorColor('prenomEnqueteur', 'errorprenomEnqueteur');
    resetErrorColor('genreEnqueteur', 'errorgenreEnqueteur');
    resetErrorColor('statusEnqueteur', 'errorstatusEnqueteur');
    resetErrorColorDate('dateEnquete');

    if (id == -1) {
        document.getElementById('dateEnquete').value = "";
        document.getElementById('observationEnquete').value = "";
        document.getElementById('nomEnqueteur').value = "";
        document.getElementById('prenomEnqueteur').value = "";
        document.getElementById('genreEnqueteur').value = "";
        document.getElementById('statusEnqueteur').value = "";

        document.getElementById('buttonEnquete').classList.remove('btn-warning');
        document.getElementById('buttonEnquete').classList.add('btn-success');
        document.getElementById('buttonEnquete').innerHTML = "Ajouter";
        document.getElementById('buttonEnquete').value = "ajouter";
        document.getElementById('buttonEnquete').setAttribute('onClick', "addEnquete()");

        let infoSelect = document.getElementById('selectEnquetes').options;
        let indexActuel = document.getElementById('selectEnquetes').selectedIndex;
        for (let i = 0; i < infoSelect.length; i++) {
            if (infoSelect[i].index == indexActuel) {
                infoSelect[i].disabled = true;
            } else {
                infoSelect[i].disabled = false;
            }
        }
        return;
    }

    $.ajax({
        url: '/php/getDataEnqueteById.php',
        type: 'GET',
        data: data,
        dataType: 'html',
        success: function (data) {
            if (data == "") {
                return;
            }
            tab = JSON.parse(data);

            document.getElementById('dateEnquete').value = tab[4];
            document.getElementById('observationEnquete').value = tab[5];
            document.getElementById('nomEnqueteur').value = tab[0];
            document.getElementById('prenomEnqueteur').value = tab[1];
            document.getElementById('genreEnqueteur').value = tab[2];
            document.getElementById('statusEnqueteur').value = tab[3];

            document.getElementById('buttonEnquete').classList.remove('btn-success');
            document.getElementById('buttonEnquete').classList.add('btn-warning');
            document.getElementById('buttonEnquete').innerHTML = "Enregistrer";
            document.getElementById('buttonEnquete').value = "enregistrer";
            document.getElementById('buttonEnquete').setAttribute('onClick', "updateEnquete()");

            let infoSelect = document.getElementById('selectEnquetes').options;
            let indexActuel = document.getElementById('selectEnquetes').selectedIndex;
            for (let i = 0; i < infoSelect.length; i++) {
                if (infoSelect[i].index == indexActuel) {
                    infoSelect[i].disabled = true;
                } else {
                    infoSelect[i].disabled = false;
                }
            }
        }
    });
}

function addEnquete() {
    let enquete = "";
    let isEveryThingCorrect = false;
    let tabErrors = [];

    let numEnregistrement = getNumEnregistrement();
    let nomEnqueteur = document.getElementById('nomEnqueteur').value;
    let prenomEnqueteur = document.getElementById('prenomEnqueteur').value;
    let dateEnquete = document.getElementById('dateEnquete').value;
    let observation = document.getElementById('observationEnquete').value;

    if (dateEnquete == "") {
        isEveryThingCorrect = true;
        document.getElementById("dateEnquete").classList.add("invalid");
        tabErrors.push("Enquête - Date de l'enquête");
    }
    if (nomEnqueteur == "") {
        isEveryThingCorrect = true;
        setError('nomEnqueteur');
        setError('prenomEnqueteur');
        setError('genreEnqueteur');
        setError('statusEnqueteur');
        tabErrors.push("Enquête - Nom de l'enquêteur");
    }

    if (isEveryThingCorrect) {
        document.getElementById('popupError').style.display = "block";
        document.getElementById('main').style.filter = "blur(1px)";
        document.getElementById('main').style.pointerEvents = "none";
        document.getElementById("popupError").style.pointerEvents = "all";
        for (let i = 0; i < tabErrors.length; i++) {
            let b = document.getElementById('listInfoError');
            let newP = document.createElement('p');
            let error = tabErrors[i];
            newP.textContent = error;
            b.append(newP);
        }
    } else {
        let data = {
            ne: numEnregistrement,
            noe: nomEnqueteur,
            pe: prenomEnqueteur,
            de: dateEnquete,
            oe: observation,
        }
        $.ajax({
            url: '/php/addEnquete.php',
            type: 'GET',
            data: data,
            async: false,
            dataType: 'html',
            success: function (data) {
                var infos = JSON.parse(data);
                if (data != "-1") {
                    let option = new Option("Enquete n°" + infos[0], infos[1])
                    let select = document.getElementById('selectEnquetes').options;
                    select.add(option);
                    document.getElementById('selectEnquetes').selectedIndex = infos[0];
                    getDataEnquete();
                    openFormSuccessAddEnquete();
                }
            }
        });
    }
}

function downloadEntete() {
    let numEnregistrement = getNumEnregistrement();
    window.location.href = "/php/downloadEntete.php?ne=" + numEnregistrement;
}

function downloadEnquete() {
    let numEnregistrement = getNumEnregistrement();
    let idEnquete = document.getElementById('selectEnqueteImpression').options[document.getElementById('selectEnqueteImpression').selectedIndex].value;
    let personne = document.getElementById('tempIdPersonne1').value;
    let personne2="";
    if(personne2 != "-1"){
        personne2 = document.getElementById('tempIdPersonne2').value;
    }
    window.open("/php/downloadEnquete.php?ne=" + numEnregistrement + "&id=" + idEnquete + "&personne=" + personne + "&personne2=" + personne2);
}

function downloadPVNotification(){
    let numEnregistrement = getNumEnregistrement();
    let personne = document.getElementById('tempIdPersonne1').value;
    let personne2="";
        if(personne2 != "-1"){
        personne2 = document.getElementById('tempIdPersonne2').value;
    }
    window.location.href = "/php/downloadPVNotification.php?ne=" + numEnregistrement + "&personne=" + personne+ "&personne2=" + personne2;
}

function downloadCompteRendu(){
    let numEnregistrement = getNumEnregistrement();
    let personne = document.getElementById('tempIdPersonne1').value;
    let personne2="";
    if(personne2 != "-1"){
        personne2 = document.getElementById('tempIdPersonne2').value;
    }
    window.open("/php/downloadCompteRendu.php?ne=" + numEnregistrement + "&personne=" + personne+ "&personne2=" + personne2);
}

function downloadConvocation(){
    let numEnregistrement = getNumEnregistrement();
    let personne = document.getElementById('tempIdPersonne1').value;
    let personne2="";
    if(personne2 != "-1"){
        personne2 = document.getElementById('tempIdPersonne2').value;
    }
    window.location.href = "/php/downloadConvocation.php?ne=" + numEnregistrement + "&personne=" + personne+ "&personne2=" + personne2;
}

function getNumEnregistrement(){
    let input1 = document.getElementById("numEnregistrement1");
    let input2 = document.getElementById('numEnregistrement2');

    return input1.value+input2.value;
}

function autoTab(){
    let input1 = document.getElementById("numEnregistrement1");
    let input2 = document.getElementById('numEnregistrement2');
    if(input1.value.length>=2){

        input2.focus();
    }
}
let isCopying = "";

function copyToClipBoard(id, element){
    let text = document.getElementById(id);
    navigator.clipboard.writeText(text.value);
    element = document.getElementById(element);
    if(isCopying=="" || isCopying!=element){
        isCopying=element;

        let op=0.1;
        var timer = setInterval(function () {
            if (op >= 1) {
                clearInterval(timer);
            }
            element.style.display = 'block';
            element.style.opacity = op;
            element.style.filter = 'alpha(opacity=' + op * 100 + ")";
            op += op * 0.1;
        }, 10);
        window.setTimeout(function (){
            op=1;
            var timer2 = setInterval(function () {
                if (op <= 0.1) {
                    clearInterval(timer2);
                    element.style.display = 'none';
                    isCopying=false;
                }

                element.style.opacity = op;
                element.style.filter = 'alpha(opacity=' + op * 100 + ")";
                op -= op * 0.1;
            }, 15);
        },1000);
    }
}