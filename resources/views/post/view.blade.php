@extends('layouts.app')
@section('content')
<style type="text/css">
   h2.record {
   font-size: 30px;
   position: relative;
   top: 7px;
   }
</style>
<!-- page content -->
<div class="right_col" role="main">
   <div>
      <div class="page-title">
         <div class="title_left">
            <h3>Post Details</h3>
         </div>
         {{-- <div class="clearfix"></div> --}}
      </div>
      <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
               <div class="x_content">

                  <table class="table table-striped table-bordered custom-table spam">
                     <tr>
                        <td width="210">Profile Picture</td>
                        <td><img src="{{url('/storage')}}/{{$post->image}}" width="100"> </td>
                     </tr>
                     <tr>
                        <td>Title</td>
                        <td>{{$post->title}}</td>
                     </tr>
                     <tr>
                        <td>Description</td>
                        <td>{{$post->description}}</td>
                     </tr>

                     <tr>
                        <td>Date</td>
                        <td>{{$post->created_at}}</td>
                     </tr>

                  </table>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
</div>

@endsection
