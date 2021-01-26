const allCross = document.querySelectorAll('.visible-pannel img')
console.log(allCross);

allCross.forEach(element => {

    element.addEventListener("click", function(){

        console.log(this.parentNode.parentNode.childNodes[3].scrollHeight);

        const currentChoice = this.parentNode.parentNode.childNodes[3].scrollheight;

        //console.log(this.src);
        if(this.src.includes('croix')){
            this.src='image/minus.png';
            gsap.to(currentChoice, {duration: 0,2, height: height + 40; opacity: 1, padding: "20px 15px"})
        } else if (this.src.includes("minus")){
            this.src='image/croix.png';
            gsap.to(currentChoice, {duration: 0,2, height: 0; opacity: 0, padding: "0px 15px"})
        }

    })


})

