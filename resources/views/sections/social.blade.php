@foreach($social as $i => $opt)
    <li><a href="{{ $opt['url'] }}" target="_blank" class="{{ $i }}"><i class="fab {{ $opt['icon'] }}"></i></a></li>
@endforeach