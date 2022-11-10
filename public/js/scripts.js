
const slideX = document.querySelectorAll('.slide-x')
window.addEventListener('scroll', checkSlide);
const triggerBottom = window.innerHeight / 5 * 4

const navBar = document.getElementById("navbar")
const hero = document.getElementById("hero")
const bottom = window.innerHeight - (window.scrollY + hero.getBoundingClientRect().top+hero.offsetHeight)

const navStyle = ['bg-gradient-to-b', 'from-slate-800', 'via-sky-800', 'to-sky-800']

const scrollTop = document.getElementById('scrollTop')
const mobileNav = document.getElementById('mobileNav')
const mobileNavBtn = document.getElementById('mobileNavBtn')


mobileNavBtn.addEventListener('click', ()=>{
  mobileNav.classList.toggle('mobile-nav')
})



checkSlide();

function checkSlide(){
  
  slideX.forEach(slide => {
    const boxTop = slide.getBoundingClientRect().top
    if(boxTop < triggerBottom){
      slide.classList.add('show')
    }else{
      slide.classList.remove('show')
    }
  })

  if(hero.getBoundingClientRect().bottom < bottom){
    navStyle.forEach(style => {
      navBar.classList.add(style)
    })
    scrollTop.classList.remove('hidden')
  }else{
    navStyle.forEach(style => {
      navBar.classList.remove(style)
    }) 
    scrollTop.classList.add('hidden')

  }

}

// tip box
const closeTip = document.getElementById('closeTip')
const tip = document.getElementById('tip')
closeTip.addEventListener('click', () => {
  tip.style.opacity = '0'
  setTimeout(()=>{
    tip.style.display = 'none'
  }, 800)
})

const chevrons = document.querySelectorAll('.fa-chevron-down')

chevrons.forEach(chevron => {
  
  chevron.addEventListener('click', () => {
    chevron.classList.toggle('fa-chevron-down')
   chevron.classList.toggle('fa-chevron-up')
    const el = chevron.parentElement.parentElement.children[1]
    el.classList.toggle('accordian-collapse')
    el.classList.toggle('accordian-expand')
    // console.log(chevron.parentElement.parentElement.children[1].style = 'border: 4px solid black')
  })
})