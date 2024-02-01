<!DOCTYPE html>
<html lang="ko">
@include('user.components.head')
<body>
<div id="wrap">

    <main id="main" class="main">
        <div class="login_wrap">
            <div class="logo_wrap">
                <img src="/images/logo_full.png" alt="">
            </div>
            <form action="" method="post" id="form">
                @csrf
                <div class="login_box">
                    <div class="input_wrap">
                        <div class="label_wrap">
                            <i class="xi-user"></i>
                        </div>
{{--                        <input type="text" name="" id="name" placeholder="Username">--}}
                        <input type="text" name="email" id="id" placeholder="ID">
                    </div>
                    <div class="input_wrap">
                        <div class="label_wrap">
                            <i class="xi-lock"></i>
                        </div>
{{--                        <input type="password" name="" id="password" placeholder="Password">--}}
                        <input type="password" name="password" id="pwd" placeholder="PASSWORD">
                    </div>

                    <a href="#" class="btn-login" id="submit">Sign In</a>

                    <p class="error-txt">
                        You entered your ID (login-only ID) or password incorrectly. <br>
                        Please check the information you entered again.
                    </p>
                    <p class="error-txt">
                        You entered your password incorrectly. <br>
                        (1/5) If you enter incorrect information more than 4 times, <br>
                        your account will be locked for a certain period of time. <br>
                        If you have forgotten, please contact the administrator.
                    </p>
                </div>
            </form>
        </div>
    </main>
    <!-- //main -->

</div>
{{--<script>--}}

{{--    let items = [];--}}

{{--    // let domain = "http://localhost:90";--}}
{{--    let domain = "http://hi-secure.ufeed.co.kr";--}}

{{--    function getItems() {--}}
{{--        $(".modal-table-wrap tbody").html("");--}}

{{--        axios.get(domain + "/api/users")--}}
{{--            .then(response => {--}}
{{--                items = response.data.data;--}}
{{--            }).catch(error => {--}}

{{--        })--}}
{{--    }--}}

{{--    getItems();--}}

{{--    $(".btn-login").click(function (e) {--}}
{{--        e.preventDefault();--}}

{{--        let form = {--}}
{{--            ids: $("#name").val(),--}}
{{--            password: $("#password").val(),--}}
{{--        }--}}

{{--        axios.post(domain + "/api/users/login", form)--}}
{{--            .then(response => {--}}
{{--                localStorage.setItem("user", JSON.stringify(response.data.data));--}}

{{--                return location.href = `{{ route('dash-board.index') }}`;--}}
{{--            }).catch(error => {--}}
{{--            alert(error.response.data.message);--}}
{{--        })--}}

{{--        /*--}}
{{--        if((name === 'admin' && password === 'hgs_1qa2ws') || name === 'test@naver.com' && password === 'test@naver.com')--}}
{{--            return location.href = '/dashboard_index.html';--}}

{{--        return alert("유효하지 않은 계정정보입니다."); */--}}
{{--    });--}}
{{--</script>--}}
<script>
    document.getElementById('submit').addEventListener('click', function (e) {
        e.preventDefault();
        let form = document.getElementById('form');
        let formData = new FormData(form);
        fetch("{{ route('login') }}", {
            method: "POST",
            body: formData
        }).then(response => {
            if (response.ok) {
                return response;
            }
            return response.json().then(data => {
                throw new Error(data.message);
            });
        }).then(response => {
            location.href = response.url;
        }).catch(error => {
            alert(error.message);
        });
    });
</script>
</body>
</html>