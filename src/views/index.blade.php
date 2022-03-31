@extends("bsadjetey.ussdsimulator.app")
@section("content")
    <div class="row">
        <div class="flex-item">
            <!-- Initial screen display -->
            <div id="btn-start" class="ussd-start">
                <a href="#" class="btn btn-primary" id="start-ussd">Start USSD</a>
            </div>
            <!-- End Initial screen display -->
            <!-- CSS Loader -->
            <div class="loader" id="loader-4">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <!-- End CSS Loader -->

            <!-- Section for content display -->
            <div class="ussd-content ussd-display">
            </div>
            <!-- End Section for content display -->

            <!-- Section for ussd input entry -->
            <div class="con-session ussd-display">
                <div class="form-group">
                    <div class="col-md-6">
                        <input id="txt-input" type="text" class="form-control border-bottom ussd-input" name="ussd_text"  required autofocus autocomplete="off">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-default clear-ussd-session">
                            Cancel
                        </button>
                        <button type="button" class="btn btn-primary" id="btn-send">
                            Send
                        </button>
                    </div>
                </div>
            </div>
            <!-- End Section for ussd input entry -->
            <!-- Section for ussd terminal message -->
            <div class="end-session ussd-display">
                <div class="form-group">
                    <div class="col-md-6">
                        <button type="button" class="btn btn-default clear-ussd-session">
                            Dismiss
                        </button>
                    </div>
                </div>
            </div>
            <!-- End Section for ussd terminal message -->
        </div>
    </div>
@endsection
@section("jsscripts")
    <script src="{{asset("ussdsimulator/js/ussd.js")}}"></script>
@endsection
