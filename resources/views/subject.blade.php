<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title></title>

  @include('include.css')


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    @include('include.menu')
    <!-- Sidebar -->
    
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        
        <!-- Topbar -->
        @include('include.header')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        
        <div style="padding:20px">
            <div style="">
              <a class="btn btn-info btn-sm" style="float:right;margin-bottom:15px" href="/themmon">Thêm bộ môn</a>
            </div>
            <table class="table  table table-bordered" style="    background-color: white;">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Mã bộ môn</th>
                  <th scope="col">Tên bộ môn</th>
                   <th scope="col">Số tín chỉ</th>
                   <th scope="col">Khoa</th>
                   <th scope="col">Ngày tạo</th>
                   <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
              <?php $stt=0; foreach($subject as $item): $stt++?>
                    
                    <tr>
                        <th scope="row">{{$stt}}</th>
                        <td>{{$item['mamh']}}</td>
                        <td>{{$item['name']}}</td>
                        <td>{{$item['tinchi']}}</td>
                           <td><?php echo App\Models\khoa::find($item['khoa'])->tenkhoa ?></td>
                        <td>{{date('d/m/Y',strtotime($item['created_at']))}}</td>
                        <td style="text-align: center;">
                        <a href="/suamon/{{$item['id']}}"><i class="fa fa-edit" style="margin-right:10px"></i></a>
                         <a href="/xoamon/{{$item['id']}}"><i class="fa fa-trash-alt" style="    color: #de3d0b;"></i></a></td>
                    </tr>
                    <tr>
                    
                <?php endforeach ?>
              </tbody>
            </table>
        </div>
        
      
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>
  <!-- Page level custom scripts -->
  @include('include.script')

</body>

</html>
