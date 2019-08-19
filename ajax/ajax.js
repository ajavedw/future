$('#button').click(function() {
    var name = $('#name').val();
    $.ajax({
        type: 'GET',
        url: 'page.php',
        data: 'name=' + name,
        success: function(data) {
            $('#content').html(data);
        }
    });
});

function ajaxfunction() {
    var ajaxrequest = new XMLHttpRequest;
    ajaxrequest.onreadystatechange = function() {
        if (ajaxrequest.readyState == 4) {
            if (ajaxrequest.status == 200) {
                document.getElementById('new').innerHTML = ajaxrequest.responseText;
            } else {
                alert('status is' + ajaxrequest.status);
            }
        } else {
            alert('readysate is ' + ajaxrequest.readyState);
        }
    }

    ajaxrequest.open('GET', '/phpmysql/html-welcome.html');
    ajaxrequest.send();
}
//check gutter
function randonMessages() {
    var ajaxRequest = new XMLHttpRequest;
    ajaxRequest.onreadystatechange = function() {
        if (ajaxRequest.readyState == 4) {
            var jsonObj = JSON.parse(ajaxRequest.responseText);
            var jsonObjProp = jsonObj.randomMessages;
            var jsonObjArrayIndex = Math.floor(Math.random() * jsonObjProp.length);
            //alert(jsonObjArray);
            var displayMessage = jsonObjProp[jsonObjArrayIndex];
            document.getElementById('new').innerHTML = displayMessage.message;
            document.getElementById('new').style.color = displayMessage.color;

        }
    }

    ajaxRequest.open('GET', '/phpmysql/random-welcomes.json');
    ajaxRequest.send();
}

//tets