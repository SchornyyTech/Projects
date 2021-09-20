let DARKMODE = false;
const BUTTON = document.getElementById('switch');
const BODY = document.querySelector('body');

if (window.matchMedia('(prefers-color-scheme: dark)').matches) {
    DARKMODE = true;
} else {
    DARKMODE = false;
}

const switchMode = () => {
    DARKMODE = !DARKMODE;
    setClassToBody();
}

const setClassToBody = () => {
    if (DARKMODE) {
        BODY.classList.remove('light');
        BODY.classList.add('dark');
    } else {
        BODY.classList.remove('dark');
        BODY.classList.add('light');
    }
}

BUTTON.addEventListener('click', switchMode);
setClassToBody();