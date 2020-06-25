<ul class="sidebar-menu">
    <li class="header">МЕНЮ АДМИН ПАНЕЛИ</li>
    <li class="treeview">
        <a href="/admin">
            <i class="fa fa-dashboard"></i> <span>Админ-панель</span>
        </a>
    </li>

    <li><a href="{{route('posts.index')}}"><i class="fa fa-sticky-note-o"></i><span>Посты</span></a></li>
    <li><a href="{{route('slider.index')}}"><i class="fa fa-sticky-note-o"></i><span>Слайдер</span></a></li>
    <li><a href="{{route('categories.index')}}"><i class="fa fa-sticky-note-o"></i><span>Категории</span></a></li>

    <li><a><i class="fa fa-video-camera"></i> <span>Продукты</span>
        <span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>
        </a>
        <ul class="treeview-menu">
            <li><a href="{{route('product.index')}}"><i class="fa fa-question"></i><span>Кровать</span></a></li>
            <li><a href="{{route('product.index')}}"><i class="fa fa-question"></i><span>Категории FAQ</span></a></li>
        </ul>
    </li>
</ul>