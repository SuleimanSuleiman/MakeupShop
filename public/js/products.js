let iconProducts = document.querySelectorAll('#icon-products')
let menuProducts = document.querySelectorAll('#menu-product')


iconProducts.forEach((element) => {
    element.addEventListener("click", () => {
        console.log(element);
    })
})
