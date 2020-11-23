@if(session()->has('notification.success'))
<div role="alert" style="background-color: green; color: white; padding: 10px; margin-bottom: 10px;">
    {{ session('notification.success') }}
</div>
@endif
