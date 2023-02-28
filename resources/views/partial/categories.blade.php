<div class="top-categories"> 
    <div class="container"> 
                <h2 class="recent-products-heading" style="margin-bottom:25px;">Product Categories</h2>
                <div class="categories_cat">
        
                    @foreach ($categories as $category)
                        <div class="cat-thumb">
                                <a href="{{  route('category.products', $category->slug) }}">
                                    <img src="{{ asset($category->thumbnail) }}" />
                                </a>    
                                <p>{{ Str::limit($category->name, 15) }}</p>

                        </div>
            
                    @endforeach
        
                    <div class="clearfix"></div>
        
                    {{-- <div class="view-all-btn">
                        <a href="{{ route('recent.items') }}">View All Items</a>
                    </div> --}}
                    
                </div>
    </div>
</div>