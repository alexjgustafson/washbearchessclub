<a href="{{$url}}" class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow-sm hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{$headline}}</h5>
    @foreach($lines as $line)
        <p class="font-normal text-gray-700 dark:text-gray-400">{{$line}}</p>
    @endforeach
</a>
