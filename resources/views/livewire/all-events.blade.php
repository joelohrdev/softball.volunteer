<div class="grid grid-cols-3 gap-4">
    @foreach($events as $e)
        <div class="bg-white px-8 py-6 mb-5 mx-2 rounded-lg shadow-lg">
            <div class="flex justify-between items-center mb-5">
                <span class="text-lg text-gray-700 font-medium">{{ $e->name }}</span>
                @if(!empty($e->category))
                    @if($e->category->name == 'Fields')
                        <span class="px-2 py-1 bg-green-600 text-xs text-green-100 rounded">
                                    {{ $e->category->name }}
                                </span>
                    @else
                        <span class="px-2 py-1 bg-purple-600 text-xs text-green-100 rounded">
                                    {{ $e->category->name }}
                                </span>
                    @endif
                @endif
            </div>
            <hr>
            @if($e->dates->count())
                @foreach($e->dates as $d)
                    @if($d->user_id == null)
                        <div class="flex justify-between items-center mt-4">
                            <span class="font-light text-sm text-gray-600">{{ \Carbon\Carbon::parse($d->datetime)->format('M d, Y g:i A') }}</span>
                            <a href="/dates/{{ $d->id }}/edit" class="bg-blue-800 text-xs text-white hover:bg-blue-900 py-2 px-4 rounded">Sign Up</a>
                        </div>
                    @endif
                @endforeach
            @else
                <div class="flex justify-center items-center mt-4">
                    <p>No dates available.</p>
                </div>
            @endif
        </div>
    @endforeach
</div>
