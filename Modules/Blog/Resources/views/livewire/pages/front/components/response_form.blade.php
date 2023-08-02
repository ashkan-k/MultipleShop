@auth
    <div class="collapse py-1" id="user_reply_{{ $comment->id }}">
        <h4>{{ __('In response to') }} {{ $comment->user->full_name ?: '---' }}</h4>

        <form class="collapse__content mt-1 px-5"
              wire:submit.prevent="SubmitNewComment({{ $comment->id }})">

            <div class="w-100">
                <div class="row">

                    <div class="col-12">
                        <div
                            class="form-account-title">{{ __('The title of your comment') }}
                            ({{ __('Required') }})
                        </div>
                        <div class="form-account-row">
                            <input class="input-field text-right"
                                   wire:model.defer="title"
                                   type="text" name="title" required
                                   placeholder="{{ __('Write the title of your comment') }}">

                            @error('title')
                            <span
                                class="text-danger text-wrap">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                </div>

                <div class="form-account-title">{{ __('The text of your comment') }}
                    ({{ __('Required') }})
                </div>
                <div class="form-account-row">
                            <textarea class="input-field text-right" rows="5"
                                      wire:model.defer="body"
                                      required name="body"
                                      placeholder="{{ __('Write your text') }}"></textarea>
                    @error('body')
                    <span
                        class="text-danger text-wrap">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <button type="submit" class="btn btn-primary btn-no-icon mb-5" style="
    float: left;
    margin-left: 5px;
">
                {{ __('Submit Comment') }}
            </button>
        </form>

    </div>
@endauth
