<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>DIU ROUTINE</title>
  <style>
    .flex-container {
      display: flex;
    }

    .nav-container {
      flex: 0 0 200px;
    }

    .content-container {
      flex: 1;
      margin-left: 40px;
    }
  </style>
</head>

<body class="bg-gray-100 ">
  <div class="container mx-auto flex-container ">
    <!-- Sidenav -->
    <div class="nav-container">
      <nav
        class="fixed left-0 top-0 z-[1035] h-full w-60 -translate-x-full overflow-hidden bg-white shadow-[0_4px_12px_0_rgba(0,0,0,0.07),_0_2px_4px_rgba(0,0,0,0.05)] data-[te-sidenav-hidden='false']:translate-x-0 dark:bg-zinc-800"
        data-te-sidenav-init data-te-sidenav-hidden="false" data-te-sidenav-position="absolute"
        data-te-sidenav-accordion="true">
        <!-- Navbar content -->
        <a href="#"
          class="mb-3 flex items-center justify-center border-b-2 border-solid border-gray-100 py-6  outline-none">
          <img id="logo" class="mr-6 w-12" src="../logo.png" alt="Logo" draggable="false" />
          <span class="text-white mr-8">DIU ROUTINE</span>
        </a>
        <ul class="relative m-0 list-none px-[0.2rem] pb-12">
          <li class="relative">
            <a href="../teacher/dashboard.php"
              class="flex cursor-pointer items-center truncate rounded-[5px] px-6 py-[0.45rem] text-[0.85rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
              data-te-sidenav-link-ref>
              <span class="mr-4 h-3.5 w-3.5 text-gray-400 dark:text-gray-300">
                <i class="fas fa-home fa-fw"></i>
              </span>
              <span>Routine</span>
            </a>
          </li>
          <li class="relative pt-4">

            <a href="../teacher/profile.php"
              class="flex cursor-pointer items-center truncate rounded-[5px] px-6 py-[0.45rem] text-[0.85rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
              data-te-sidenav-link-ref>
              <span class="mr-4 h-5 w-5 text-gray-400 dark:text-gray-300">
                <i class="fas fa-user-plus"></i>
              </span>
              <span>Profile</span>
            </a>

          </li>

          <li class="relative pt-2">
            <a href="../teacher/notice.php"
              class="flex cursor-pointer items-center truncate rounded-[5px] px-6 py-[0.45rem] text-[0.85rem] text-gray-600 outline-none transition duration-300 ease-linear hover:bg-slate-50 hover:text-inherit hover:outline-none focus:bg-slate-50 focus:text-inherit focus:outline-none active:bg-slate-50 active:text-inherit active:outline-none data-[te-sidenav-state-active]:text-inherit data-[te-sidenav-state-focus]:outline-none motion-reduce:transition-none dark:text-gray-300 dark:hover:bg-white/10 dark:focus:bg-white/10 dark:active:bg-white/10"
              data-te-sidenav-link-ref>
              <span class="mr-4 h-5 w-5 text-gray-400 dark:text-gray-300">
                <i class="fas fa-exclamation-circle"></i>
              </span>
              <span>Notice</span>
            </a>

          </li>

        </ul>
      </nav>
    </div>