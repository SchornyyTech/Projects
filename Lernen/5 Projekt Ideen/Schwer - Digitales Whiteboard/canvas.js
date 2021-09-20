window.addEventListener('load', () => {
    const canvas = document.querySelector('#canvas');
    const ctx = canvas.getContext('2d');

//REZISING
    canvas.height = window.innerHeight;
    canvas.width = window.innerWidth;
});