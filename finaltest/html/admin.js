function myfunction(){
    document.getElementById("myDropdown").classList.toggle("show");
}
const bt=document.getElementById("user-pic");
const div=document.getElementById("myDropdown");
const link=document.getElementById("menu-link");

bt.addEventListener('click',function(event){
    
    div.style.display='block';
    event.stopPropagation();
})
link.addEventListener('click',function(event){
    div.style.display='none';
    event.stopPropagation();
})
addEventListener('click',function(){
    div.style.display='none';
})
div.addEventListener('click',function(event){
    event.stopPropagation();
})