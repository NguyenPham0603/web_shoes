function show_message(id, link, txt){
    if (confirm(txt) == true) {
        return window.location = link + id;
    } 
}
function show_thanks(txt){
    return alert(txt);
}