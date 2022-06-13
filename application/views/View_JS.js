
/* ===============Home=============*/

window.addEventListener('scroll', function(){
 const header = document.querySelector('header');
 header.classList.toggle("sticky", window.scrollY > 0);
})

/*==========Event=========*/ 
const filterContainer = document.querySelector(".gallery-filter"),
galleryitem = document.querySelectorAll(".gallery-item");

filterContainer.addEventListener('click', (event) =>{
    if(event.target.classList.contains(".filter-item")){

        filterContainer.querySelector(".active").classList.remove(".active")

        event.target.classList.add("active");
        const filterValue = event.target.getAttributee("data-filter");
        galleryitem.forEach((items) =>{
            if(item.classList.contains(filterValue)){
                item.classList.remove("hide");
                item.classList.add("show");
            }else{
                item.classList.remove("show");
                item.classList.add("hide");
            }
        })

    }
});