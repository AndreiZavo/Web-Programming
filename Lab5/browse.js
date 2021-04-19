function jsonParse(text) {
    let json;
    try{
        json = JSON.parse(text);
    }
    catch (e){
        return false;
    }
    return json;
}

function get_news_by_category(){
    let xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            let table = document.getElementsByTagName("table")[0];
            let oldTableBody = document.getElementsByTagName("tbody")[0];
            let newTableBody = document.createElement("tbody");
            let json = jsonParse(this.responseText);
            
            for( let i = 0; i < json.length; i++){
                let one_news = json[i];
                let row = newTableBody.insertRow();
                Object.keys(one_news).forEach(function (k) {
                    let text;
                    let cell = row.insertCell();
                    text = one_news[k];
                    cell.appendChild(document.createTextNode(text));
                }); 
            }

            table.replaceChild(newTableBody, oldTableBody);
        }
    }

    xmlHttp.open('POST', 'guestPhp/getNewsByCategory.php', true);
    let category = document.getElementsByTagName('select')[0].value; 
    let json = JSON.stringify({ 'category' : category });
    xmlHttp.send(json);

}