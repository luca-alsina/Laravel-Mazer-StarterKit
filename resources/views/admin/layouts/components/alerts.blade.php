@if($errors->any())
    @foreach ($errors->all() as $error)
        <div class="position-fixed" style="right: 1.2%; top: 1.5%">
            <div class="alert alert-light-danger color-danger alert-dismissible">
                <i class="bi bi-exclamation-circle"></i> {{ $error }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> {{-- TODO Add translation to lang files --}}
            </div>
        </div>
    @endforeach
@endif

@if($successes->any())
    @foreach ($successes->all() as $success)
        <div class="position-fixed" style="right: 1.2%; top: 1.5%">
            <div class="alert alert-light-success color-success alert-dismissible">
                <i class="bi bi-check-circle"></i> {{ $success }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> {{-- TODO Add translation to lang files --}}
            </div>
        </div>
    @endforeach
@endif

@if($warnings->any())
    @foreach ($warnings->all() as $warning)
        <div class="position-fixed" style="right: 1.2%; top: 1.5%">
            <div class="alert alert-light-warning color-warning alert-dismissible">
                <i class="bi bi-exclamation-triangle"></i> {{ $warning }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> {{-- TODO Add translation to lang files --}}
            </div>
        </div>
    @endforeach
@endif

@if($infos->any())
    @foreach ($infos->all() as $info)
        <div class="position-fixed" style="right: 1.2%; top: 1.5%">
            <div class="alert alert-light-info color-info alert-dismissible">
                <i class="bi bi-info-circle"></i> {{ $info }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button> {{-- TODO Add translation to lang files --}}
            </div>
        </div>
    @endforeach
@endif
