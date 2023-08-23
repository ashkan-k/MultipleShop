<div>
    <div class="overlay-search-box"></div>

    <main class="profile-user-page default">
        <div class="container">
            <div class="row">
                <div class="profile-page col-xl-9 col-lg-8 col-md-12 order-2">
                    <div class="mt-2">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="col-12">
                                    <h1 class="title-tab-content">{{ __('All tickets') }}</h1>
                                </div>
                                <div class="content-section default">

                                    <div class="d-flex align-items-center">
                                        <h1 class="title-tab-content">{{ __('Tickets sent') }}</h1>
                                        <form class="mr-auto position-relative">
                                            <label style="top: 50%;right: 0.2rem;transform: translate(-50%,-50%);"
                                                   class="position-absolute" for="search-ticket">
                                                <i class="fa fa-search"></i>
                                            </label>
                                            <input id="search-ticket" wire:model.debounce.300ms="search"
                                                   class="input-field text-right px-4 py-1" type="text"
                                                   placeholder="{{ __('Search ...') }}"/>
                                        </form>
                                    </div>

                                    <div class="mt-2 table-responsive">
                                        <table style="font-size: 0.8rem;"
                                               class="table table-order table-striped text-center">
                                            <thead class="thead-light">
                                            <tr>
                                                <th scope="col"># {{ __('Ticket number') }}</th>
                                                <th scope="col">{{ __('Title') }}</th>
                                                <th scope="col">{{ __('User') }}</th>
                                                <th scope="col">{{ __('Category') }}</th>
                                                <th scope="col">{{ __('Text') }}</th>
                                                <th scope="col">{{ __('Status') }}</th>
                                                <th scope="col">{{ __('Attached File') }}</th>
                                                <th scope="col">{{ __('Operation') }}</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach($objects as $item)
                                                <tr>
                                                    <th scope="row">{{ $item->ticket_number ?: '---' }}</th>
                                                    <th>{{ $item->title ?: '---'  }}</th>

                                                    <th>{{ $item->user ? $item->user->full_name() : '---'}}</th>

                                                    <th>{{ $item->category ? $item->category->title : '---' }}</th>

                                                    <th title="{{ $item->text }}">{{ \Illuminate\Support\Str::limit($item->text, 25) }}</th>

                                                    <th scope="col">
                                                        <span onclick="window.location.href = '{{ route('front.ticket-answers.show',  ['locale' => $lang, 'ticket' => $item->ticket_number]) }}'" style="cursor:pointer;"
                                                            class="badge badge-{{ $item->get_status_class() }}">{{ $item->get_status() }}</span>
                                                    </th>

                                                    <th scope="col">
                                                        @if($item->file)
                                                            <a href="{{ $item->file }}" target="_blank"
                                                               type="button"
                                                               class="btn btn-warning text-white">{{ __('Attached File') }}</a>
                                                        @else
                                                            {{ __('no file') }}
                                                        @endif
                                                    </th>
                                                    <th scope="col">
                                                        <div class="btn-group btn-group-sm flex-row-reverse"
                                                             role="group"
                                                             aria-label="Ticket operations">

                                                            <form
                                                                action="{{ route('front.tickets.destroy' , ['locale' => $lang, 'ticket' => $item->id]) }}"
                                                                id="delete_form_{{ $loop->index }}" method="post">
                                                                @csrf
                                                                @method('DELETE')

                                                            </form>

{{--                                                            <a onclick="return Delete('{{ $loop->index }}')"--}}
{{--                                                               type="button" class="btn btn-primary text-white">{{ __('Delete') }}</a>--}}

                                                            <a href="{{ route('front.ticket-answers.show',  ['locale' => $lang, 'ticket' => $item->ticket_number]) }}"
                                                               type="button"
                                                               class="btn btn-info text-white">{{ __('Show') }}</a>
                                                        </div>
                                                    </th>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>

                                    {{ $objects->onEachSide(3)->links('front.components.front_pagination') }}

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @include('front.components.dashboard_sidebar')

            </div>
        </div>
    </main>
</div>

@section('scripts')
    @include('dashboard.section.components.delete')
@endsection
