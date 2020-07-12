let home = document.getElementById("home");
let blog = document.getElementById("blog");
let email = document.getElementById("email");
let url = String(window.location.href);

//animacion menu
if (url.includes("mail.html") == true){
	email.classList.add("sub");
	home.classList.remove("sub");
}
else {
blog.addEventListener("click",function(){
    blog.classList.add("sub");
    home.classList.remove("sub");
    email.classList.remove("sub");

});
email.addEventListener("click",function(){
    email.classList.add("sub");
    home.classList.remove("sub");
    blog.classList.remove("sub");

});
home.addEventListener("click",function(){
    home.classList.add("sub");
    blog.classList.remove("sub");
    email.classList.remove("sub");

});
};
