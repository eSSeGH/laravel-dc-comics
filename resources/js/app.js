import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])

const headerLinkEls = document.querySelectorAll('.nav-link')

console.log(headerLinkEls)

headerLinkEls.addEventListener("click", onClick);

function onClick() {
    this.className = 'nav-link-selected'
}