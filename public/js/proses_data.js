var loading = `<div class="text-center">
<div class="pace-demo">
<div class="theme_squares"><div class="pace-progress" data-progress-text="60%" data-progress="60"></div><div class="pace_activity"></div></div>
</div>
</div>`;


function create_post(token, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Post Instagram');
    $(modal + 'Isi').html(loading);
    var public_path = $('#public_path').val(); /* di layouts */
    var act = public_path + '/post/create';
    $.post(act, {
            _token: token
        },
        function(data) {
            $(modal + 'Isi').html(data);
        });
}

function comment_post(token, id, modal) {
    $(modal).modal('show');
    $(modal + 'Label').html('Post Instagram');
    $(modal + 'Isi').html(loading);
    var public_path = $('#public_path').val(); /* di layouts */
    var act = public_path + '/post/comment';
    $.post(act, {
            _token: token,
            id: id
        },
        function(data) {
            $(modal + 'Isi').html(data);
        });
}

function like_post(token, id) {
    var public_path = $('#public_path').val(); /* di layouts */
    var act = public_path + '/post/like';
    $.post(act, {
            _token: token,
            id: id
        },
        function(data) {
            if (data == 'success like') {
                swal({
                        title: "Like Success",
                        text: "",
                        confirmButtonColor: "#4CAF50",
                        type: "success"
                    },
                    function(isConfirm) {
                        if (isConfirm) {
                            location.reload();
                        }
                    });
            } else {
                swal({
                        title: "Post di Unlike",
                        text: "",
                        confirmButtonColor: "#FF5722",
                        type: "success"
                    },
                    function(isConfirm) {
                        if (isConfirm) {
                            location.reload();
                        }
                    });
            }
        });
}