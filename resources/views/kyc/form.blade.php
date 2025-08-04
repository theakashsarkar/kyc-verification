<x-app-layout>

 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>NID Submission Form</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
</head>
<div class="bg-gradient-to-r from-blue-50 to-indigo-100 min-h-screen flex items-center justify-center px-4">

  <div class="w-full max-w-2xl bg-white p-8 rounded-lg shadow-lg">
    <h2 class="text-3xl font-semibold text-center text-indigo-600 mb-8">NID Submission Form</h2>
    
    <form class="space-y-6" method="post" action="{{route('kyc.submit')}}">
        @csrf

      <!-- Full Name -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">
          <i class="fas fa-user mr-1 text-indigo-500"></i> Full Name
        </label>
        <input type="text" name="full_name" placeholder="Your full name"
               class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-indigo-400" required>
      </div>

      <!-- NID Number -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">
          <i class="fas fa-id-card mr-1 text-indigo-500"></i> NID Number
        </label>
        <input type="text" name="nid_number" placeholder="Enter your NID number"
               class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-indigo-400" required>
      </div>

      <!-- Date of Birth -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">
          <i class="fas fa-calendar-alt mr-1 text-indigo-500"></i> Date of Birth
        </label>
        <input type="date" name="dob"
               class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-indigo-400" required>
      </div>

      <!-- Address -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">
          <i class="fas fa-map-marker-alt mr-1 text-indigo-500"></i> Address
        </label>
        <textarea name="address" rows="3" placeholder="Enter your full address"
                  class="w-full border border-gray-300 rounded-md p-3 focus:outline-none focus:ring-2 focus:ring-indigo-400" required></textarea>
      </div>

      <!-- NID Front Photo -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">
          <i class="fas fa-image mr-1 text-indigo-500"></i> NID Front Photo
        </label>
        <input type="file" name="nid_front" accept="image/*"
               class="w-full text-sm text-gray-500 file:bg-indigo-100 file:text-indigo-700 file:border-none file:px-4 file:py-2 file:rounded-md file:cursor-pointer" required>
      </div>

      <!-- NID Back Photo -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">
          <i class="fas fa-image mr-1 text-indigo-500"></i> NID Back Photo
        </label>
        <input type="file" name="nid_back" accept="image/*"
               class="w-full text-sm text-gray-500 file:bg-indigo-100 file:text-indigo-700 file:border-none file:px-4 file:py-2 file:rounded-md file:cursor-pointer" required>
      </div>

      <!-- Selfie -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">
          <i class="fas fa-camera mr-1 text-indigo-500"></i> Selfie
        </label>
        <input type="file" name="selfie" accept="image/*"
               class="w-full text-sm text-gray-500 file:bg-indigo-100 file:text-indigo-700 file:border-none file:px-4 file:py-2 file:rounded-md file:cursor-pointer" required>
      </div>

      <!-- Submit Button -->
      <div class="pt-4">
        <button type="submit"
                class="w-full bg-indigo-600 text-white font-medium py-3 rounded-md hover:bg-indigo-700 transition duration-300">
          <i class="fas fa-paper-plane mr-1"></i> Submit Form
        </button>
      </div>

    </form>
  </div>

</div>
</html>

  
</x-app-layout>
