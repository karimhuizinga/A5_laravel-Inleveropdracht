<h1>Search results</h1>

@if (count($pages)

    <h3>Pages:</h3>

    <ul>

        @foreach($pages as $page)

            <li>{!! link_to_route('pages.show', $page->title, $page->id) !!}</li>

        @endforeach

    </ul>

@endif

@if (count($posts)

    <h3>Posts:</h3>

    <ul>

        @foreach($posts as $post)

            <li>{!! link_to_route('posts.show', $post->title, $post->id) !!}</li>

        @endforeach

    </ul>

@endif
