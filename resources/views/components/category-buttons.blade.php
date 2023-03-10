@props(['post'])

<a href="/groups/{{ $post->group->slug  }}"
   class="px-3 py-1 border border-blue-300 rounded-full text-blue-300 text-xs uppercase font-semibold"
   style="font-size: 10px">{{ $post->group->name }}
</a>

<a href="/subjects/{{ $post->subject->slug  }}"
   class="px-3 py-1 border border-red-300 rounded-full text-red-300 text-xs uppercase font-semibold"
   style="font-size: 10px">{{ $post->subject->name }}
</a>
