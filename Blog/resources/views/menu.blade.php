<!-- resources/views/layouts/menu.blade.php -->

<ul>
    @foreach($menuItems as $menuItem)
        <li>
            <a href="{{ $menuItem['url'] }}">{{ $menuItem['text'] }}</a>
            @if($menuItem['hasButton'])
                <button>{{ $menuItem['buttonText'] }}</button>
            @endif
        </li>
    @endforeach
</ul>