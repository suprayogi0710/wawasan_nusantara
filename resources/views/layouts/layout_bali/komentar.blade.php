@inject('carbon', 'Carbon\Carbon')

<div class="row d-flex justify-content-center py-5">
    <div class="col-md-12 col-lg-12 col-xl-12">
        <div class="card">

            <div class="card-body p-4">
                <h4 class="text-center mb-4 pb-2">Komentar</h4>

                <div class="row">
                    <div class="col">

                        <!-- First level comment -->
                        @foreach ($province_comments->comments as $firstLevelComment)
                            <div class="d-flex flex-start">
                                <img class="rounded-circle shadow-1-strong me-3"
                                    src="https://ui-avatars.com/api/?name={{ urlencode($firstLevelComment->user_name) }}&background=random"
                                    alt="avatar" width="45" height="45" />
                                <div class="flex-grow-1 flex-shrink-1">
                                    <div>
                                        <div style="text-align: left">
                                            <h6 class="fw-bold text-primary mb-1">{{ $firstLevelComment->user_name }}</h6>
                                            <h6 class="text-muted mb-0">
                                                {{ $carbon::parse($firstLevelComment->created_at)->format('l, d M Y') }}
                                            </h6>

                                            <p id="{{ $firstLevelComment->id }}" class="small text-black-50 my-3" style="text-align: left;">
                                                {{ $firstLevelComment->comment }}
                                            </p>

                                            <div class="small d-flex justify-content-start">
                                                <a id="saveLikeDislike" data-type="like" data-province="{{ $firstLevelComment->province_id }}"
                                                    data-comment="{{ $firstLevelComment->id }}" class="d-flex align-items-center me-3" role="button">
                                                    <i id="{{ $firstLevelComment->id }}-like" class="far fa-thumbs-up me-2"></i>
                                                    <span class="{{ $firstLevelComment->id }}-like">
                                                        {{ $firstLevelComment->like }}
                                                    </span>
                                                </a>
                                                <a id="saveLikeDislike" data-type="dislike" data-province="{{ $firstLevelComment->province_id }}"
                                                    data-comment="{{ $firstLevelComment->id }}" class="d-flex align-items-center me-3"
                                                    role="button">
                                                    <i id="{{ $firstLevelComment->id }}-dislike" class="far fa-thumbs-down me-2"></i>
                                                    <span class="{{ $firstLevelComment->id }}-dislike">
                                                        {{ $firstLevelComment->dislike }}
                                                    </span>
                                                </a>
                                                <a class="d-flex align-items-center me-3 comment-button" role="button"
                                                    data-provinceid="{{ $firstLevelComment->province_id }}"
                                                    data-commentid="{{ $firstLevelComment->id }}">
                                                    <i class="far fa-comment-dots me-2"></i>
                                                    <p class="mb-0">Balas</p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                    <!--  Second level comment -->
                                    @foreach ($firstLevelComment->replies as $secondLevelComment)
                                        <div class="d-flex flex-start mt-4 mb-3">
                                            <img class="rounded-circle shadow-1-strong me-3"
                                                src="https://ui-avatars.com/api/?name={{ urlencode($secondLevelComment->user_name) }}&background=random"
                                                alt="avatar" width="45" height="45" />
                                            <div class="flex-grow-1 flex-shrink-1">
                                                <div>
                                                    <div style="text-align: left">
                                                        <h6 class="fw-bold text-primary mb-1">{{ $secondLevelComment->user_name }}</h6>
                                                        <h6 class="text-muted mb-0">
                                                            {{ $carbon::parse($secondLevelComment->created_at)->format('l, d M Y') }}
                                                        </h6>

                                                        <p id="{{ $secondLevelComment->id }}" class="small text-black-50 my-3"
                                                            style="text-align: left;">
                                                            {{ $secondLevelComment->comment }}
                                                        </p>

                                                        <div class="small d-flex justify-content-start">
                                                            <a id="saveLikeDislike" class="d-flex align-items-center me-3" data-type="like"
                                                                data-province="{{ $secondLevelComment->province_id }}"
                                                                data-comment="{{ $secondLevelComment->id }}" role="button">
                                                                <i id="{{ $secondLevelComment->id }}-like" class="far fa-thumbs-up me-2"></i>
                                                                <span class="{{ $secondLevelComment->id }}-like">
                                                                    {{ $secondLevelComment->like }}
                                                                </span>
                                                            </a>
                                                            <a id="saveLikeDislike" class="d-flex align-items-center me-3" data-type="dislike"
                                                                data-province="{{ $secondLevelComment->province_id }}"
                                                                data-comment="{{ $secondLevelComment->id }}" role="button">
                                                                <i id="{{ $secondLevelComment->id }}-dislike" class="far fa-thumbs-down me-2"></i>
                                                                <span class="{{ $secondLevelComment->id }}-dislike">
                                                                    {{ $secondLevelComment->dislike }}
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            @if (!$loop->last)
                                <hr class="mb-3" style="height: 1px;" />
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="card-footer py-3 border-0" style="background-color: #f8f9fa;">
                <form action="{{ url('comment/store') }}" method="post">
                    @csrf
                    <input type="number" name="province_id" hidden value="28">
                    <div class="d-flex flex-start mb-3 w-100">
                        <div class="form-outline w-100" style="text-align: left">
                            <input type="text" name="user_name" id="" class="form-control" placeholder="Nama">
                        </div>
                    </div>
                    <div class="d-flex flex-start w-100">
                        <div class="form-outline w-100" style="text-align: left">
                            <textarea name="comment" class="form-control" id="textAreaExample" rows="4" style="background: #fff;"
                                placeholder="Masukkan komentar disini..."></textarea>
                        </div>
                    </div>
                    <div class="float-end mt-2 pt-1">
                        <button type="submit" class="btn btn-primary btn-sm">Post comment</button>
                        <button type="button" class="btn btn-outline-primary btn-sm">Cancel</button>
                    </div>
                </form>

                <div class="reply" style="display: none">
                    <form class="mb-2" method="post" id="formReply" role="form">
                        <input type="number" name="province_id" hidden value="28">
                        <input type="number" id="commentId" name="comment_id" hidden>

                        <div class="d-flex flex-start mb-3 w-100">
                            <div class="form-outline w-100" style="text-align: left">
                                <input type="text" name="user_name_reply" id="user_name_reply" class="form-control" placeholder="Nama">
                                @error('user_name_reply')
                                    <h6 class="text-small text-danger">{{ $message }}</h6>
                                @enderror
                            </div>
                        </div>
                        <div class="d-flex flex-start w-100">
                            <div class="form-outline w-100" style="text-align: left">
                                <textarea name="reply_txt" class="form-control" id="textAreaExample" rows="4" style="background: #fff;"
                                    placeholder="Masukkan komentar disini..."></textarea>
                                @error('reply_txt')
                                    <h6 class="text-small text-danger">{{ $message }}</h6>
                                @enderror
                            </div>
                        </div>
                        <div class="float-end mt-2 pt-1">
                            <button type="submit" class="btn btn-primary btn-sm">Post comment</button>
                            <button type="button" class="btn btn-outline-primary btn-sm">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            var scrollpos = localStorage.getItem('scrollpos');
            if (scrollpos) window.scrollTo(0, scrollpos);
        });

        window.onbeforeunload = function(e) {
            localStorage.setItem('scrollpos', window.scrollY);
        };
    </script>

    <script>
        $(document).ready(function() {
            // Save Like Or Dislike
            $(document).on('click', '#saveLikeDislike', function() {
                var _province = $(this).data('province');
                var _type = $(this).data('type');
                var _comment = $(this).data('comment');
                var vm = $(this);
                // Run Ajax
                $.ajax({
                    url: "/comment/save-likedislike",
                    type: "post",
                    dataType: 'json',
                    data: {
                        province: _province,
                        comment: _comment,
                        type: _type,
                        _token: "{{ csrf_token() }}"
                    },
                    beforeSend: function() {
                        vm.addClass('disabled');
                    },
                    success: function(res) {
                        if (res.bool == true) {
                            vm.removeClass('disabled').addClass('active');
                            vm.removeAttr('id');
                            var _prevCount = $("." + _comment + "-" + _type).html();
                            _prevCount++;
                            $("." + _comment + "-" + _type).html(parseInt(_prevCount)).load();
                            $("#" + _comment + "-" + _type).removeClass('far').addClass('fas');
                        }
                    }
                });
            });
            // End

            $('.comment-button').click(function(e) {
                e.preventDefault();

                let [commentId, provinceId] = [$(this).attr('data-commentid'), $(this).attr('data-provinceid')];

                $('#province-id').val(provinceId);
                $('#commentId').val(commentId);

                $('.reply').insertAfter($(`#${commentId}`));
                $('.reply').toggle();
                $('textarea').val('');
            });

            $('#formReply').on('submit', function(e) {
                e.preventDefault();

                $.ajax({
                    type: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    },
                    url: `{{ url('comment/store-reply') }}`,
                    data: $(this).serialize(),
                    dataType: 'json',
                    success: function() {
                        $('textarea').val('');
                        $('#user_name_reply').val('');

                        window.location.reload();
                    },
                });
            });

        });
    </script>
@endpush
