<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>SB Admin 2 - Dashboard</title>
 
  @include('include.css')


</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">
    @include('include.menugv')
    <!-- Sidebar -->
    
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        
        <!-- Topbar -->
        @include('include.header')
        <!-- End of Topbar -->
      <div id='wrap'>
             <div style="padding:20px">
            <div style="">
              <a class="btn btn-info btn-sm" style="float:right;margin-bottom:15px" href="/themlich">Thêm lịch dạy</a>
            </div>
            <table class="table  table table-bordered" style="    background-color: white;">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Môn học</th>
                  <th scope="col">Lớp học</th>
                   <th scope="col">Bậc học</th>
                   <th scope="col">Địa điểm</th>
                   <th scope="col">Bắt đầu dạy</th>
                   <th scope="col">Kết thúc dạy</th>
               
                </tr>
              </thead>
              <tbody>
              <?php $stt=0; foreach($chedule as $item): $stt++?>
                    <tr>
                        <th scope="row">{{$stt}}</th>
                        <td><?php echo App\Models\subject1::find($item['mabomon'])->name ?></td>
                        <td><?php echo App\Models\lop::find($item['lophoc'])->tenlop ?></td>
                        <td>{{$item['bachoc']}}</td>
                         <td>{{$item['diadiem']}}</td>
                           <td>{{$item['timestart']}}</td>
                           <td>{{$item['timend']}}</td>
                    </tr>
                    <tr>
                    
                <?php endforeach ?>
              </tbody>
            </table>
        </div>
      </div>
  </div>
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
  
  <!-- Page level custom scripts -->
  @include('include.script')
</body>

</html>
