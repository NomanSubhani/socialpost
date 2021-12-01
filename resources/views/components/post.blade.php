 <!-- He who is contented is rich. - Laozi -->
 @props(['post' => $post])
 <div class="mb-1">
     <a href="{{ route('users.posts', $post->user) }}" class="font-bold">{{ $post->user->name }}</a><span
         class="text-gray-600 text-sm ml-2">{{ $post->created_at->diffForHumans() }}</span>
     <p>{{ $post->body }}</p>

     @can('delete', $post)
         <form action="{{ route('posts.destroy', $post) }}" method="POST">
             @csrf
             @method('DELETE')
             <button type="submit" class="text-blue-600 mr-1">Delete</button>
         </form>
     @endcan

     <div class="flex items-center mb-2">
         @auth
             @if (!$post->likedBy(auth()->user()))
                 <form action="{{ route('posts.likes', $post) }}" method="POST">
                     @csrf
                     <button type="submit" class="text-blue-600 mr-1">like</button>
                 </form>
             @else
                 <form action="{{ route('posts.likes', $post) }}" method="POST">
                     @csrf
                     @method('DELETE')
                     <button type="submit" class="text-blue-600 mr-1">unlike</button>
                 </form>
             @endif
         @endauth
         <span>{{ $post->likes->count() }} {{ Str::plural('like', $post->likes->count()) }}</span>
     </div>
 </div>
