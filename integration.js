fetch("people.json")
    .then(function (response) {
        return response.json();
    })
    .then(function (data) {
        appendData(data);
    })
    .catch(function (err) {
        console.log("error: " + err);
    });
function appendData(data) {
    var mainContainer = document.getElementById("MyData");
    for (var i = 0; i < data.length; i++) {
        var div = document.createElement("div");
        div.innerHTML = "Nom de l'organisme : " + data[i].nom;
        mainContainer.appendChild(div);
    }
}
