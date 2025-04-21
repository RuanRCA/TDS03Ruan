class MobileNavbar{
    constructor(mobileMenu , nav , navLinks){
        this.mobileMenu= document.querySelector(mobileMenu);
        this.nav = document.querySelector(nav);
        this.navLinks = document.querySelectorAll(navLinks);
        this.activeClass = "active";

        this.handleClick= this.handleClick.bind(this);

    }

    animateLinks(){
    this.navLinks.forEach((link,index)=>{
        console.log(index);

        link.style.animation
        ?(link.style.animation="")
        :(link.style.animation = `navLinkFade 0.5 ease forwards 0.3s`);

    });
    }



    handleClick(){
        this.navList.classList.toggle(this.activeClass);
        this.animateLinks();
    }

    addClickEvent(){
        this.mobileMenu.addClickEventListener("click" , this.handleClick );
    
    }

    init(){

        if(this.mobileMenu){
            this.addClickEvent();
        }

        return this;

    }
}

const mobileNavbar = new MobileNavbar(
    ".mobile-menu",
    ".nav-list",
    ".nav-list li",
);
mobileNavbar.init();


let count = 1 ;
document.getElementById("radio1").checked = true;

setInterval( function() {
    
}, 5000);

function nextImage(){
 count++;
 if(count>4){
    count =1;
 }

 document.getElementById("radio" + count).checked=true;
}