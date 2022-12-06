
window.addEventListener("load", function() {
    getJsonData();
});

function loadData(data) {
    id("petName").innerText += data["name"];
    id("petOwner").innerText += data["owner"];
    id("petImage").src = "../"+data["image"];
    id("petFact").innerText += data["fact"];
}

function getJsonData() {
    let URL = "getpet.php?random";
    fetch(URL)
        .then(checkStatus)
        .then(JSON.parse)
        .then(loadData)
        .catch(console.error);
}

function checkStatus(response) {
    if (response.status >= 200 && response.status < 300 || response.status === 0) {
        return response.text();
    } else {
        return Promise.reject(new Error(response.status + ": " + response.statusText));
    }
}

function id(idName) {
    return document.getElementById(idName);
}