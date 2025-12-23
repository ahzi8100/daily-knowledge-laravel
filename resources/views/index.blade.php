<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @PwaHead <!-- Add this directive to include the PWA meta tags -->
    <title>Daily Learn Information</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">

    <div
        class="max-w-md w-full bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">

        <div class="relative h-64 w-full">
            <img src="{{ $data->thumbnail ? $data->thumbnail->source : null }}" alt="Topic Image"
                class="absolute inset-0 w-full h-full object-cover">
            <div
                class="absolute top-4 right-4 bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-sm">
                Daily Fact
            </div>
        </div>

        <div class="p-6">
            <h2 class="text-2xl font-bold text-gray-800 mb-2 leading-tight">
                {{ $data->title }}
            </h2>

            <p class="text-gray-600 text-sm mb-6 leading-relaxed">
                {{ $data->extract }}
            </p>

            <a href="{{ $data->content_urls->desktop->page }}" target="_blank"
                class="block w-full text-center bg-gray-900 hover:bg-gray-800 text-white font-semibold py-3 px-4 rounded-lg transition-colors duration-200 group">
                Baca Selengkapnya
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4 inline-block ml-1 group-hover:translate-x-1 transition-transform" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3" />
                </svg>
            </a>
            <button
                class="flex w-full justify-center items-center bg-gray-900 hover:bg-gray-800 text-white font-semibold py-3 px-4 mt-1 rounded-lg transition-colors duration-200 group"
                onclick="window.location.reload()">Reload Page
                <svg xmlns="http://www.w3.org/2000/svg"
                    class="h-4 w-4 inline-block ml-1 group-hover:translate-x-1 transition-transform" fill="none"
                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M16.023 9.348h4.992v-.001M2.985 19.644v-4.992m0 0h4.992m-4.993 0 3.181 3.183a8.25 8.25 0 0 0 13.803-3.7M4.031 9.865a8.25 8.25 0 0 1 13.803-3.7l3.181 3.182m0-4.991v4.99" />
                </svg>
            </button>
        </div>
    </div>

    @RegisterServiceWorkerScript <!-- This registers the service worker -->
</body>

</html>
