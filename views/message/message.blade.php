@if(!empty(session_message('success_message')))
 
<div class="alert alert-success" id="alert-message">
    <button type="button" class="close" data-dismiss="alert" id="close-btn">x</button>
    <strong>success!</strong>
    {{session_message('success_message','message')}}
</div>
{{unset_session('success_message')}}
@endif

@if(!empty(session_message('errors_message')))
<div class="alert alert-danger" id="alert-message">
    <button type="button" class="close" data-dismiss="alert" id="close-btn">x</button>
    <strong>Message!</strong>
    {{session_message('errors_message','message')}}
</div>
{{unset_session('errors_message')}}
@endif
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script>
    $(document).ready(function(){
    $('.close').on('click',function(){
        $('.alert').hide(300);
        // alert(true);
    });
});
</script>