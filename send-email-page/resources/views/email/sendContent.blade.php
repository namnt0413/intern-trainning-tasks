<div class="email"
    style="width: 800px; margin: 0 auto;"
>
    {{-- ?php dd( $subject, $content ) ?> --}}
    <h2> {{ $subject }} </h2>
    <div class="row"><h4>Người gửi : </h4><p> {{ $name }}</p></div>
    <div class="row"><h4>Email : </h4><p> {{ $email }}</p></div>
    <div class="row"><h4>Nội dung liên lạc : </h4><p> {{ $content }}</p></div>
</div>
