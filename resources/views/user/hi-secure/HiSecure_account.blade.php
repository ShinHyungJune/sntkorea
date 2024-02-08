<!DOCTYPE html>
<html lang="ko">
@include('user.components.head')
<body>
<div id="wrap">

    <!-- 상단 헤더 -->
    <header id="header">
        @include('user.components.header')
    </header>
    <!-- //상단 헤더 -->

    <!-- 좌측 메뉴 -->
    <div id="gnb">
        @include('user.components.gnb')
    </div>
    <!-- //좌측 메뉴 -->

    <!-- 대시보드 -->
    <div class="dashboard dashboard-detail">
        <div class="dashboard-wrap row-group">

            <div class="dashboard-detail-title-wrap col-group">
                {{--                <button onclick="{{ route('hi-secure.index') }}" class="prev-btn">--}}
                {{--                    <i class="xi-arrow-left"></i>--}}
                {{--                </button>--}}
                <h2 class="dashboard-detail-title">
                    Hi-Secure Account
                </h2>
            </div>

            <div class="account-table-container">
                <div class="account-table-title-wrap">
                    <h3 class="account-table-title">
                        Users
                    </h3>
                    <div class="account-top-btn-wrap">
                        <a href="{{ route('hi-secure.create') }}" class="account-top-btn">
                            Add
                        </a>
                        <form action="" id="delete">
                            @csrf
                            @method('DELETE')
                            <button class="account-top-btn" type="button" onclick="showModal()">
                                Delete
                            </button>
                        </form>
                        <button href="" class="account-top-btn" id="modify">
                            Modify
                        </button>
                        <a href="{{ route('hi-secure.global-setting') }}" class="account-top-btn">
                            Global Setting
                        </a>
                    </div>
                </div>

                <div class="account-table-wrap">
                    <table>
                        <colgroup>
                            <col width="48px">
                        </colgroup>
                        <thead>
                        <th>
                            <label for="check_all" class="check-label">
                                <input type="checkbox" class="check-input" id="check_all">
                                <div class="check-item col-group">
                                    <i class="xi-check"></i>
                                </div>
                            </label>
                        </th>
                        <th>
                            ID
                        </th>
                        <th>
                            User Name
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Group
                        </th>
                        <th>
                            Authority
                        </th>
                        <th>
                            Active/Paused
                        </th>
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>
                                    <label for="{{ $user->id }}" class="check-label">
                                        <input type="checkbox" class="check-input" id="{{ $user->id }}">
                                        <div class="check-item col-group">
                                            <i class="xi-check"></i>
                                        </div>
                                    </label>
                                </td>
                                <td>
                                    {{ $user->ids }}
                                </td>
                                <td>
                                    {{ $user->name }}
                                </td>
                                <td>
                                    {{ $user->email }}
                                </td>
                                <td>
                                    {{ $user->group ? $user->group->name : "" }}
                                </td>
                                <td>
                                    {{ $user->authority ? $user->authority->name : "" }}
                                </td>
                                <td>
                                    <form action="" method="post" id="switchForm">
                                        @csrf
                                        @method('PATCH')
                                        <label for="switch_{{ $user->id }}" class="switch-wrap">
                                            <input type="checkbox" class="switch-input" id="switch_{{ $user->id }}"
                                                   @if($user->is_active) checked @endif>
                                            <div class="switch-icon">
                                                <p class="paused-txt">
                                                    Paused
                                                </p>
                                                <p class="active-txt">
                                                    Active
                                                </p>
                                                <div class="switch-core"></div>
                                            </div>
                                        </label>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- 대시보드 -->

</div>
<!-- alert 팝업 -->
<div class="modal-container modal-alert" style="display: none;">
    <div class="modal-wrap modal-alert-wrap warning">

        <div class="modal-alert-txt-wrap">
            <div class="modal-alert-title-wrap row-group">
                <i class="xi-warning icon"></i>
                <p class="modal-alert-title">
                    Warning
                </p>
            </div>

            <p class="modal-alert-txt">
                If deleted, the data cannot be recovered. <br>
                Are you sure you want to delete?
            </p>
        </div>

        <div class="dashboard-form-btn-wrap col-group">
            <button class="dashboard-form-btn submit-btn" onclick="hiSecureDelete()">
                Delete
            </button>
            <button class="dashboard-form-btn cancel-btn" onclick="hideModal()">
                Cancel
            </button>
        </div>
    </div>
</div>
{{--<script>--}}
{{--    // let domain = "http://localhost:90";--}}
{{--    let domain = "http://hi-secure.ufeed.co.kr";--}}

{{--    function store() {--}}
{{--        let form = {--}}
{{--            ids: $("#ids").val(),--}}
{{--            password: $("#password").val(),--}}
{{--            password_confirmation: $("#password_confirmation").val(),--}}
{{--            authority: 1,--}}
{{--            email: $("#email").val(),--}}
{{--        };--}}

{{--        $(".error").text("");--}}

{{--        axios.post(domain + "/api/users", form)--}}
{{--            .then(response => {--}}
{{--                alert("Processed Successfully");--}}
{{--            }).catch(error => {--}}
{{--            if (error.response.data.errors)--}}
{{--                Object.entries(error.response.data.errors).map(error => {--}}
{{--                    $(`#error-${error[0]}`).text(error[1]);--}}
{{--                })--}}
{{--        })--}}
{{--    }--}}

{{--</script>--}}
<script src="{{ asset('js/utility.js') }}"></script>
<script>
    document.getElementById('modify').addEventListener('click', function () {
        let checkedCheckbox = document.querySelector('.check-input:checked');
        if (checkedCheckbox) {
            window.location.href = `{{ url('hi-secure') }}/${checkedCheckbox.id}/edit`;
        }
    });
</script>
<script>
    function hiSecureDelete() {
        let deleteForm = document.getElementById('delete');
        // deleteForm.addEventListener('click', function () {
        let checkedCheckbox = document.querySelectorAll('.check-input:checked');
        let deleteId = Array.from(checkedCheckbox).map(checkbox => checkbox.id);

        deleteId.forEach(id => {
            let deleteInput = document.createElement('input');
            deleteInput.setAttribute('type', 'hidden');
            deleteInput.setAttribute('name', 'id[]');
            deleteInput.value = id;
            deleteForm.appendChild(deleteInput);
        })

        let formData = new FormData(deleteForm);
        fetchUtility("{{ route('hi-secure.delete') }}", formData)
        // })
    }
</script>
<script>
    document.querySelectorAll('.switch-input').forEach(function (switchInput) {
        switchInput.addEventListener('click', function () {
            let id = this.id.replace('switch_', '');
            let switchForm = document.getElementById('switchForm');

            let switchInput = document.createElement('input');
            switchInput.setAttribute('type', 'hidden');
            switchInput.setAttribute('name', 'switch');
            switchInput.value = this.checked;
            switchForm.appendChild(switchInput);

            let formData = new FormData(switchForm);
            fetch(`{{ url('hi-secure') }}/${id}/switch`, {
                method: "POST",
                body: formData
            })
        });
    })
</script>
</body>
</html>
