

    <!-- Status Examples (Comment out others as needed) -->
    <!-- Verified -->
    <!--
    <div class="bg-gray-50 border-l-4 border-green-500 p-4 rounded-md shadow-sm mt-4">
      <div class="flex justify-between items-center mb-2">
        <div>
          <h3 class="text-lg font-semibold text-gray-800">KYC Status</h3>
          <p class="text-sm text-gray-600">Name: <span class="font-medium">Amina Khatun</span></p>
          <p class="text-sm text-gray-600">Tracking ID: <span class="font-mono">KYC98765432</span></p>
        </div>
        <span class="inline-block px-3 py-1 text-sm font-medium rounded-full bg-green-100 text-green-800">
          ✅ Verified
        </span>
      </div>
      <p class="text-sm text-gray-500">
        Verified on: <span class="font-medium">August 2, 2025</span>
      </p>
    </div>
    -->

    <!-- Rejected -->
    <!--
    <div class="bg-gray-50 border-l-4 border-red-500 p-4 rounded-md shadow-sm mt-4">
      <div class="flex justify-between items-center mb-2">
        <div>
          <h3 class="text-lg font-semibold text-gray-800">KYC Status</h3>
          <p class="text-sm text-gray-600">Name: <span class="font-medium">Sajjad Hossain</span></p>
          <p class="text-sm text-gray-600">Tracking ID: <span class="font-mono">KYC55555555</span></p>
        </div>
        <span class="inline-block px-3 py-1 text-sm font-medium rounded-full bg-red-100 text-red-800">
          ❌ Rejected
        </span>
      </div>
      <p class="text-sm text-gray-500">
        Reason: <span class="font-medium">Document mismatch</span>
      </p>
    </div>
    -->
<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>KYC Status with Document View</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
</head>
<div class="bg-gray-100 min-h-screen flex items-center justify-center p-4">

  <div class="w-full max-w-3xl bg-white p-8 rounded-xl shadow-lg">
    <h2 class="text-3xl font-bold text-center text-indigo-600 mb-6">KYC Status Tracker</h2>

    <!-- Search Box -->
    <form class="flex items-center space-x-3 mb-6">
      <input
        type="text"
        placeholder="Enter NID or Tracking ID"
        class="flex-grow border border-gray-300 rounded-md px-4 py-2 focus:outline-none focus:ring-2 focus:ring-indigo-400"
        required
      />
      <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded-md hover:bg-indigo-700 transition">
        <i class="fas fa-search"></i>
      </button>
    </form>

    <!-- KYC Info -->
    <div class="bg-gray-50 border-l-4 border-green-500 p-4 rounded-md shadow-sm mb-6">
      <div class="flex justify-between items-center mb-2">
        <div>
          <h3 class="text-lg font-semibold text-gray-800">{{ $kycView->status }}</h3>
          <p class="text-sm text-gray-600">Name: <span class="font-medium">{{ $kycView->full_name }}</span></p>
{{--          <p class="text-sm text-gray-600">Tracking ID: <span class="font-mono">KYC12345678</span></p>--}}
        </div>
          @if($kycView === \App\Enums\Status::Approved)
              <span class="inline-block px-3 py-1 text-sm font-medium rounded-full bg-green-100 text-green-800">
                 ✅ Verified
              </span>
          @endif

      </div>
        <p class="text-sm text-gray-500">
            Verified on: <span class="font-medium">August 2, 2025</span>
        </p>
    </div>

    <!-- Document Previews -->
    <h3 class="text-lg font-semibold text-gray-700 mb-3">Submitted Documents</h3>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">

      <!-- NID Front -->
      <div class="bg-white border rounded-md overflow-hidden shadow">
        <div class="p-2 bg-gray-100 text-center font-medium text-sm text-gray-600">NID Front</div>
        <img src="{{ asset('storage/' . $kycView->nid_front) }}" alt="NID Front" class="w-full h-48 object-cover" />
        <div class="p-2 text-center">
          <a href="#" class="text-indigo-600 text-sm hover:underline"><i class="fas fa-eye mr-1"></i>View Full</a>
        </div>
      </div>

      <!-- NID Back -->
      <div class="bg-white border rounded-md overflow-hidden shadow">
        <div class="p-2 bg-gray-100 text-center font-medium text-sm text-gray-600">NID Back</div>
        <img src="{{ asset('storage/' . $kycView->nid_back) }}" alt="NID Back" class="w-full h-48 object-cover" />
        <div class="p-2 text-center">
          <a href="#" class="text-indigo-600 text-sm hover:underline"><i class="fas fa-eye mr-1"></i>View Full</a>
        </div>
      </div>

      <!-- Selfie -->
      <div class="bg-white border rounded-md overflow-hidden shadow">
        <div class="p-2 bg-gray-100 text-center font-medium text-sm text-gray-600">Selfie</div>
        <img src="{{ asset('storage/' . $kycView->selfie) }}" alt="Selfie" class="w-full h-48 object-cover" />
        <div class="p-2 text-center">
          <a href="#" class="text-indigo-600 text-sm hover:underline"><i class="fas fa-eye mr-1"></i>View Full</a>
        </div>
      </div>

    </div>

  </div>

</div>
</html>
</x-app-layout>


