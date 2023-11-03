let menu = document.querySelectorAll('#menu');
let ContainerSidbar = document.getElementById('ContainerSidbar');
let menyBtn = document.getElementById('menyBtn');
let sidbar = document.getElementById('sidbar');

document.addEventListener('DOMContentLoaded', (e) => {

    //for links
    menu.forEach((itElement) => {
        itElement.addEventListener('click', function () {

            itElement.classList.toggle('open');

            if (itElement.classList.contains('open')) {
                itElement.children.icon.classList.add('rotate-90');
                itElement.nextElementSibling.classList.remove('hidden')
            } else {
                itElement.children.icon.classList.remove('rotate-90');
                itElement.nextElementSibling.classList.add('hidden')
            }
        });
    });
})



