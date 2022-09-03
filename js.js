var wrapper = document.getElementById("wrapper");
function addItem(name, desc, link, kurse) {
    const obj = JSON.parse(kurse);
    console.log(obj);
    var krusestring;
    obj.forEach(element => {
        if (krusestring == undefined) {
            krusestring = `<span id="item-kurse">`+element+`</span>`;
        } else {
            krusestring = krusestring + `<span id="item-kurse">`+element+`</span>`;
        }
        
    });
    
    var item = `

    <div id="item-wrapper">
        <span id="item-name">`+name+`</span>
        <div id="desc-wrapper">
            <span id="item-desc">`+desc+`</span>
        </div>

        <div id="kurse-wrapper">
            `+krusestring+`
        </div>

        <span id="item-link">Link: <a href="`+link+`">Hier Klicken! (Hover für url)</a></span>
    </div>

    `;
    $('#wrapper').append(item);

};