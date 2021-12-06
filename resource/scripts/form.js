var form = document.forms[0];
var url = form.action;
document.addEventListener("DOMContentLoaded", function(e) {
    form.addEventListener('submit', function(e) {

        e.preventDefault();
        var formData = new FormData(this);
        var xhr = new XMLHttpRequest();
        xhr.onload = function() {
            var data = JSON.parse(xhr.responseText);
            if (xhr.status == 400) {
                alert(data['message']);
            }
            if (xhr.status == 200) {
                alert(data['message']);

            }
        }
        xhr.open('POST', url, true);
        xhr.send(formData);


    })
})