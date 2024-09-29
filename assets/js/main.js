/*=============== SHOW MENU ===============*/
const navMenu = document.getElementById('nav-menu'),
      navToggle = document.getElementById('nav-toggle'),
      navClose = document.getElementById('nav-close')

/* Menu show */
if(navToggle){
    navToggle.addEventListener('click', () =>{
        navMenu.classList.add('show-menu')
    })
}

/* Menu hidden */
if(navClose){
    navClose.addEventListener('click', () =>{
        navMenu.classList.remove('show-menu')
    })
}
let subMenu = document.getElementById("subMenu");

function toggleMenu(){
    subMenu.classList.toggle("open-menu");
}


/*=============== REMOVE MENU MOBILE ===============*/
const navLink = document.querySelectorAll('.nav__link')

const linkAction = () =>{
    const navMenu = document.getElementById('nav-menu')
    // When we click on each nav__link, we remove the show-menu class
    navMenu.classList.remove('show-menu')
}
navLink.forEach(n => n.addEventListener('click', linkAction))

/*=============== CHANGE BACKGROUND HEADER ===============*/
const scrollHeader = () =>{
    const header = document.getElementById('header')
    // When the scroll is greater than 50 viewport height, add the scroll-header class to the header tag
    this.scrollY >= 50 ? header.classList.add('bg-header') 
                       : header.classList.remove('bg-header')
}
window.addEventListener('scroll', scrollHeader)

/*=============== SCROLL SECTIONS ACTIVE LINK ===============*/
const sections = document.querySelectorAll('section[id]')
    
const scrollActive = () =>{
  	const scrollDown = window.scrollY

	sections.forEach(current =>{
		const sectionHeight = current.offsetHeight,
			  sectionTop = current.offsetTop - 58,
			  sectionId = current.getAttribute('id'),
			  sectionsClass = document.querySelector('.nav__menu a[href*=' + sectionId + ']')

		if(scrollDown > sectionTop && scrollDown <= sectionTop + sectionHeight){
			sectionsClass.classList.add('active-link')
		}else{
			sectionsClass.classList.remove('active-link')
		}                                                    
	})
}
window.addEventListener('scroll', scrollActive)

/*=============== SHOW SCROLL UP ===============*/ 
const scrollUp = () =>{
	const scrollUp = document.getElementById('scroll-up')
    // When the scroll is higher than 350 viewport height, add the show-scroll class to the a tag with the scrollup class
	this.scrollY >= 350 ? scrollUp.classList.add('show-scroll')
						: scrollUp.classList.remove('show-scroll')
}
window.addEventListener('scroll', scrollUp)

/*=============== SCROLL REVEAL ANIMATION ===============*/
const sr = ScrollReveal({
    origin: 'top',
    distance: '60px',
    duration: 2500,
    delay: 400,
})

sr.reveal(`.home__data, .footer__container, .footer__group`)
sr.reveal(`.home__img`, {delay: 700, origin: 'bottom'})
sr.reveal(`.logos__img, .program__card, .pricing__card`, {interval: 100})
sr.reveal(`.choose__img, .calculate__content`, {origin: 'left'})
sr.reveal(`.choose__content, .calculate__img`, {origin: 'right'})


/*=============== CALCULATE JS ===============*/
const calculateForm = document.getElementById('calculate-form'),
      calculateCm = document.getElementById('calculate-cm'),
      calculateKg = document.getElementById('calculate-kg'),
      calculateMessage = document.getElementById('calculate-message')

const calculateBmi = (e) =>{
    e.preventDefault()

    //check if the fields have value
    if(calculateCm.value === '' || calculateKg.value ===''){
        //Add and remove color
        calculateMessage.classList.remove('color-green')
        calculateMessage.classList.add('color-red')
        //Show message
        calculateMessage.textContent = 'Fill in the Height and Weight 🧐'
        //Remove message three seconds
        setTimeout(() =>{
            calculateMessage.textContent = ''
        }, 3000)
    } else{
        //BMI Formula
        const cm = calculateCm.value / 100,
              kg = calculateKg.value,
              bmi = Math.round(kg / (cm * cm))

        //Show your health status
        if(bmi < 18.5){
            calculateMessage.classList.add('color-green')
            calculateMessage.textContent = 'Your BMI is ' +bmi+ ' and you are Underweight 😞 We suggest for you to have propper diet and lifting'
        } else if(bmi < 25){
            calculateMessage.classList.add('color-green')
            calculateMessage.textContent = 'Your BMI is ' +bmi+ ' and you are average 😄 Lifting '
        }else if(bmi < 30){
            calculateMessage.classList.add('color-green')
            calculateMessage.textContent = 'Your BMI is ' +bmi+ ' and you are Overweight 😨 Cardio '
        }else if(bmi < 35){
            calculateMessage.classList.add('color-green')
            calculateMessage.textContent = 'Your BMI is ' +bmi+ ' and you are Obese 😱'
        }else if(bmi < 40){
            calculateMessage.classList.add('color-green')
            calculateMessage.textContent = 'Your BMI is ' +bmi+ ' and you are Severly Obese 🤢'
        }else{
            calculateMessage.classList.add('color-green')
            calculateMessage.textContent = 'your the very defenition of FAT Your BMI is ' +bmi+ ' and you are Severly Obese 💀 Loose weight!'
        }

        //To clear the input field
        calculateCm.value = ''
        calculateKg.value = ''

        setTimeout(() =>{
            calculateMessage.textContent = ''
        }, 4000)
    }
}

