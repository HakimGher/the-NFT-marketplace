let i = 0;
function ShowNavbar(){
    if(i % 2 == 0){
        i+=1;
        document.getElementById("navShow").style.display = "grid";
   


    }
    else {
    i+=1;
    document.getElementById("navShow").style.display = "none";

    }
}