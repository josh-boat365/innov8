<x-base>
    <style>
        .bold {
            font-family: "Righteous", cursive;
        }
    </style>
    <section class="pt-0">
        <div class="container-fluid px-0">
            <div class="card h-100px h-md-200px rounded-0 profile-header">
                <img src="{{ asset('imgs/assets/profile_header.png') }}" alt="">
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="card" style="margin-top: 40px">
                        <div class="card-body">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th scope="col">
                                            <h4>#</h4>
                                        </th>
                                        <th scope="col">
                                            <h4>Registered Users</h4>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>


                                    {{-- @if (Auth::Users() == true) --}}
                                    @foreach ($users as $user)
                                        <tr>
                                            @if ($user->count() == 0)
                                                <td>
                                                    <h1>------There are no Registered Users------</h1>
                                                </td>
                                            @else
                                                <th scope="row">{{ $user->id }}</th>
                                                <td>
                                                    <div class="d-flex" style="gap: 12px">
                                                        <div class="profile-icon">
                                                            <img src="{{ asset('imgs/assets/title-logo.png') }}"
                                                                alt="">
                                                        </div>
                                                        <div class="user-info">
                                                            <h3>{{ $user->first_name }} {{ $user->last_name }}</h3>
                                                            <p><span class="bold">Email: </span> {{ $user->email }} |
                                                                <span class="bold">Contact: </span>
                                                                {{ $user->contact }}
                                                            </p>
                                                            <p><span class="bold">Address: </span>
                                                                {{ $user->address }} | <span class="bold">School:
                                                                </span>
                                                                {{ $user->institution }}</p>
                                                            <p><span class="bold">Mentee Message: </span>
                                                                {{ $user->mentee_message }}</p>
                                                            <p><span class="bold">Mentee Interests: </span>
                                                                {{ $user->interests }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                    {{-- @endif --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-base>
