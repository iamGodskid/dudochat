 var btn = document.getElementById("btn");
        function take(){
            var uservalue = form.usertag.value;
            window.localStorage.setItem("chatuser", uservalue);
        }
function drop(){
    document.getElementById("usertag").innerHTML = window.localStorage.getItem('chatuser');
}

