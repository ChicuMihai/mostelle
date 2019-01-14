@extends('admin.layouts.app')

@section('title', 'Contacte')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="ibox ">
                <div class="ibox-title">
                    <h5>Contacte</h5>

                </div>
                <div class="ibox-content">
                    <form method="POST" action="{{route('contact_store')}}" accept-charset="UTF-8" name="register"
                        novalidate onsubmit=" return validateForm()">
                        {{ csrf_field() }}
                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            {!! session('message') !!}
                        </div>
                        @endif
                        <div class="form-group row justify-content-center">
                   

                            <div class="col-md-6 justify-content-center">
                                <label for="">Email</label>
                                <input type="text" name="email" placeholder="Email" class="form-control" value="{{isset($info) ? $info->email : ''}}">
                            </div>
                            <div class="col-md-6 justify-content-center">
                                <label for="">Telefon Call-Center</label>
                                <input type="text" name="tel_call_center" placeholder="Call-Center" class="form-control" value="{{isset($info) ? $info->tel_call_center : ''}}">
                                <hr>
                               
                            </div>
            


                            



                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    function validateForm() {
        var fields = ["adress", "phone", "email", "mobile"]

        var i, l = fields.length;
        var fieldname;
        for (i = 0; i < l; i++) {
            fieldname = fields[i];
            if (document.forms["register"][fieldname].value === "") {
                alert(fieldname + " can not be empty");
                return false;
            }
        }
        return true;
    }
</script>
@endsection