const search = () =>{
    const searchbox = document.getElementById("data-search").value.toUpperCase();
    const storeitems=document.getElemntById("product-list")
    const product=document.querySelectorAll(".product")
    const pname=storeitems.getElementsByTagName("h2");
    for(var i=0; i<pname.lenght; i++){
        let match = product[i].getElementsByTagName('h2')[0];
        if(match){
            let textvalue=match.textContent || match.innerHTML
            if(textvalue.toUpperCase().indexOf(searchbox)>-1){
                product[i].style.display="";
            }
            else{
                product[i].style.display = "none";
            }
        }
    }
}