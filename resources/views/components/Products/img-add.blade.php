<section class="flex p-4 rounded-md flex-wrap gap-3 ">
        <div class="flex-[48%] px-3 mb-6 md:mb-0 bg-white p-4 rounded-lg shadow-sm shadow-gray-500">
            <small class="test-xs text-green-300">If You add photos will add to last photos</small>
            <div class="p-4 border border-gray-300 rounded-md">
                <main class="container ">
                    <!-- file upload modal -->
                    <article aria-label="File Upload Modal" class="relative h-full flex flex-col bg-white shadow-xl rounded-md" ondrop="dropHandler(event);" ondragover="dragOverHandler(event);" ondragleave="dragLeaveHandler(event);" ondragenter="dragEnterHandler(event);">
                    <!-- overlay -->
                    <div id="overlay" class="w-full h-full absolute top-0 left-0 pointer-events-none z-50 flex flex-col items-center justify-center rounded-md">
                        <i>
                        <svg class="fill-current w-12 h-12 mb-3 text-blue-700" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M19.479 10.092c-.212-3.951-3.473-7.092-7.479-7.092-4.005 0-7.267 3.141-7.479 7.092-2.57.463-4.521 2.706-4.521 5.408 0 3.037 2.463 5.5 5.5 5.5h13c3.037 0 5.5-2.463 5.5-5.5 0-2.702-1.951-4.945-4.521-5.408zm-7.479-1.092l4 4h-3v4h-2v-4h-3l4-4z" />
                        </svg>
                        </i>
                        <p class="text-lg text-blue-700">Drop files to upload</p>
                    </div>

                    <!-- scroll area -->
                    <section class=" overflow-auto p-2  w-full h-full flex flex-col">
                        <header class="border-dashed border-2 border-gray-400 py-8 flex flex-col justify-center items-center">
                        <p class="mb-3 font-semibold text-gray-900 flex flex-wrap justify-center">
                            <span>Drag and drop your</span>&nbsp;<span>files anywhere or</span>
                        </p>
                        <input id="hidden-input" name="files[]" type="file" multiple class="hidden" />
                        <div id="button" class="mt-2 rounded-sm px-3 py-1 bg-gray-200 hover:bg-gray-300 focus:shadow-outline focus:outline-none">
                            Upload a file
                        </div>
                        </header>

                        <ul id="gallery" class="my-4 flex flex-1 flex-wrap -m-1">
                        <li id="empty" class="h-full w-full text-center flex flex-col justify-center items-center">
                            <span class="text-small text-gray-500">No files selected</span>
                        </li>
                        </ul>
                    </section>
                    </article>
                </main>

                <!-- using two similar templates for simplicity in js code -->
                <template id="file-template">
                <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
                    <article tabindex="0" class="group w-full h-full rounded-md focus:outline-none focus:shadow-outline elative bg-gray-100 cursor-pointer relative shadow-sm">
                    <img alt="upload preview" class="img-preview hidden w-full h-full sticky object-cover rounded-md bg-fixed" />

                    <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                        <h1 class="flex-1 group-hover:text-blue-800"></h1>
                        <div class="flex">
                        <span class="p-1 text-blue-800">
                            <i>
                            <svg class="fill-current w-4 h-4 ml-auto pt-1" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M15 2v5h5v15h-16v-20h11zm1-2h-14v24h20v-18l-6-6z" />
                            </svg>
                            </i>
                        </span>
                        <p class="p-1 size text-xs text-gray-700"></p>
                        <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md text-gray-800">
                            <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path class="pointer-events-none" d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                            </svg>
                        </button>
                        </div>
                    </section>
                    </article>
                </li>
                </template>

                <template id="image-template">
                <li class="block p-1 w-1/2 sm:w-1/3 md:w-1/4 lg:w-1/6 xl:w-1/8 h-24">
                    <article tabindex="0" class="group hasImage w-full h-full rounded-md focus:outline-none focus:shadow-outline bg-gray-100 cursor-pointer relative text-transparent hover:text-white shadow-sm">
                    <img alt="upload preview" class="img-preview w-full h-full sticky object-cover rounded-md bg-fixed" />

                    <section class="flex flex-col rounded-md text-xs break-words w-full h-full z-20 absolute top-0 py-2 px-3">
                        <h1 class="flex-1"></h1>
                        <div class="flex">
                        <span class="p-1">
                            <i>
                            <svg class="fill-current w-4 h-4 ml-auto pt-" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path d="M5 8.5c0-.828.672-1.5 1.5-1.5s1.5.672 1.5 1.5c0 .829-.672 1.5-1.5 1.5s-1.5-.671-1.5-1.5zm9 .5l-2.519 4-2.481-1.96-4 5.96h14l-5-8zm8-4v14h-20v-14h20zm2-2h-24v18h24v-18z" />
                            </svg>
                            </i>
                        </span>

                        <p class="p-1 size text-xs"></p>
                        <button class="delete ml-auto focus:outline-none hover:bg-gray-300 p-1 rounded-md">
                            <svg class="pointer-events-none fill-current w-4 h-4 ml-auto" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path class="pointer-events-none" d="M3 6l3 18h12l3-18h-18zm19-4v2h-20v-2h5.711c.9 0 1.631-1.099 1.631-2h5.316c0 .901.73 2 1.631 2h5.711z" />
                            </svg>
                        </button>
                        </div>
                    </section>
                    </article>
                </li>
                </template>
            </div>
              <x-input-error :messages="$errors->get('files')" class="mt-2" />
        </div>
        <div class="flex-[48%] px-3 mb-6 md:mb-0 bg-white p-4 rounded-lg shadow-sm shadow-gray-300">
            <p class="text-xl font-semibold text-gray-600 opacity-90 mb-2">Sales Channel</p>
            <div class="p-4 border border-gray-300 rounded-md flex flex-wrap gap-2">
              <div class="flex-[48%] border border-gray-400 rounded-md flex flex-col justify-between p-4">
                <fieldset>
                    <input checked type="checkbox" name="statusSale" id="1" />
                    <label class="text-base text-gray-700 mb-2 select-none hover:cursor-pointer"  for="1">Only sale Market</label>
                </fieldset>
                <fieldset>
                    <input type="checkbox" name="statusSale" id="2"/>
                    <label class="text-base text-gray-700 mb-2  select-none hover:cursor-pointer"  for="2">Online sales from the outlet</label>
                </fieldset>
                <fieldset>
                    <input type="checkbox" name="statusSale" id="3" />
                    <label class="text-base text-gray-700 mb-2 select-none hover:cursor-pointer"  for="3">Both market and online </label>
                </fieldset>
                <fieldset>
                    <input type="checkbox" name="statusSale" id="4" />
                         for="4">Online sale only</label>
                </fieldset>
                <fieldset>
                    <input type="checkbox" name="statusSale" id="5" />
                    <label class="text-base text-gray-700 mb-2 select-none hover:cursor-pointer"  for="5">Tick all options</label>
                </fieldset>
              </div>
              <div class="flex-[48%] border border-gray-400 rounded-md p-4">
                <p class="text-[14px] opacity-50">
                    Pleace select a sales channel first and then find which channel you can cell on.
                    Those who prefer only online sales can never sell from their stores.To be able to sell
                    ,you nees to choose both the store and the online one. If you do not fulfill your responseiblitiy
                </p>
              </div>
            </div>
        </div>
</section>
<script src="/js/uploadFile.js"></script>
