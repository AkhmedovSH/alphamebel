<ul class="sidebar-menu">
    <li class="header">МЕНЮ АДМИН ПАНЕЛИ</li>
    <li class="treeview">
        <a href="/admin">
            <i class="fa fa-dashboard"></i> <span>Админ-панель</span>
        </a>
    </li>

    <li><a href="{{route('posts.index')}}"><i class="fa fa-newspaper-o"></i><span>Акции</span></a></li>
    <li><a href="{{route('slider.index')}}"><i class="fa fa-file-image-o"></i><span>Слайдер</span></a></li>
    <li><a href="{{route('categories.index')}}"><i class="fa fa-bars"></i><span>Категории</span></a></li>

    <li><a><i class="fa fa-product-hunt"></i> <span>Продукты</span>
        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{route('product.index')}}"><i class="fa fa-circle-o"></i><span>Продукты</span></a></li>
            <li><a href="{{route('filter.index')}}"><i class="fa fa-circle-o"></i><span>Фильтры</span></a></li>
            <li><a href="{{route('attribute.index')}}"><i class="fa fa-circle-o"></i><span>Атрибуты</span></a></li>
        </ul>
    </li>
</ul>