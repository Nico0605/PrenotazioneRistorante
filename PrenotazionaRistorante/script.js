// script.js
document.getElementById("prenotazioneForm").addEventListener("submit", function (event) {
    const nome = document.getElementById("nome").value;
    const data = document.getElementById("data").value;
    const ora = document.getElementById("ora").value;
    const persone = document.getElementById("persone").value;

    if (!nome || !data || !ora || !persone) {
    alert("Per favore, riempire tutti i campi.");
    event.preventDefault();
    }
});
