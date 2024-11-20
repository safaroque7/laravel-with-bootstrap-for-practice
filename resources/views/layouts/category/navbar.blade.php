<div class="row">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                @foreach ($allCategoriesCollection as $allCategoriesItem)
                    <li class="nav-item"> <a class="nav-link" aria-current="page" href="{{ route('category.show', $allCategoriesItem->id) }}">
                            {{ __($allCategoriesItem->name) }} </a> </li>
                @endforeach
            </ul>

        </div>
    </nav>
</div>