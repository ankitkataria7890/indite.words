var online = navigator.onLine;
         if (online == false) 
            {
                    alert("Sorry, we currently not able to access internet .");
                    location.reload(); 
            }
window.addEventListener('offline', function(event){
    alert("You are offline please turn on internet connection to run website");
});