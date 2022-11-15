
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



