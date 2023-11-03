var lang = document.getElementById('lang');



//button lang
lang.addEventListener('click', function (e) {
    /*
    * [1] chick if not open
        * True:
            * 1 - change the icon to up
            * 2 - change style to block
            * 3  - add open class
        * False:
            * 1 - change the icon to down
            * 2 - change style to hidden
            * 3  - remove open class
    */
    var icon = document.querySelector('.fa-solid');
    var menu = document.getElementById("menu");

    if (!lang.classList.contains('open')) {

        icon.classList.add('fa-caret-up');
        icon.classList.remove('fa-caret-down');


        menu.classList.add("flex");
        menu.classList.remove("hidden");

        lang.classList.add('open');
        lang.classList.add('rounded-t-md');
        lang.classList.remove('rounded-md');

    } else {

        icon.classList.add('fa-caret-down');
        icon.classList.remove('fa-caret-up');

        menu.classList.add("hidden");
        menu.classList.remove("flex");

        lang.classList.add('rounded-md');

        lang.classList.remove('open');
        lang.classList.remove('rounded-t-md');
    }
})
