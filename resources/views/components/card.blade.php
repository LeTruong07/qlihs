@props(['highlight' => false])

<div @class(['highlight' => $highlight, 'card'])>  <!-- Neu highlight = true thi them class highlight vao nguoc lai se them card -->
    {{ $slot }}
    <a href="{{ $attributes->get('href')}}" class="btn">View details</a>   <!-- $attributes->get('href') dung de nhan gia tri cua href duoc truyen vao x-card-->
</div>