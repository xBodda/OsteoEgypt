<li class="items-center">
    <a href="{{ $url }}" class="text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray

    @if (strtolower(trim($__env->yieldContent('title'))) == strtolower($name))
        text-chillBlue
    @endif

    ">
        <i class="fas fa-{{ $icon }} mr-2 text-sm text-blueGray-300"></i>
        {{ $name }}
    </a>
</li>
