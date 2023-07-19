<?php
include("../database/config.php");

include("../database/adminLogin.php");
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Document</title>
</head>

<body>
  <div class="min-h-screen bg-gray-100 py-6 flex flex-col justify-center sm:py-12">
    <div class="relative py-3 sm:max-w-xl sm:mx-auto">
      <div
        class="absolute inset-0 bg-gradient-to-r from-blue-300 to-green-600 shadow-lg transform -skew-y-6 sm:skew-y-0 sm:-rotate-6 sm:rounded-3xl">
      </div>
      <div class="relative px-4 py-10 bg-white shadow-lg sm:rounded-3xl sm:p-20">
        <div class="max-w-md mx-auto">
          <div>
            <h1 class="text-2xl font-semibold px-16">
              Login To DIU Routine (Admin)
              
            </h1>
         <p class="text-center text-red"><?php include("../database/error.php")?></p>
          </div>
          <div class="divide-y divide-gray-200">
            <form method="POST">
              <div class="py-8 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                <div class="relative">
                  <input autocomplete="off" id="email" name="admin_email" type="text" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900
                  focus:outline-none focus:borer-rose-600" placeholder="Email address" />
                  <label for="adminemail"
                    class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                    Email Address
                  </label>
                </div>
                <div class="relative">
                  <input autocomplete="off" id="password" name="admin_password" type="password" class="peer placeholder-transparent h-10 w-full border-b-2 border-gray-300 text-gray-900
                  focus:outline-none focus:borer-rose-600" placeholder="Password" />
                  <label for="password"
                    class="absolute left-0 -top-3.5 text-gray-600 text-sm peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-440 peer-placeholder-shown:top-2 transition-all peer-focus:-top-3.5 peer-focus:text-gray-600 peer-focus:text-sm">
                    Password
                  </label>
                </div>
        
                <div class="relative">
                  <button class="bg-gradient-to-r from-green-300 to-blue-600 text-white rounded-md px-2 py-1"
                    type="submit" value="Login" name="admin_login">
                    <input type="submit" value="login" name="admin_login" />
                  </button>
                </div>
              </div>
            </form>
            <a href="../teacher/login.php" className="text-black hover:text-green-600 text-sm font-mono">
              Login as Teacher
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>