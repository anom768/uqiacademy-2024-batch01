 // js responsive nav menu
 const menuBtn = document.querySelector(".menu-btn");
 const navigation = document.querySelector(".navigation");

 menuBtn.addEventListener("click", () => {
     menuBtn.classList.toggle("active");
     navigation.classList.toggle("active");
 });

 // js video slider
 const btns = document.querySelectorAll(".nav-btn");
 const slides = document.querySelectorAll(".video-slide");
 const contents = document.querySelectorAll(".content");

 var sliderNav = function(manual) {
     btns.forEach((btn) => {
         btn.classList.remove("active");
     });

     slides.forEach((slide) => {
         slide.classList.remove("active");
     });

     contents.forEach((content) => {
         content.classList.remove("active");
     });

     btns[manual].classList.add("active");
     slides[manual].classList.add("active");
     contents[manual].classList.add("active");
 }

 btns.forEach((btn, i) => {
     btn.addEventListener("click", () => {
         sliderNav(i);
     })
 });

 // slider
 let next = document.querySelector('.next')
 let prev = document.querySelector('.prev')

 next.addEventListener('click', function(){
     let items = document.querySelectorAll('.item')
     document.querySelector('.slide').appendChild(items[0])
 })

 prev.addEventListener('click', function(){
     let items = document.querySelectorAll('.item')
     document.querySelector('.slide').prepend(items[items.length - 1]) // here the length of items = 6
 })

 // "scrollToBottom"
 const scrollToBottom = document.getElementById('goDown');
 
 // Menambahkan event listener untuk menangani klik tombol
 scrollToBottom.addEventListener('click', function() {
     // Menggulir ke bawah halaman
     window.scrollTo({
         top: document.body.scrollHeight,
         behavior: 'smooth'
     });
 });

 // Menangkap tombol dengan ID "redirectButton"
 const redirectButton = document.getElementById('order');

 // Menambahkan event listener untuk menangani klik tombol
 redirectButton.addEventListener('click', function() {
     // URL yang ingin Anda arahkan
     const targetUrl = '/order.html'; // Gantilah dengan URL yang sesuai

     // Mengarahkan ke URL tersebut
     window.location.href = targetUrl;
 });