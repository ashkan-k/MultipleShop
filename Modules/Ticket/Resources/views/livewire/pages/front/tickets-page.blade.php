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
                                        <h1 class="title-tab-content">تیکت های ارسال شده</h1>
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
                                                <th scope="col"># شماره تیکت</th>
                                                <th scope="col">عنوان</th>
                                                <th scope="col">کاربر</th>
                                                <th scope="col">دسته بندی</th>
                                                <th scope="col">متن</th>
                                                <th scope="col">وضعیت</th>
                                                <th scope="col">فایل ضمیمه</th>
                                                <th scope="col">عملیات</th>
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
                                                        <span
                                                            class="badge badge-{{ $item->get_status_class() }}">{{ $item->get_status() }}</span></h1>
                                                    </th>

                                                    <th scope="col">
                                                        @if($item->file)
                                                            <a href="{{ $item->file }}" target="_blank"
                                                               type="button"
                                                               class="btn btn-warning text-white">فایل ضمیمه</a>
                                                        @else
                                                            ندارد
                                                        @endif
                                                    </th>
                                                    <th scope="col">
                                                        <div class="btn-group btn-group-sm flex-row-reverse"
                                                             role="group"
                                                             aria-label="Ticket operations">

                                                            <form
                                                                action="{{ route('front.tickets.destroy' , $item->id) }}"
                                                                id="delete_form_{{ $loop->index }}" method="post">
                                                                @csrf
                                                                @method('DELETE')

                                                            </form>

                                                            <a onclick="return Delete('{{ $loop->index }}')"
                                                               type="button" class="btn btn-primary text-white">حذف</a>

                                                            <a href="{{ route('front.ticket-answers.show', $item->ticket_number) }}"
                                                               type="button"
                                                               class="btn btn-info text-white">نمایش</a>
                                                        </div>
                                                    </th>
                                                </tr>
                                            @endforeach

                                            </tbody>
                                        </table>
                                    </div>

                                    <ul class="mt-3 pagination d-flex justify-content-center">
                                        <li class="page-item"><a class="page-link" href="#">قبلی</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">بعدی</a></li>
                                    </ul>

                                    {{--                                    {{ $objects->onEachSide(3)->links('front.components.front_pagination') }}--}}

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
