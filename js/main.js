'use strict';

{
  const images = [
    'img/mainbg.jpg',
    'img/pic00.JPG',
    'img/pic01.JPG',
    'img/pic02.jpeg',
    'img/pic03.jpeg',
    'img/pic04.jpeg',
    'img/pic05.jpeg',
    'img/pic06.jpeg',
    'img/pic07.jpeg',
    'img/pic08.jpeg',
  ];
  let currentIndex = 0;

  const mainImage = document.getElementById('main');
  mainImage.src = images[currentIndex];

  images.forEach((im, index) =>{//im是'img/pic00.png'到pic07，index是數字0~8(陣列的index數字)
    const img = document.createElement('img');
    img.src = im;

    const li = document.createElement('li');
    if(index === currentIndex){
      li.classList.add('current');
    }
    li.addEventListener('click', ()=>{
      mainImage.src = im;
      const thumbnailsAll = document.querySelectorAll('.thumbnails > li');
      thumbnailsAll[currentIndex].classList.remove('current');
      currentIndex = index;
      thumbnailsAll[currentIndex].classList.add('current');
    })
    li.appendChild(img);

    const thumbnails = document.querySelector('.thumbnails');
    thumbnails.appendChild(li);
  });

  const next = document.getElementById('next');
  next.addEventListener('click', ()=>{
    let target = currentIndex + 1;
    if(target === images.length){
      target = 0;
    }
    document.querySelectorAll('.thumbnails > li')[target].click();
  });

  const prev = document.getElementById('prev');
  prev.addEventListener('click', ()=>{
    let target = currentIndex - 1;
    if(target < 0){
      target = images.length - 1;
    }
    document.querySelectorAll('.thumbnails > li')[target].click();
  });

  let timeoutId;

  function playSlideshow(){
    timeoutId = setTimeout(()=>{
      next.click();
      playSlideshow();
    },1000);
  }

  let isPlaying = false;
  
  const play = document.getElementById('play');
  play.addEventListener('click', () =>{
    if(isPlaying === false){
      playSlideshow();
      play.textContent = 'pause';
    }else{
      clearTimeout(timeoutId);
      play.textContent = 'play';
    }
    isPlaying = !isPlaying;//!論理 NOT (!)単一の演算対象が true と見ることができる場合は、false を返します。そうでない場合は、true を返します。
  });
}