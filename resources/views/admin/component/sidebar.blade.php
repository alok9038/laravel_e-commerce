<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            {{-- <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon"> --}}
        </div>
        <div>
            <h4 class="logo-text theme-color">{{ config('app.name') }}</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-toggle-right theme-color'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="javascript:;">
                <div class="parent-icon"><i class='bx bxs-dashboard'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li class="menu-label">Product Manager</li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bxs-category-alt' ></i>
                </div>
                <div class="menu-title">Cateogory</div>
            </a>
            <ul class="ps-3 border-0">
                <li> <a href="index.html"><i class='bx bx-radio-circle'></i>Category</a>
                </li>
                <li> <a href="index2.html"><i class='bx bx-radio-circle'></i>SubCategory</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bxs-shopping-bag'></i>
                </div>
                <div class="menu-title">Products</div>
            </a>
            <ul class="ps-3 border-0">
                <li> <a href="index.html"><i class='bx bx-radio-circle'></i>Add products</a>
                </li>
                <li> <a href="index2.html"><i class='bx bx-radio-circle'></i>Products list</a>
                </li>
            </ul>
        </li>

        <li class="menu-label">Orders Manager</li>

        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart'></i>
                </div>
                <div class="menu-title">Orders</div>
            </a>
            <ul>
                <li> <a href="ecommerce-products.html"><i class="bx bx-right-arrow-alt"></i>Products</a>
                </li>
                <li> <a href="ecommerce-products-details.html"><i class="bx bx-right-arrow-alt"></i>Product Details</a>
                </li>
                <li> <a href="ecommerce-add-new-products.html"><i class="bx bx-right-arrow-alt"></i>Add New Products</a>
                </li>
                <li> <a href="ecommerce-orders.html"><i class="bx bx-right-arrow-alt"></i>Orders</a>
                </li>
            </ul>
        </li>

    </ul>
    <!--end navigation-->
</div>
