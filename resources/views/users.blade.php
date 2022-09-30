<x-base>

    <section class="pt-0">
        <div class="container-fluid px-0">
            <div class="card h-100px h-md-200px rounded-0 profile-header">
                <img src="{{ asset('imgs/assets/profile_header.png') }}" alt="">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card profile-card bg-transparent card-body pb-0 px-0 mt-2 mt-sm-0">
                        <div class="row d-sm-flex justify-sm-content-between mt-2 mt-md-0">
                            {{-- avatar --}}
                            <div class="col-auto">
                                <div class="avatar avatar-xxl position-relative mt-n3">
                                    <img class="avatar-img rounded-circle border border-white border-3 shadow"
                                        src="{{ asset('imgs/assets/title-logo.png') }}" alt="">
                                    <span class="badge text-bg-success rounded-pill">Pro</span>
                                </div>
                            </div>
                            {{-- profile-info --}}
                            <div class="col d-sm-flex justify-content-between align-items-center">
                                <div>
                                    <h1 class="my-1 fs-4">{{ $users->first_name }} {{ $users->last_name }}</h1>
                                    <ul>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                        <li></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-base>
