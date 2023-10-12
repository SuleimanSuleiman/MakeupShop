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

 const productDataShowElements = document.querySelectorAll("[id^='ProductDataShow']");
    productDataShowElements.forEach((element) => {
        element.addEventListener("click", (event) => {
            const dataId = element.getAttribute("data-index"); // استخراج قيمة data-index
            const productDataElement = document.getElementById(`productData${dataId}`);
            if (productDataElement) {
                if (productDataElement.classList.contains("hidden")) {
                    productDataElement.classList.remove("hidden"); // عرض العنصر
                } else {
                    productDataElement.classList.add("hidden"); // إخفاء العنصر
                }
            }
        });
    });

setTimeout(function () {
    document.getElementById('success-message').style.display = 'none';
}, 10000);











                                    // {{-- actiob --}}
                                    // <td class="px-6 py-4 text-right">
                                    //         <div  data-index={{$pagin->id}} id="action" class=" flex-[5%]  font-[100] text-[28px] flex justify-center items-center hover:cursor-pointer">
                                    //             <ul id="menu-product" class=" bg-gray-200 p-1 rounded-md ">
                                    //                 <li data-index={{$pagin->id}} data-name={{$pagin->name}}  id="remove" class="text-[14px] font-semibold hover:scale-105 transition-none duration-700 text-red-600 ">Remove</li>
                                    //                 <li data-index={{$pagin->id}} data-name={{$pagin->name}} id="update" class="text-[14px] font-semibold hover:scale-105 transition-none duration-700 text-orange-700">
                                    //                     <a href={{ route('admin.product.edit', ['product'=>$pagin->id]) }}>Update</a>
                                    //                 </li>
                                    //             </ul>
                                    //             {{-- create Container For Delete --}}
                                    //             <div id="deleteContainer" class="hidden w-full h-full pointer-event fixed top-0 left-0 justify-center items-center z-50 backdrop-blur-md bg-[rgba(255, 255, 255, 0.2)] " >
                                    //                 <button id="removeContainerbtn" class="absolute text-gray-900  top-12 right-12">X</button>
                                    //                 <div id="PdeleteContainer" class="w-[400px] bg-gray-300 rounded-md p-[12px] ">
                                    //                     <h1 class="text-[23px] text-red-600 font-semibold mt-4">Are your sure to remove</h1>
                                    //                     <p class="opacity-90 text-black font-medium mt-4 text-base">If you delete this product you can restore during 30 day</p>
                                    //                     <p class="text-[20px] text-red-600 font-semibold mt-4 leading-4 select-none">Write "<small style="color:black">{{explode(' ',$pagin->name)[0]}}</small>"</p>
                                    //                     <form id="deleteForm" action={{ route('admin.product.destroy', ['product'=> $pagin->id]) }} method="POST"  class="flex justify-between items-center mt-4">
                                    //                     @csrf
                                    //                     @method('DELETE')
                                    //                         <input type="text" id="inputFaild" class="flex-[80%] border-none rounded-md h-[25px] mt-2 mr-4" />
                                    //                         <button disabled type="submit" class="flex-[20%] text-red-600 text-[18px] mt-2 bg-white px-2 py-[1px] rounded-md opacity-40" >Delete</button>
                                    //                     </form>
                                    //                 </div>
                                    //             </div>
                                    //         </div>
                                    // </td>

