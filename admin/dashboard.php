<?php 

include("../include/adminNavbar.php");


?>
    <!-- Table section -->
    <div class="content-container mt-10 ">
      <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <div class="flex items-center justify-between py-4 bg-white">
          <label for="table-search" class="sr-only">Search</label>
          <div class="relative">
            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
              <i class="fas fa-search text-gray-500"></i>
            </div>
            <input type="text" id="table-search-users"
              class="block p-2 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500"
              placeholder="Search for users">
          </div>
        </div>
        <table class="w-full text-sm text-left text-gray-500 ">
          <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3">
                ID
              </th>
              <th scope="col" class="px-6 py-3">
                Name
              </th>
              <th scope="col" class="px-6 py-3">
                Gmail
              </th>
              <th scope="col" class="px-6 py-3">
                Department
              </th>
              <th scope="col" class="px-6 py-3">
                Action
              </th>
              <th scope="col" class="px-6 py-3">

              </th>
            </tr>
          </thead>
          <tbody>
            <tr class="bg-white border-b hover:bg-gray-50">
              </th>
              <td class="px-6 py-4">
                <h1 class="font-semibold">1</h1>
              </td>

              <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap">
              <div class="">
              <div class="">Opurbo Paul</div>
              <div class="font-normal text-gray-500">Leacturer</div></div>
              </th>
              <td class="px-6 py-4">
                Opurbo*****@gmail.com
              </td>
              <td class="px-6 py-4">
                <div class="flex items-center">
                  CSE
                </div>
              </td>
              <td class="px-6 py-4">
                <!-- Modal toggle -->
                <a href="#" type="button" data-modal-target="editUserModal" data-modal-show="editUserModal"
                  class="font-medium text-blue-600 hover:underline">Edit user</a>
              </td>
              <td class="px-6 py-4">
                <i class="fas fa-trash-alt text-red-600"></i>
              </td>

            </tr>
            <!-- row2 -->
            <tr class="bg-white border-b hover:bg-gray-50">
              </th>
              <td class="px-6 py-4">
                <h1 class="font-semibold">2</h1>
              </td>

              <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap">

              <div class="">
              <div class="">Opurbo Paul</div>
              <div class="font-normal text-gray-500">Leacturer</div></div>
              </th>
              <td class="px-6 py-4">
                Opurbo*****@gmail.com
              </td>
              <td class="px-6 py-4">
                <div class="flex items-center">
                  CSE
                </div>
              </td>
              <td class="px-6 py-4">
                <!-- Modal toggle -->
                <a href="#" type="button" data-modal-target="editUserModal" data-modal-show="editUserModal"
                  class="font-medium text-blue-600 hover:underline">Edit user</a>
              </td>
              <td class="px-6 py-4">
                <i class="fas fa-trash-alt text-red-600"></i>
              </td>

            </tr>


            <!-- Rest of the table rows -->
          </tbody>
        </table>
        <!-- Edit user modal -->
        <div id="editUserModal" tabindex="-1" aria-hidden="true"
          class="fixed top-0 left-0 right-0 z-50 items-center justify-center hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-[calc(100%-1rem)] max-h-full">
          <!-- Modal content -->
          <form action="#" class="relative bg-white rounded-lg shadow">
            <!-- Modal header -->
            <div class="flex items-start justify-between p-4 border-b rounded-t">
              <h3 class="text-xl font-semibold text-gray-900">
                Edit user
              </h3>
              <button type="button"
                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ml-auto inline-flex justify-center items-center"
                data-modal-hide="editUserModal">
                <i class="fas fa-times"></i>
                <span class="sr-only">Close modal</span>
              </button>
            </div>
            <!-- Modal body -->
            <div class="p-6 space-y-6">
              <div class="grid grid-cols-6 gap-6">
                <div class="col-span-6 sm:col-span-3">
                  <label for="first-name" class="block mb-2 text-sm font-medium text-gray-900">Full Name</label>
                  <input type="text" name="first-name" id="first-name"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                    placeholder="" required="">
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
                  <input type="email" name="email" id="email"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                    placeholder="" required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="phone-number" class="block mb-2 text-sm font-medium text-gray-900">Position</label>
                  <input type="text" name="position" id="phone-number"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                    placeholder="" required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="department" class="block mb-2 text-sm font-medium text-gray-900">Department</label>
                  <input type="text" name="department" id="department"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                    placeholder="" required="">
                </div>

                <div class="col-span-6 sm:col-span-3">
                  <label for="current-password" class="block mb-2 text-sm font-medium text-gray-900">Current
                    Password</label>
                  <input type="password" name="current-password" id="current-password"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                    placeholder="" required="">
                </div>
                <div class="col-span-6 sm:col-span-3">
                  <label for="new-password" class="block mb-2 text-sm font-medium text-gray-900">New Password</label>
                  <input type="password" name="new-password" id="new-password"
                    class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-600 focus:border-blue-600 block w-full p-2.5"
                    placeholder="" required="">
                </div>
              </div>
            </div>
            <!-- Modal footer -->
            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b">
              <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">Save
                all</button>
            </div>
          </form>
        </div>
      </div>
    </div>


  </div>
  <script>
    // JavaScript code for handling modal functionality
    const editUserModal = document.getElementById('editUserModal');
    const editUserModalToggle = document.querySelectorAll('[data-modal-show="editUserModal"]');
    const editUserModalClose = document.querySelectorAll('[data-modal-hide="editUserModal"]');

    // Show modal
    editUserModalToggle.forEach((toggle) => {
      toggle.addEventListener('click', () => {
        editUserModal.classList.add('flex');
        editUserModal.classList.remove('hidden');
        document.body.classList.add('overflow-hidden');
      });
    });

    // Hide modal
    editUserModalClose.forEach((close) => {
      close.addEventListener('click', () => {
        editUserModal.classList.add('hidden');
        editUserModal.classList.remove('flex');
        document.body.classList.remove('overflow-hidden');
      });
    });
  </script>
</body>

</html>