<div class="col-xl-3 col-lg-4 d-none d-lg-block">
    <div class="vertical-menu mb-all-30">
        <nav>
            <ul class="vertical-menu-list">

                @foreach ($loai_sanpham as $sl)
                    <li>
                        <a href="{{ route('loaisanpham', $sl->id) }}">
                            <span>
                                <img width="20px" height="20px"
                                     src="{{ asset('source/image/type_product/' . $sl->image) }}" alt="menu-icon">
                            </span>
                            {{ $sl->name_type }}
                        </a>
                    </li>
            @endforeach
            <!-- More Categoies Start -->
                <li id="cate-toggle" class="category-menu v-cat-menu">
                    <ul>
                        <li class="has-sub"><a href="#">More</a>
                            <ul class="category-sub">
                                @foreach ($loai_sanpham_next as $next)
                                    <li>
                                        <a href="{{ route('loaisanpham', $next->id) }}">
                                            <span>
                                                <img width="20px" height="20px"
                                                     src="{{ asset('source/image/type_product/' . $next->image) }}"
                                                     alt="menu-icon">
                                            </span>
                                            {{ $next->name_type }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </li>
                    </ul>
                </li>
                <!-- More Categoies End -->
            </ul>
        </nav>
    </div>
</div>
