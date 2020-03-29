<div>
    <form class="w-full p-6" method="POST" action="{{ route('dates.update', $date->id) }}">
        @csrf
        @method('PUT')

        <div class="flex flex-wrap mb-6">
            <label for="category" class="block text-gray-700 text-sm font-bold mb-2">
                {{ __('Select a user') }}:
            </label>

            <select wire:model="user" name="category" class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-state">
                <option value=""></option>
                <option value="{{ Auth::user()->id }}">{{ Auth::user()->name }}</option>
            </select>

            @error('nacategoryme')
            <p class="text-red-500 text-xs italic mt-4">
                {{ $message }}
            </p>
            @enderror
        </div>

        <p>You would like <i>{{ $user }}</i> to volunteer on {{ \Carbon\Carbon::parse($date->datetime)->format('M d, Y g:i A') }}</p>

        <div class="flex flex-wrap items-center">
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-gray-100 font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                {{ __('Add') }}
            </button>
        </div>
    </form>
</div>
