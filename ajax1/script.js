document.getElementById('button').addEventListener('click', loadText);

function loadText() {
    //console.log('button clicked');

    var xhr = new XMLHttpRequest();
    //console.log(xhr);
    xhr.open('GET', 'text1.txt', true);
    console.log('state:', xhr.readyState);
    xhr.onprogress = function() {
        console.log('state:', xhr.readyState);

    }

    xhr.onload = function() {
        if (this.status == 200) {
            console.log(this.responseText);
            console.log('state:', xhr.readyState);
        } else if (this.status == 404) {
            document.getElementById('text').innerHTML = 'Not Found';
        }
    }

    xhr.onerror = function() {
        console.log('state:', xhr.readyState);

    }

    xhr.send();

}