calculateForm.addEventListener('submit', calculateBmi)



/*=============== EMAIL JS ===============*/
const contactForm = document.getElementById('contact-form'),
      contactMessage = document.getElementById('contact-message'),
      contactUser = document.getElementById('contact-user')

const sendEmail = (e) =>{
    e.preventDefault()

    //Check if the field has a value
    if(contactUser.value === ''){
        contactMessage.classList.remove('color-green')
        contactMessage.classList.add('color-red')

        contactMessage.textContent = 'You must enter your email ☝️'

        setTimeout(() =>{
            contactMessage.textContent = ''
        }, 3000)
    }else{
        // serviceID - templatID - #form - publicKey
        emailjs.sendForm('service_amw0ig7','template_uvzsu38','#contact-form','H-dcMU-YVYnKqvjBj')
            .then(() =>{
                contactMessage.classList.add('color-green')
                contactMessage.textContent = 'You registered successfully 😎'

                setTimeout(() =>{
                    contactMessage.textContent = ''
                }, 3000)
            }, (error) =>{
                alert('OOP! SOMETHING HAS FAILED...',error)
            }) 

        contactUser.value = ''
    }
}

contactForm.addEventListener('submit', sendEmail)
    
function subscribe1(){
    const contactMessage = document.getElementById('contact-message'),
          price1 = '$0'

    contactMessage.textContent = 'Subcribe for purchase of '+price1+' 🤑'
    setTimeout(() =>{
        contactMessage.textContent = ''
    }, 7000)
}
function subscribe2(){
    const contactMessage = document.getElementById('contact-message'),
          price1 = '$80'

    contactMessage.textContent = 'Subcribe for purchase of '+price1+' 🤑'
    setTimeout(() =>{
        contactMessage.textContent = ''
    }, 7000)
}
function subscribe3(){
    const contactMessage = document.getElementById('contact-message'),
          price1 = '$100'

    contactMessage.textContent = 'Subcribe for purchase of '+price1+' 🤑'
    setTimeout(() =>{
        contactMessage.textContent = ''
    }, 7000)
}

//pruchase popup
let popup3 = document.getElementById("popup3");
let popup2 = document.getElementById("popup2");
let popup1 = document.getElementById("popup1");
let popup = document.getElementById("popup");
let pricing1 = document.getElementById("pricing1");
let pricing2 = document.getElementById("pricing2");
let pricing3 = document.getElementById("pricing3");
let popupworkout4 = document.getElementById("popupworkout4");

function openPopup(){
    popup.classList.add("open-popup");
    
}
function openPopup1(){
    popup1.classList.add("open-popup1");
    
}
function buyPopup1(){
    popup1.classList.remove("open-popup1");
    pricing1.classList.add("pricing__card-active")
    pricing2.classList.remove("pricing__card-active")
    pricing3.classList.remove("pricing__card-active")
    menumembership = "free"
    subscribe1()
}
function closePopup1(){
    popup1.classList.remove("open-popup1");
}
function openPopup2(){

    popup2.classList.add("open-popup2");

}
function buyPopup2(){
    
    popup2.classList.remove("open-popup2");
    pricing2.classList.add("pricing__card-active")
    pricing1.classList.remove("pricing__card-active")
    pricing3.classList.remove("pricing__card-active")
    menumembership = "basic"
    subscribe2()
}
function closePopup2(){
    popup2.classList.remove("open-popup2");
}
function openPopup3(){

    popup3.classList.add("open-popup3");
}
function buyPopup3(){

    popup3.classList.remove("open-popup3");
    pricing3.classList.add("pricing__card-active")
    pricing2.classList.remove("pricing__card-active")
    pricing1.classList.remove("pricing__card-active")
    menumembership = "premium"
    subscribe3()
}
function closePopup3(){
    popup3.classList.remove("open-popup3");
}
function openPopupworkout4(){
    popupworkout4.classList.add("open-popupworkout4")
}
// let preveiwContainer = document.querySelector('.pricing-preview');
// let previewBox = preveiwContainer.querySelectorAll('.preview');

// document.querySelectorAll('.pricing__container .pricing__card').forEach(pricing__card =>{
//   pricing__card.onclick = () =>{
//     preveiwContainer.style.display = 'flex';
//     let name = product.getAttribute('data-name');
//     previewBox.forEach(preview =>{
//       let target = preview.getAttribute('data-target');
//       if(name == target){
//         preview.classList.add('active');
//       }
//     });
//   };
// });

// previewBox.forEach(close =>{
//   close.querySelector('.fa-times').onclick = () =>{
//     close.classList.remove('active');
//     preveiwContainer.style.display = 'none';
//   };
// });
// let pricing1 = document.getElementById("pricing__card");
// let pricing2 = document.getElementById("pricing__card");
// let pricing3 = document.getElementById("pricing__card");
// function pricing1(){
//     pricing1.classList.add("pricing__card-active");
// }