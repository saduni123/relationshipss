<div class="offcanvas offcanvas-start" data-bs-backdrop="static"
     tabindex="-1" id="off-can"
     aria-labelledby="staticBackdropLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title fw-bold" id="staticBackdropLabel">{{config('app.name')}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <p class="mb-4 text-lighter align-center fw-bold"> Take Way
        <ul class="nav flex-column">
            <li class="nav-item mb-2">
                <a class="nav-link text-dark hover-bg-primary" href="#">
                    <i class="fa fa-list" aria-hidden="true"></i>products
                </a>
            </li>

            <li class="nav-item mb-2">
                <a class="nav-link text-dark hover-bg-primary" href="{{route('category.index')}}">
                    <i class="fa fa-list" aria-hidden="true"></i>Category
                </a>
            </li>

            <li class="nav-item mb-2">
                <a class="nav-link text-dark hover-bg-primary" href="{{route('store.index')}}">
                    <i class="fa fa-list" aria-hidden="true"></i>Store
                </a>
            </li>

            <li class="nav-item mb-2">
                <a class="nav-link text-dark hover-bg-primary" href="#">
                    <i class="fa fa-list" aria-hidden="true"></i>Supplier
                </a>
            </li>

        </ul>

        </div>
</div>
