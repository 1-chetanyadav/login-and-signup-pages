document.querySelector("#login #li").addEventListener("click", function(){
    var tl1 = gsap.timeline()
    tl1.to("#logged",{
        opacity:1,
        scale:1,
    })
    tl1.to("#logged",{
        delay:2,
        y:-100,
    })
})

document.querySelector("#sign #sub").addEventListener("click", function(){
    var tl1 = gsap.timeline()
    tl1.to("#signed",{
        opacity:1,
        scale:1,
    })
    tl1.to("#signed",{
        delay:2,
        y:-100,
    })
})