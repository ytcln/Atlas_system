<x-sidebar>
<div class="board_area w-100 border m-auto d-flex">
  <div class="post_view w-75 mt-5">
    <p class="w-75 m-auto"></p>
    @foreach($posts as $post)
    <div class="post_area border w-75 m-auto p-3">
      <p class="contributor1"><span>{{ $post->user->over_name }}</span><span class="ml-3">{{ $post->user->under_name }}</span>さん</p>
      <p><a href="{{ route('post.detail', ['id' => $post->id]) }}"class="posts-title">{{ $post->post_title }}</a></p>
      @foreach($post->subCategories as $sub_category)
      <span class="subcategory-btn">{{ $sub_category->sub_category }}</span>
      @endforeach
      <div class="post_bottom_area d-flex" style="justify-content:right">
        <div class="d-flex post_status">
          <div class="mr-5">
            <i class="fa fa-comment"></i><span class="">{{ $post->postComments->count() }}</span>
          </div>
          <div>
            @if(Auth::user()->is_Like($post->id))
            <p class="m-0"><i class="fas fa-heart un_like_btn" post_id="{{ $post->id }}"></i><span class="like_counts{{ $post->id }}">
            {{ $like->likeCounts($post->id) }}</span></p>
            @else
            <p class="m-0"><i class="fas fa-heart like_btn" post_id="{{ $post->id }}"></i><span class="like_counts{{ $post->id }}">
            {{ $like->likeCounts($post->id) }}</span></p>
            @endif
          </div>
        </div>
      </div>
    </div>
    @endforeach
  </div>
  <div class="other_area w-25">
    <div class=" m-4">
      <div class="post-btn"><a href="{{ route('post.input') }}" class="post-btn2">投稿</a></div>
      <div class="search-btn">
        <input type="text" placeholder="キーワードを検索" name="keyword" class="search-btn2" form="postSearchRequest">
        <input type="submit" value="検索" class="search-btn3" form="postSearchRequest">
      </div>
      <input type="submit" name="like_posts" class="category_btn1" value="いいねした投稿" form="postSearchRequest">
      <input type="submit" name="my_posts" class="category_btn2" value="自分の投稿" form="postSearchRequest">
      <ul>
        <p class="category_search">カテゴリー検索</p>
        <div class="category_search_inner">
        @foreach($categories as $category)
        <li class="main_categories" category_id="{{ $category->id }}"><span>{{ $category->main_category }}<span></li>
        @foreach($category->subCategories as $sub_category)
        <li class="sub_categories" category_id="{{ $sub_category->id }}">
          <span><input type="submit" name="category_word" value="{{ $sub_category->sub_category }}" style="border:none;font-size:14px;" form="postSearchRequest"><span>
        </li>
        @endforeach
        @endforeach
        </div>
      </ul>
    </div>
  </div>
  <form action="{{ route('post.show') }}" method="get" id="postSearchRequest"></form>
</div>
</x-sidebar>
