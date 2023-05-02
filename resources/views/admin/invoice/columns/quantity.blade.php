<ul class="list-none">
    @foreach ($menus as $menu)
        <li>{{ $menu->quantity }}x</li>
    @endforeach
</ul>
