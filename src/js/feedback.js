const feedback = document.querySelector('.feedback--js');
const switchLeft = document.querySelector('.feedback__switch-left--js');
const switchRight = document.querySelector('.feedback__switch-right--js');

switchLeft.addEventListener('click', () => {
    if(feedback.classList.contains('transform-left--js')) {
        feedback.classList.remove('transform-left--js');
        switchRight.classList.remove('hide--js');
        switchLeft.classList.remove('move-right--js');
    }
    else {
        feedback.classList.add('transform-right--js');
        switchLeft.classList.add('hide--js');
        switchRight.classList.add('move-left--js');
    }
});

switchRight.addEventListener('click', () => {
    if(feedback.classList.contains('transform-right--js')) {
        feedback.classList.remove('transform-right--js');
        switchLeft.classList.remove('hide--js');
        switchRight.classList.remove('move-left--js');
    }
    else {
        feedback.classList.add('transform-left--js');
        switchRight.classList.add('hide--js');
        switchLeft.classList.add('move-right--js');
    }
});