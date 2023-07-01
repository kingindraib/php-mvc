@if(!empty(session_message('success_message')))
<div class="alert alert-success" id="alert-message">
    <button type="button" class="close" data-dismiss="alert" id="close-btn">x</button>
    <strong>success!</strong>
    {{get_message('success_message','message')}}
</div>
{{unset_session('success_message')}}
@endif

@if(!empty(session_message('errors_message')))
<div class="alert alert-danger" id="alert-message">
    <button type="button" class="close" data-dismiss="alert" id="close-btn">x</button>
    <strong>Failled!</strong>
    {{get_message('errors_message','message')}}
</div>
{{unset_session('errors_message')}}
@endif