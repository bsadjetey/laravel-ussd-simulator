@extends("bsadjetey.ussdsimulator.app")
@section("content")
    <form class="form-horizontal" method="get" action="#">
        <div class="form-group">
            <div class="col-md-12"> <label for="app_url" class="control-label">APP Url</label>
                <input id="app_url" type="text" class="form-control" name="app_url" placeholder="eg. http://localhost/ussd?" required autofocus>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12">
                <label for="phone_number" class="control-label">Phone Number</label>
                <input id="phone_number" type="text" class="form-control" name="phone_number" placeholder="eg. +2332XXXXXXXXX" required autofocus>
            </div>
        </div>
        <div class="form-group">
            <div class="col-md-12 col-md-offset-0">
                <button type="button" class="btn btn-primary" id="btn-save">
                    Save Settings
                </button>
            </div>
        </div>
    </form>

@endsection
@section("jsscripts")
    <script>
        $(function(){
            var phone_number = localStorage.getItem("phone_number");
            var app_url = localStorage.getItem("app_url");

            $('#phone_number').val(phone_number);
            $('#app_url').val(app_url);

            $('#btn-save').on('click',function () {
                var num = $('#phone_number').val();
                localStorage.setItem("phone_number", num);
                localStorage.setItem("app_url", $("#app_url").val());
                alert("Great jobb! Kindly go to the USSD Menu up there");
            })
        })
    </script>
@endsection
