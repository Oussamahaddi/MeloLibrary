

let addMoreBtn = document.getElementById("addMember");
let showInp = document.getElementById("showInp");
let i = 2;

addMoreBtn.addEventListener('click', () => {
    let newInput = document.createElement('div');
    newInput.innerHTML = `
                        <div class="relative z-0 mt-4">
                            <input type="text" name="band_members[]" value="" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-yellow-600 appearance-none focus:outline-none focus:ring-0 focus:border-yellow-400 peer" placeholder=" "/>
                            <label for="band_members[]" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-yellow-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Band Member ${i++}</label>
                        </div>`;
    showInp.insertBefore(newInput, showInp.lastElementChild);
})