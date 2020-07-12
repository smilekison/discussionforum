<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>{{ config('app.name', 'Online News') }}</title>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  </style>

<script type="text/javascript">
  $(document).ready(function(){
      var maxLength = 600;
      $(".show-read-more").each(function(){
          var myStr = $(this).text();
          if($.trim(myStr).length > maxLength){
              var newStr = myStr.substring(0, maxLength);
              var removedStr = myStr.substring(maxLength, $.trim(myStr).length);
              $(this).empty().html(newStr);
              $(this).append(' <a href="javascript:void(0);" class="read-more">read more...</a>');
              $(this).append('<span class="more-text">' + removedStr + '</span>');
          }
      });
      $(".read-more").click(function(){
          $(this).siblings(".more-text").contents().unwrap();
          $(this).remove();
      });
  });
</script>
</head>
<body>
    <div id="app">
        @include('inc.navbar')
        <div class="container">
            @include('inc.messages')
            @yield('content')
          </div>
        </div>            
    </div>
    @include('inc.footer')
</body>
</html>