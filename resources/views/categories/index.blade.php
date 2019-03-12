@extends('layouts/app')

@section('content')
    <div class="container mt-3">
        <h1>Categories</h1>

        <ul>
            @foreach($categories as $category)
                <li>
                    <a href="/categories/{{ $category->id }}">
                        {{ $category->name }}
                    </a>

                    @if($category->categories()->exists())
                        <ul>
                            @foreach($category->categories()->orderBy('name')->get() as $subcategory)
                                <li>
                                    <a href="/categories/{{ $subcategory->id }}">
                                        {{ $subcategory->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @endif

                    <?php
                        /*
                        $subcategories = \App\Category::where('parent_id', $category->id)->orderBy('name')->get();
                        if (count($subcategories) > 0) {
                            ?>
                                <ul>
                                    @foreach($subcategories as $subcategory)
                                        <li>
                                            <a href="/categories/{{ $subcategory->id }}">
                                                {{ $subcategory->name }}
                                            </a>
                                        </li>
                                    @endforeach
                                </ul>
                            <?php
                        }
                        */
                    ?>

                </li>
            @endforeach
        </ul>
    </div>
@endsection
