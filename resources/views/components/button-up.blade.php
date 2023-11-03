<div class="fixed w-screen h-screen flex justify-end items-end px-12 py-12 pointer-events-none z-50">
    <button id='button' class="z-50 pointer-events-auto bg-gray-500 text-white p-3 rounded-md absolute translate-x-0 duration-1000">{{__("home.Up")}}</button>
</div>
{{-- -right-[1200px] right-10--}}

<script>
    let button = document.getElementById("button");

    button.addEventListener("click",function(e){
        window.scrollTo({
            left: 0,
            top: 0,
            behavior:"smooth"
        });

    })



    window.addEventListener('scroll', function (e) {
        if (scrollY >= 600) {
            button.style.right = '40px';
        } else {
            button.style.right = '-1200px';
        }
    });
</script>
