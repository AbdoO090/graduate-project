<x-admin-layout>
    @extends('admin.layouts.app')
    @section('content')

      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Admin DashBoard</h1>
            <div class="container-fluid page-body-wrapper">
                <div class="container">
                    <h1 style="font-size: 25px; padding-top:15px;padding-bottom:15px;">Approve Products</h1>

                    <table>

                        <tr style="background-color:rgba(9, 16, 29, 0.4);">
                            <td style="padding: 30px;">Title</td>
                            <td style="padding: 30px;">Description</td>
                            <td style="padding: 30px;">Update</td>
                            <td style="padding: 30px;">Delete</td>
                        </tr>

                    </table>
                </div>
            </div>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/dashboard">Category</a></li>
              <li class="breadcrumb-item active"><a href="/admin/requests">Approve</a></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  </div>
  <!-- /.content-wrapper -->
@endsection
@section('scripts')
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
@endsection
</x-admin-layout>
