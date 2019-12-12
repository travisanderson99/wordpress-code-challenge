<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  @php wp_head() @endphp

  <!-- Site Color -->
  @php
  $site_color = get_theme_mod('primary_color');
  @endphp
  <style>
      :root {
          --site-primary: {{ $site_color }};
      }
  </style>
  <!-- End Site Color -->
</head>
