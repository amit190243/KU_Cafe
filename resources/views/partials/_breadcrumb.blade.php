<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h3 class="text-themecolor">
            <i class="fa fa-braille" style="color:#1976d2"></i>&nbsp {{$breadcrumbs[0] ?? 'Dashboard'}}
        </h3>
    </div>
    <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
            @if (! empty($breadcrumbs))
                @foreach ($breadcrumbs as $label => $link)
                    @if (is_int($label) && ! is_int($link))
                        <li class="breadcrumb-item active">{{ $link }}</li>
                    @else
                        <li class="breadcrumb-item"><a href="{{ $link }}">{{ $label }}</a></li>
                    @endif
                @endforeach
            @endif
        </ol>
    </div>
</div>
