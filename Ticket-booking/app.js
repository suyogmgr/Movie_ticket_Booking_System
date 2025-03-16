const slider = document.querySelector('.slide');
const totalImage = document.querySelectorAll('.slider').length;

const slideWidth = 100;

let currentIndex = 0;
let isTransition = false

slider.style.transform = `translateX(-${currentIndex * slideWidth}%)`;

function updateSlider(){
    if(isTransition) return;
    isTransition = true;

    slider.style.transition = `300ms ease-in-out`;
    slider.style.transform = `translateX(-${currentIndex * slideWidth}%)`;

    setTimeout(()=>{
        if(currentIndex === 0){
            slider.style.transition = 'none';
            currentIndex = totalImage - 2;
            slider.style.transform = `translateX(-${currentIndex * slideWidth}%)`;
        }else if(currentIndex === totalImage -1){
            slider.style.transition = 'none';
            currentIndex = 1;
            slider.style.transform = `translateX(-${currentIndex * slideWidth}%)`;
        }
        isTransition = false;
    }, 500);
}


function nextSlide(){
    currentIndex++;
    updateSlider();
}

function prevSlide(){
    currentIndex--;
    updateSlider()
}

setInterval(nextSlide, 3000);


const sidebar = document.querySelector('.sidebar');

function openSlider(){
    sidebar.classList.toggle('show');
    sidebar.classList.remove('close');
}

function closeSlider(){
    sidebar.classList.toggle('close');
    sidebar.classList.remove('show');
}