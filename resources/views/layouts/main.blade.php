<!--
*
*  INSPINIA - Responsive Admin Theme
*  version 2.7
*
-->

<!DOCTYPE html>
<html>

<head>
  @include('layouts.head')
</head>

<body>
  <div id="wrapper">
    @include('layouts.sidebar')
    <div id="page-wrapper" class="gray-bg dashbard-1">
      <div class="row border-bottom">
        @include('layouts.navbar')
      </div>
      <div class="row border-bottom white-bg dashboard-header">
        <h2>ISC HRIS</h2>
        <ol class="breadcrumb">
          <li>
            <a href="index.html">Home</a>
          </li>
        </ol>
      </div>
      <div class="wrapper wrapper-content animated fadeInRight">
        @yield('contents')
      </div>
            @include('layouts.footer')
          </body>
          </html>