<div class="border border-gray-500 rounded-lg">


    @forelse ($tweets as $tweet)
        @include('_tweet')
     @empty
        <p class="p-4">No tweet yet</p>
    @endforelse

    {{ $tweets->links() }}


</div>
