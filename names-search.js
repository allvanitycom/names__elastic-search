document.querySelector('#elastic').oninput = function(){
    let val = this.value.trim();
    let elasticItems = document.querySelectorAll('.elastic li');
    if (val != '') {
        elasticItems.forEach(function(elem) {
            if (elem.innerText.search(val) == -1) {
                 elem.classList.add('hidden')
                 elem.innerHTML = elem.innerText;
            }
            else {
                elem.classList.remove('hidden');
                let str = elem.innerText;
                elem.innerHTML = insertMark(str, elem.innerText.search(val), val.length); 
            }
        });
    }
    else {
        elasticItems.forEach(function(elem) {
            elem.classList.remove('hidden'); 
            elem.innerHTML = elem.innerText;
        });
    }
}

function insertMark(string, pos, len) {
    return string.slice(0, pos)+'<mark>'+string.slice(pos, pos+len)+'</mark>'+string.slice(pos+len)
}
