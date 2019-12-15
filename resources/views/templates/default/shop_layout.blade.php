@if (sc_config('SITE_STATUS') != 'on')
  @include('templates.' . sc_store('template') . '.maintenance')
  @php
    exit();
  @endphp
@endif

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $description??sc_store('description') }}">
    <meta name="keyword" content="{{ $keyword??sc_store('keyword') }}">
    <title>{{$title??sc_store('title')}}</title>
    <meta property="og:image" content="{{ !empty($og_image)?asset($og_image):asset('images/org.jpg') }}" />
    <meta property="og:url" content="{{ \Request::fullUrl() }}" />
    <meta property="og:type" content="Website" />
    <meta property="og:title" content="{{ $title??sc_store('title') }}" />
    <meta property="og:description" content="{{ $description??sc_store('description') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

<!--Module meta -->
  @isset ($blocksContent['meta'])
      @foreach ( $blocksContent['meta']  as $layout)
        @php
          $arrPage = explode(',', $layout->page)
        @endphp
        @if ($layout->page == '*' ||  (isset($layout_page) && in_array($layout_page, $arrPage)))
          @if ($layout->type =='html')
            {!! $layout->text !!}
          @endif
        @endif
      @endforeach
  @endisset
<!--//Module meta -->

<!-- css default for item s-cart -->
@include('common.css')
<!--//end css defaut -->

    <link href="{{ asset('templates/'.sc_store('template').'/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('templates/'.sc_store('template').'/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('templates/'.sc_store('template').'/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{ asset('templates/'.sc_store('template').'/css/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('templates/'.sc_store('template').'/css/main.css')}}" rel="stylesheet">
    <link href="{{ asset('templates/'.sc_store('template').'/css/responsive.css')}}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="{{ asset('templates/'.sc_store('template').'/js/html5shiv.js')}}"></script>
    <script src="{{ asset('templates/'.sc_store('template').'/js/respond.min.js')}}"></script>
    <![endif]-->
    <link rel="shortcut icon" href="{{ asset('templates/'.sc_store('template').'/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('templates/'.sc_store('template').'/images/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('templates/'.sc_store('template').'/images/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('templates/'.sc_store('template').'/images/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('templates/'.sc_store('template').'/images/ico/apple-touch-icon-57-precomposed.png')}}">



  <!--Module header -->
  @isset ($blocksContent['header'])
      @foreach ( $blocksContent['header']  as $layout)
      @php
        $arrPage = explode(',', $layout->page)
      @endphp
        @if ($layout->page == '*' ||  (isset($layout_page) && in_array($layout_page, $arrPage)))
          @if ($layout->type =='html')
            {!! $layout->text !!}
          @endif
        @endif
      @endforeach
  @endisset
<!--//Module header -->

</head>
<!--//head-->
<body>

@include('templates.'.sc_store('template').'.header')

<!--Module banner -->
  @isset ($blocksContent['banner_top'])
      @foreach ( $blocksContent['banner_top']  as $layout)
      @php
        $arrPage = explode(',', $layout->page)
      @endphp
        @if ($layout->page == '*' ||  (isset($layout_page) && in_array($layout_page, $arrPage)))
          @if ($layout->type =='html')
            {!! $layout->text !!}
          @elseif($layout->type =='view')
            @if (view()->exists('block.'.$layout->text))
             @include('block.'.$layout->text)
            @endif
          @elseif($layout->type =='module')
            {!! sc_block_render($layout->text) !!}
          @endif
        @endif
      @endforeach
  @endisset
<!--//Module banner -->


<!--Module top -->
  @isset ($blocksContent['top'])
      @foreach ( $blocksContent['top']  as $layout)
        @php
          $arrPage = explode(',', $layout->page)
        @endphp
        @if ($layout->page == '*' ||  (isset($layout_page) && in_array($layout_page, $arrPage)))
          @if ($layout->type =='html')
            {!! $layout->text !!}
          @elseif($layout->type =='view')
            @if (view()->exists('block.'.$layout->text))
             @include('block.'.$layout->text)
            @endif
          @elseif($layout->type =='module')
            {!! sc_block_render($layout->text) !!}
          @endif
        @endif
      @endforeach
  @endisset
<!--//Module top -->


  <section>
    <div class="container">
      <div class="row">
        <div class="col-sm-12" id="breadcrumb">
          <!--breadcrumb-->
          @yield('breadcrumb')
          <!--//breadcrumb-->

          <!--fillter-->
          @yield('filter')
          <!--//fillter-->
        </div>

        <!--Notice -->
        @include('templates.'.sc_store('template').'.notice')
        <!--//Notice -->

        <!--body-->
        @section('main')
          @include('templates.'.sc_store('template').'.left')
          @include('templates.'.sc_store('template').'.center')
          @include('templates.'.sc_store('template').'.right')
        @show
        <!--//body-->

      </div>
    </div>
  </section>

@include('templates.'.sc_store('template').'.footer')

<script src="{{ asset('templates/'.sc_store('template').'/js/jquery.js')}}"></script>
<script src="{{ asset('templates/'.sc_store('template').'/js/jquery-ui.min.js')}}"></script>
<script src="{{ asset('templates/'.sc_store('template').'/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('templates/'.sc_store('template').'/js/jquery.scrollUp.min.js')}}"></script>
<script src="{{ asset('templates/'.sc_store('template').'/js/jquery.prettyPhoto.js')}}"></script>
<script src="{{ asset('templates/'.sc_store('template').'/js/main.js')}}"></script>


@stack('scripts')

<!-- js default for item s-cart -->
@include('common.js')
<!--//end js defaut -->

   <!--Module bottom -->
   @isset ($blocksContent['bottom'])
       @foreach ( $blocksContent['bottom']  as $layout)
         @php
           $arrPage = explode(',', $layout->page)
         @endphp
         @if ($layout->page == '*' ||  (isset($layout_page) && in_array($layout_page, $arrPage)))
           @if ($layout->type =='html')
             {!! $layout->text !!}
           @elseif($layout->type =='view')
             @if (view()->exists('block.'.$layout->text))
              @include('block.'.$layout->text)
             @endif
           @elseif($layout->type =='module')
             {!! sc_block_render($layout->text) !!}
           @endif
         @endif
       @endforeach
   @endisset
 <!--//Module bottom -->

</body>
</html>
