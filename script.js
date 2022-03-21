const content = document.querySelector(".content");
const slider = document.querySelector(".slider");
const sliderImage = Array.from(document.querySelectorAll(".slider-image"));
const btnChevron = document.querySelectorAll(".btn-chevron");
let i = 0;

let reset = (container, clase) => {
    container.forEach(item => item.classList.remove(clase));
}

let createInfo = text => {
    const sliderInfo = document.createElement("p");
    sliderInfo.className = "slider-info";
    sliderInfo.textContent = text;
    content.appendChild(sliderInfo);
};




let moveImage = () => {
    if (i === sliderImage.length) {
        i = 0; // Si el contador ya llego al ultimo item, lo manda al primer item.
    } else if (i == -1) {
        i = sliderImage.length - 1; // Si llego al primero lo manda hasta el ultimo.
    }
    reset(sliderImage, 'slider-image-active');
    setPosition(i);
    Image(i);
};

btnChevron.forEach(btn => {
    btn.addEventListener('click', () => {
        if (btn.dataset.action == "right") {
            i++;
            return moveImage();
        }
        i--;
        return moveImage();
    })
})

new Image(i);

