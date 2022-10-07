// fb
const fbModal = document.querySelector('#fb-modal')

const openFbModal= document.querySelector('.open-fb-modal');
const closeFbModal= document.querySelector('.close-fb-modal');

openFbModal.addEventListener('click', ()=>{
    fbModal.showModal();
    console.log('clicked');
})
closeFbModal.addEventListener('click', ()=>{
    fbModal.close();
})

// instagram
const instaModal = document.querySelector('#insta-modal')

const openinstaModal= document.querySelector('.open-insta-modal');
const closeinstaModal= document.querySelector('.close-insta-modal');

openinstaModal.addEventListener('click', ()=>{
    instaModal.showModal();
})
closeinstaModal.addEventListener('click', ()=>{
    instaModal.close();
})