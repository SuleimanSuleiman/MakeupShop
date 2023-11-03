var header = document.getElementById('header');

    //hidden the header when scroll
    window.addEventListener("scroll", function (e) {
        if (this.scrollY >= 600) {
            header.style.top = '-60px';
        } else {
            header.style.top = '0';
        }
    });

    //show header when hover
    header.addEventListener("mousemove", function (e) {
        header.style.top = '0';
    });
    header.addEventListener("mouseleave", function (e) {
        if (this.scrollY < 600) {
            header.style.top = '-60px';
        } else {
            header.style.top = '0';
        }
    });
