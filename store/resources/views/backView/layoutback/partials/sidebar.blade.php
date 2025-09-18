<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ route('dash') }}">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
            </li>

            <!-- Products Section -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('products.index') }}">
                    <i class="fas fa-box"></i> Products
                </a>
            </li>
            <li class="nav-item ms-3">
                <a class="nav-link" href="{{ route('products.add') }}">
                    <i class="fas fa-plus"></i> Add Product
                </a>
            </li>
            <li class="nav-item ms-3">
                <a class="nav-link" href="{{ route('category.add') }}">
                    <i class="fas fa-folder-plus"></i> Add Category
                </a>
            </li>

            <!-- Orders -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('orders.index') }}">
                    <i class="fas fa-shopping-cart"></i> Orders
                </a>
            </li>

            <!-- Customers -->
            <li class="nav-item">
                <a class="nav-link" href="{{ route('customers.index') }}">
                    <i class="fas fa-users"></i> Customers
                </a>
            </li>
        </ul>
    </div>
</nav>
