function alerteDD(){
    alert('mamasita');
}

document.getElementById("modalopen").addEventListener("click",function(){
    document.getElementById("mymodal").classList.add("open")
})
document.getElementById("closemymodal").addEventListener("click",function(){
    document.getElementById("mymodal").classList.remove("open")
})

document.querySelector("#mymodal .modalview").addEventListener('click', event => {
    event._isClickWithInModal = true;
});
document.getElementById("mymodal").addEventListener('click', event => {
    if (event._isClickWithInModal) return;
    event.currentTarget.classList.remove('open');
});