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
    @include('include.menutbm')
    <!-- Sidebar -->
    
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">
        
        <!-- Topbar -->
        @include('include.header')
          <div id='wrap'>
             <div style="padding:20px">
            <div style="">
            </div>
            <table id="tables" class="table  table table-bordered" style="    background-color: white;">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Môn học</th>
                  <th scope="col">Tên giáo viên</th>
                  <th scope="col">Lớp học</th>
                   <th scope="col">Bậc học</th>
                   <th scope="col">Địa điểm</th>
                   <th scope="col">Bắt đầu dạy</th>
                   <th scope="col">Kết thúc dạy</th>
                    <th scope="col"></th>
                </tr>
              </thead>
              <tbody>
              <?php $stt=0; foreach($chedule as $item): $stt++?>
                    <tr>
                        <th scope="row">{{$stt}}</th>
                        <td><?php echo App\Models\subject1::find($item['mabomon'])->name ?></td>
                         <td><?php echo App\Models\member::find($item['idgv'])->ten ?></td>
                        <td><?php echo App\Models\lop::find($item['lophoc'])->tenlop ?></td>
                        <td>{{$item['bachoc']}}</td>
                         <td>{{$item['diadiem']}}</td>
                           <td>{{$item['timestart']}}</td>
                           <td>{{$item['timend']}}</td>
                        
                        <td style="text-align: center;">
                        <a href="/editSchedule/{{$item['id']}}"><i class="fa fa-check-square" style="margin-right:10px;color: #37a53b;"></i></a>
                         <a href="/xoamons/{{$item['id']}}"><i class="fa fa-trash-alt" style="    color: #de3d0b;"></i></a></td>
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
