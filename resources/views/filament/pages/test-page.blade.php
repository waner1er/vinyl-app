<x-filament-panels::page>
    <ul>
        @foreach ($tests as $vinyl)
            <li> {{ $vinyl->title }}</li>
            <li>{{ $vinyl->cutting->title }}</li>
            <li>{{ $vinyl->black_vinyl->title }}</li>
            <li> {{ $vinyl->color_vinyl_records_surcharge->title }}</li>
            <li>{{ $vinyl->picture_disc->title }}</li>
            <li>{{ $vinyl->print_label->title }}</li>
            <li>{{ $vinyl->test_pressing->title }}</li>
        @endforeach
    </ul>
</x-filament-panels::page>
