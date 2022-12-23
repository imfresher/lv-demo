@push('prescripts')
    <script>
        window.video = @json($item ?? []);
    </script>
@endpush

<x-frontend-layout>
    <div class="content container py-5">
        <h1>Video Player</h1>

        <div class="row">
            <div class="player__wrapper col-9">
                <div id="player"></div>
            </div>
            <div class="sidebar col-3">
                <div class="sidebar__wrapper">
                    <div class="sidebar__block chapter border bg-white">
                        <h4 class="chapter__heading px-3 pt-3 pb-1">Chapters</h4>
                        <div class="chapter__content">
                            <div class="chapter__item card" data-time="0">
                                <div class="d-flex p-3 align-items-center justify-content-between">
                                    <a href="javascript::void();" class="d-flex g-0">
                                        <div class="chapter__item__thumbnail me-3">
                                            <img src="{{ isset($item) ? $item['poster'] : 'https://via.placeholder.com/100x56.png' }}" alt="" class="img-fluid rounded-start" />
                                        </div>
                                        <div class="chapter__item__content card-body p-0">
                                            <h5 class="card-title">Chapter title 1</h5>
                                            <p class="card-text"><small class="badge bg-secondary">0:00</small></p>
                                        </div>
                                    </a>
                                </div>
                            </div>

                            <div class="chapter__item chapter__item__active card" data-time="20">
                                <div class="d-flex p-3 align-items-center justify-content-between">
                                    <a href="javascript::void();" class="d-flex g-0">
                                        <div class="chapter__item__thumbnail me-3">
                                            <img src="{{ isset($item) ? $item['poster'] : 'https://via.placeholder.com/100x56.png' }}" alt="" class="img-fluid rounded-start" />
                                        </div>
                                        <div class="chapter__item__content card-body p-0">
                                            <h5 class="card-title">Chapter title 02</h5>
                                            <p class="card-text"><small class="badge bg-secondary">0:20</small></p>
                                        </div>
                                    </a>

                                    <div class="chapter__item__actions">
                                        <a href="javascript::void();">
                                            <i class="bi bi-repeat"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="chapter__item card" data-time="30">
                                <div class="d-flex p-3 align-items-center justify-content-between">
                                    <a href="javascript::void();" class="d-flex g-0">
                                        <div class="chapter__item__thumbnail me-3">
                                            <img src="{{ isset($item) ? $item['poster'] : 'https://via.placeholder.com/100x56.png' }}" alt="" class="img-fluid rounded-start" />
                                        </div>
                                        <div class="chapter__item__content card-body p-0">
                                            <h5 class="card-title">Chapter title 3</h5>
                                            <p class="card-text"><small class="badge bg-secondary">0:30</small></p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sidebar__block block__playlist">

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-frontend-layout>
