
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


// Auto Navigation highlighting
const navLinks = document.querySelectorAll('.nav-link')
// const sections = document.querySelectorAll('section')

// const observer = new  IntersectionObserver((entries) => {
//   entries.forEach((entry) => {
//     if(entry.isIntersecting){
//       if(Array.from(navLinks).find(value => value == entry.target.getAttribute('id'))){
//         console.log("We found it")
//       }
      
//       console.log(entry.target.getAttribute('id'))
//     }
//   })
// })


// sections.forEach((el) => observer.observe(el))


// Get all sections that have an ID defined
const sections = document.querySelectorAll("section[id]");

// Add an event listener listening for scroll
window.addEventListener("scroll", navHighlighter);

function navHighlighter() {
  
  // Get current scroll position
  let scrollY = window.pageYOffset;
  
  // Now we loop through sections to get height, top and ID values for each
  sections.forEach(current => {
    const sectionHeight = current.offsetHeight;
    const sectionTop = current.offsetTop - 50;
    sectionId = current.getAttribute("id");
    
    /*
    - If our current scroll position enters the space where current section on screen is, add .active class to corresponding navigation link, else remove it
    - To know which link needs an active class, we use sectionId variable we are getting while looping through sections as an selector
    */

    if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
      document.querySelector("a[href='#contact']").classList.add("current-page");
    }else{
      document.querySelector("a[href='#contact']").classList.remove("current-page");
    }

    if (scrollY > sectionTop && scrollY <= sectionTop + sectionHeight ){
      document.querySelector("a[href*=" + sectionId + "]").classList.add("current-page");
    } else {
      document.querySelector("a[href*=" + sectionId + "]").classList.remove("current-page");
    }
  });
}




function checkSlide(){
  
  slideX.forEach(slide => {
    const boxTop = slide.getBoundingClientRect().top
    if(boxTop < triggerBottom){
      slide.classList.add('show')
    }// }else{
    //   slide.classList.remove('show')
    // }
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

// form methods
const form = document.getElementById('connectForm')
const formBtn = document.getElementById('connectSubmit')
const formModal = document.getElementById('formModal')
const robotCheck = document.getElementById('robotCheck')
const notToday = document.getElementById('notToday')

formModal.classList.remove('cursor-wait')

const quickClose = document.addEventListener('keydown', (e)=> {
  if(e.key === "Escape" || e.key === "Esc"){
    formModal.classList.add('hidden')
  }
})



async function sendEmail(verified){
  let data = await fetch("/api/" + form.email.value+"/?verified="+verified, {
    method: 'POST',
  })
  
  return data
}

function is_verified(){
  if(form.verified){
    return true
  }
  return false
}

formBtn.addEventListener('click', async (e) => {
  
  e.preventDefault()

  if(form.email.value == ''){
    form.email.classList.add("invalid-input")
    return false;
  }

  formModal.classList.toggle('hidden')
  formModal.style.opacity = "1"


  robotCheck.addEventListener('change', async () => {
    formModal.classList.add('cursor-wait')
    robotCheck.classList.add('hidden')
    setTimeout(()=>{
      formModal.classList.remove('cursor-wait')
      notToday.classList.remove('hidden')
    }, 1500)
    
    formModal.classList.add('hidden')
    //create input for filter verifying via laravel to prevent spam
    let newInput = document.createElement('input')
    newInput.type="hidden"
    newInput.name='verified'
    newInput.value=true
    form.appendChild(newInput)
    let verified = is_verified()    

    if(verified){
      const data = await sendEmail(verified)
      .then((res) => res)
      .then((data) => {
        // console.log("We have data..")
        // console.log(data)
        //we have a response saying its all good
        return data
      })
      
      // console.log(data)
      if(data.status === 200){
        // console.log(data.json())
        let toast = document.getElementById("toastMsg")
        form.classList.add("hidden")
        toast.classList.toggle("hidden")
      }
      console.log(data)
    }
  
  })  
})

// Testimonials slider

const slides = document.querySelectorAll('.testimonial')
// todo add next and previous buttons
const next = document.querySelector('#next')
const prev = document.querySelector('#prev')
const auto = false;
const intervalTime = 5500;
let slideInterval;

const nextSlide = () => {
  //get current slide
  const current = document.querySelector('.current')
  // remove current class from slides
  current.classList.remove('current')
  // Check next slide
  if(current.nextElementSibling){
    current.nextElementSibling.classList.add('current')
  }else{
    slides[0].classList.add('current')
  }
  setTimeout( ()=> current.classList.remove('.current'))
}

const prevSlide = () => {
  //get current slide
  const current = document.querySelector('.current')
  // remove current class from slides
  current.classList.remove('current')
  // Check previous slide
  if(current.previousElementSibling){
    current.previousElementSibling.classList.add('current')
  }else{
    // add current to last slide
    slides[slides.length-1].classList.add('current')
  }
  setTimeout( ()=> current.classList.remove('.current'))
}

//Button events for slider
next.addEventListener('click', e => {
  nextSlide()
})
prev.addEventListener('click', e => {
  prevSlide()
})

// Auto Slide
if(auto){
  slideInterval = setInterval(nextSlide, intervalTime);
}



// Auto Copyright
const copyright = document.getElementById('copyright')
const theYear = new Date();
copyright.innerText = theYear.getFullYear();







// Firing functions
checkSlide();
