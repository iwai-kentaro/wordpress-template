/* -------------------------------------------*/
/* gsap.js
/* -------------------------------------------*/

window.addEventListener("DOMContentLoaded", function(){
const hamburger = document.querySelector("#js-hamburger");
const borders = document.querySelectorAll('.l-header-hamburger__border');
const global = document.querySelector('#js-global');
const tl = gsap.timeline();
const header = document.querySelector('.l-header');

gsap.set(global, { autoAlpha: 0 });
gsap.set(global, { 'display': 'none' });

hamburger.addEventListener('click', function () {
  if (hamburger.classList.contains('is-active')) {
    hamburger.classList.remove('is-active');
    gsap.to(borders[0], { x: 0, y: 0, rotate: 0 });
    gsap.to(borders[1], { autoAlpha: 1 });
    gsap.to(borders[2], { x: 0, y: 0, rotate: 0 });
    gsap.to('body', { 'overflow': "initial" });
    gsap.to(header, { 'backgroundColor': 'rgba(255, 255, 255, 0.69)' });
    tl
      .to(global, { autoAlpha: 0 })
      .to(global, { 'display': 'none' });
  } else {
    tl
      .to(global, { 'display': 'block' })
      .to(global, { autoAlpha: 1 });
    hamburger.classList.add('is-active');
    gsap.to(borders[0], { x: 0, y: 8, rotate: 45 });
    gsap.to(borders[1], { autoAlpha: 0 });
    gsap.to(borders[2], { x: 0, y: -9, rotate: -45 });
    gsap.to('body', { 'overflow': 'hidden' });
    gsap.to('header', { 'backgroundColor': 'transparent' });
  }
});


const globalMenu = document.querySelector('.l-header-global__menu');
const globalMenuItems = document.querySelectorAll('.l-header-global__menu-item');
// globalメニューを押した時にglobalメニューを閉じて、is-activeもはずす

globalMenuItems.forEach(globalMenuItem => {
  globalMenuItem.addEventListener('click', function () {
    if (hamburger.classList.contains('is-active')) {
      hamburger.classList.remove('is-active');
      gsap.to(borders[0], { x: 0, y: 0, rotate: 0 });
      gsap.to(borders[1], { autoAlpha: 1 });
      gsap.to(borders[2], { x: 0, y: 0, rotate: 0 });
      gsap.to('body', { 'overflow': "initial" });
      gsap.to(header, { 'backgroundColor': 'rgba(255, 255, 255, 0.69)' });
      tl
        .to(global, { autoAlpha: 0 })
        .to(global, { 'display': 'none' });
    } else {
      tl
        .to(global, { 'display': 'block' })
        .to(global, { autoAlpha: 1 });
      hamburger.classList.add('is-active');
      gsap.to(borders[0], { x: 0, y: 8, rotate: 45 });
      gsap.to(borders[1], { autoAlpha: 0 });
      gsap.to(borders[2], { x: 0, y: -9, rotate: -45 });
      gsap.to('body', { 'overflow': 'hidden' });
      gsap.to('header', { 'backgroundColor': 'transparent' });
    }
  });
});


// アコーディオンメニューの実装
const accordion = document.querySelector('#js-accordion');
const faq_box = document.querySelectorAll('.p-top-faq__box');
const qs = document.querySelectorAll('.p-top-faq__box-q');
const as = document.querySelectorAll('.p-top-faq__box-a');
const a = document.querySelector('.p-top-faq__box-a');
const vertical = document.querySelector('.p-top-faq__box-q-cross-vertical');


gsap.set(as,{"height": 0,autoAlpha:0,});

qs.forEach(q => {   
  const q_vertical = q.querySelector('.p-top-faq__box-q-cross-vertical');
  const q_next = q.nextElementSibling;
    q.addEventListener('click',function(){
        if(q.classList.contains('is-active')){
          q.classList.remove('is-active');
          gsap.to(q_vertical,{autoAlpha:1})
          tl
            .to(q_next,{autoAlpha:0})
            .to(q_next,{'height':0,})
        }else{
          q.classList.add('is-active');
          gsap.to(q_vertical,{autoAlpha:0})
          tl
          .to(q_next,{'height':'auto'})
          .to(q_next,{autoAlpha:1})
        }
    });
});
});