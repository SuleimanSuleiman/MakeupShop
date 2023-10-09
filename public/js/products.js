let remove = document.querySelectorAll('#remove')

remove.forEach((element) => {
    element.addEventListener("click", () => {

        let deleteContainer = element.parentElement.nextElementSibling;
        let formDelete = deleteContainer.children.PdeleteContainer.children.deleteForm;
        let name = element.getAttribute('data-name');

        HandleInputFaild(formDelete,name)

        deleteContainer.classList.add('flex');
        deleteContainer.classList.remove('hidden');

    });
    // remove container
    let removeContainer = document.querySelectorAll('#removeContainerbtn')

    removeContainer.forEach((ele) => {
        ele.addEventListener('click', () => {
            ele.parentElement.classList.remove('flex')
            ele.parentElement.classList.add('hidden')
        });
    })
})

function HandleInputFaild(formDelete,title) {

    let btn = formDelete.children.inputFaild;

    btn.addEventListener('input', (e) => {
        console.log(title)
        if (e.target.value === title) {
            btn.nextElementSibling.removeAttribute('disabled');
            btn.nextElementSibling.style.opacity = '100%';
        } else {
            btn.nextElementSibling.setAttribute('disabled', true);
            btn.nextElementSibling.style.opacity = '43%';
        }
    });
};

setTimeout(function () {
    document.getElementById('success-message').style.display = 'none';
}, 10000);
