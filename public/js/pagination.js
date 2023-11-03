const loadingMessage = document.getElementById('loading-message');

document.addEventListener('DOMContentLoaded', function () {

    //active button
    var activeButton = document.querySelectorAll('#activeButton');
    activeButton.forEach((ele) => {
        ele.addEventListener('click', () => {
            if (ele.getAttribute('data-category') === 'sub') {
                window.location.href = `http://localhost:8000/en/admin/dashboard/updateActive/sub-category/${ele.getAttribute('data-index')}`;

            }else if(ele.getAttribute('data-category') === 'main') {
                window.location.href = `http://localhost:8000/en/admin/dashboard/updateActive/main-category/${ele.getAttribute('data-index')}`;
            }
        });
    });

    //action button
    var action = document.querySelectorAll("#action");
    action.forEach((ele) => {
        ele.addEventListener('click', (e) => {

            ele.classList.toggle('open');
            // open/close menu
            if (ele.classList.contains('open')) {
                ele.children.icon.classList.add("-rotate-90");
                ele.children.menu.classList.remove('hidden');
            } else {
                ele.children.icon.classList.remove('-rotate-90');
                ele.children.menu.classList.add('hidden');
            }
        })
    })

    //show remove container and remove category
    var reomveBtn = document.querySelectorAll('#remove');


    reomveBtn.forEach((element) => {
        element.addEventListener('click', (e) => {
            let title = element.getAttribute('data-title');
            let deleteContainer = element.parentElement.nextElementSibling;
            let formDelete = deleteContainer.children.PdeleteContainer.children.deleteForm;

            showContainer(deleteContainer);
            HandleInputFaild(formDelete, title);

            //for close Delete container
            deleteContainer.addEventListener('click', (e) => {
                if (e.target == deleteContainer) {
                    hiddenContainer(deleteContainer);
                };
            })
        });
    })
});

function showContainer(deleteContainer) {
    deleteContainer.classList.add('flex');
    deleteContainer.classList.remove('hidden');
}
function hiddenContainer(deleteContainer) {
    deleteContainer.classList.add('hidden');
    deleteContainer.classList.remove('flex');
}

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
}

//CheckboxAll
let checkboxAll = document.getElementById('checkboxAll');
let checkboxForAllRows = document.querySelectorAll('.checkbox');
checkboxAll.addEventListener('click', (e) => {
    if (e.target.checked) {
        checkboxForAllRows.forEach((item) => {
            item.setAttribute('checked', true);
        });
    } else {
        checkboxForAllRows.forEach((item) => {
            item.removeAttribute('checked');
        });
    }
});

// document.addEventListener('DOMContentLoaded', () => {
//     //style the pagination
//     var paginationFooter = document.getElementById('pagBtn');
//     paginationFooter.firstElementChild.classList.add('w-full');
//     // paginationFooter.firstElementChild.classList.add('w');
// });


//search handle
var search = document.getElementById('search');
var menuSearch = document.getElementById('menuSearch');
var ulMenuSearch = document.getElementById('ulMenuSearch');


search.addEventListener('input', (e) => {
    if (e.target.value.length > 0) {
        menuSearch.classList.remove('hidden');
        ulMenuSearch.innerHTML = '';
        loadingMessage.classList.remove('hidden');

        fetch(`http://localhost:8000/en/admin/${e.target.getAttribute('data-category')}-category/search?value=${e.target.value}`)
            .then(res => res.json())
            .then(info => {
                console.log(info)
                loadingMessage.classList.add('hidden');
                info.forEach((data) => {
                      ulMenuSearch.innerHTML = '';
                    let liElement = document.createElement('li');
                    let desc = data.desc.en.substring(0, 30);

                    liElement.innerHTML = `
                        <a href='/admin/main-category/${data.id}'>
                         ${data.title.en}
                        </a>
                        <small class="font-base opacity-50 ml-4">${desc} ...</small>
                        ${
                        data.active ?
                        '<small class="font-base opacity-50 ml-4 text-green-700">Is Active</small>'
                        :
                        '<small class="font-base opacity-50 ml-4text-red-700">Not Active</small>'
                        }
                        `;
                    liElement.className = "p-3 border-b mb-1 w-full flex justify-between items-center";

                    ulMenuSearch.appendChild(liElement);
                });
            })
            .catch(error => {
                console.error(error);
                loadingMessage.classList.add('hidden');
            });
    } else {
        menuSearch.classList.add('hidden');
        loadingMessage.classList.add('hidden');
    }
});
