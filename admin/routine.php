<?php 

include("../include/adminNavbar.php");


?>
    <div class="content-container mt-10 ">


      <div class="container mx-auto max-w-md p-4">
        <h1 class="text-3xl font-bold mb-4 text-center">Upload Routine</h1>
        <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="teacherName">Teacher Name:</label>
            <select id="teacherName" name="teacherName"
              class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-4 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
              <!-- Replace the options below with actual teacher names -->
              <option value="">Select Teacher Name</option>
              <option value="teacher1">Teacher 1</option>
              <option value="teacher2">Teacher 2</option>
              <option value="teacher3">Teacher 3</option>
            </select>
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="department">Department:</label>
            <select id="department" name="department"
              class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-4 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
              <!-- Replace the options below with actual department names -->
              <option value="">Select Department</option>
              <option value="dept1">Department 1</option>
              <option value="dept2">Department 2</option>
              <option value="dept3">Department 3</option>
            </select>
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="day">Day:</label>
            <select id="day" name="day"
              class="block appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-4 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
              <!-- Replace the options below with actual day names -->
              <option value="">Select Day</option>
              <option value="monday">Monday</option>
              <option value="tuesday">Tuesday</option>
              <option value="wednesday">Wednesday</option>
              <option value="thursday">Thursday</option>
              <option value="friday">Friday</option>
            </select>
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="time">Time:</label>
            <input id="time" name="time" type="text" placeholder="Enter Time"
              class="appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-4 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="courseName">Course Name:</label>
            <input id="courseName" name="courseName" type="text" placeholder="Enter Course Name"
              class="appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-4 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="courseCode">Course Code:</label>
            <input id="courseCode" name="courseCode" type="text" placeholder="Enter Course Code"
              class="appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-4 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
          </div>
          <div class="mb-4">
            <label class="block text-gray-700 text-sm font-bold mb-2" for="roomNo">Room No:</label>
            <input id="roomNo" name="roomNo" type="text" placeholder="Enter Room No"
              class="appearance-none w-full bg-white border border-gray-300 hover:border-gray-400 px-4 py-2 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
          </div>
          <div class="flex items-center justify-center">
            <button type="submit" class="bg-gradient-to-r from-green-600 to-blue-600 text-white rounded-md px-2 py-1">
              Submit
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>