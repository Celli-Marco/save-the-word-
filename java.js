function translateText() {
    var inputText = document.getElementById('inputText').value;
    var xhr = new XMLHttpRequest();
    xhr.open("GET", "https://translate.googleapis.com/translate_a/single?client=gtx&sl=it&tl=en&dt=t&q=" + encodeURI(inputText), true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            var response = JSON.parse(xhr.responseText);
            var translatedText = response[0][0][0];
            document.getElementById('outputText').innerHTML = translatedText;
        }
    };
    xhr.send();
}