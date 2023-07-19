<?php 

include("../include/adminNavbar.php");


?>

    <div class="content-container mt-10 ">
      <div class="container mx-auto max-w-full p-4">


        <!-- Notice Upload Form -->

        <div class="mb-3 flex flex-row">

          <form class="w-full mx-auto flex justify-center items-center my-20">

            <input
              class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
              type="file" id="formFile" />

            <button dir="rtl" class="bg-gray-600 text-white px-2 py-[6px] rounded-s-[3px]">
              Upload
            </button>
          </form>
        </div>

      </div>


      <!-- Previous Notices -->
      <div>
        <h2 class="text-2xl font-bold mb-2 text-center">Previous Notices</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 p-4">
          <div>
            <p class="text-black text-md text-center mt-2">Date: 2023-07-19</p>
            <img class="h-auto max-w-full rounded-lg"
            src="../img/n2.jpg" alt="">
          </div>
          <div>
            <p class="text-black text-md text-center mt-2">Date: 2023-07-19</p>
            <img class="h-auto max-w-full rounded-lg"
            src="../img/n1.jpg" alt="">
          </div>
          <div>
            <p class="text-black text-md text-center mt-2">Date: 2023-07-19</p>
            <img class="h-auto max-w-full rounded-lg"
            src="../img/n.jpg" alt="">
          </div>
          <div>
            <p class="text-black text-md text-center mt-2">Date: 2023-07-19</p>
            <img class="h-auto max-w-full rounded-lg"
            src="../img/n3.jpg" alt="">
          </div>
          <div>
            <p class="text-black text-md text-center mt-2">Date: 2023-07-19</p>
            <img class="h-auto max-w-full rounded-lg"
              src="../img/n.jpg" alt="">
          </div>

        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>