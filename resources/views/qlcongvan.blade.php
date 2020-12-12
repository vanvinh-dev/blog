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
        <!-- End of Topbar -->
      <div id='wrap' style="background-color: white;height: 82%;">
             <div style="padding:20px">

            <table class="table  table table-bordered" style="    background-color: white;    text-align: center;">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Công văn</th>
                  <th scope="col">Mô tả</th>
                  <th scope="col">Loại văn bản</th>
                  <th scope="col">Lĩnh vực</th>
                  <th scope="col">Ngày ban hành</th>
                  <th scope="col"></th>
                </tr>
              </thead>
              <tbody id="tbody">
              
              </tbody>
            </table>
        </div>
      </div>
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Chuyển công văn đến bộ môn</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="row">
           <div class="col-md-12">
               <div class="form-group"> <label>Gửi đến giáo viên</label> <select class="form-control select2 select2-hidden-accessible" multiple=""  style="width: 100%;" tabindex="-1" aria-hidden="true" id="giaovien">
                   
                </select> 
                </div> 
       
    
          </div>
      </div>
      <div class="modal-footer" id="footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
        <button type="button" class="btn btn-primary" onclick="guicongvan()">Chia sẻ</button>
      </div>
    </div>
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
  <script>
  $(document).ready(function() {
    $('.select2').select2({
    closeOnSelect: false
    });
    });
   let doc = ['.docx', '.DOCX', '.doc', '.DOC']
    let excel = ['.xls', '.XLS', '.xlsx', 'XLSX']
        document.getElementById('tbody').innerHTML = ''
     $.ajax({
                url:'/getcongvanBySession',
                type:'GET',
                success:function(data){
                    let congvan = JSON.parse(data)
                    for (let i = 0; i < congvan.length; i++) {
                        let teamplate 
                        if (hasExtension(congvan[i].file,excel)) {
                           teamplate = `<a href="/upload/${congvan[i].file}"> <img src="/img/excel.png" style="border-radius: 10px;max-height: 106px;" download> </a>`
                        }else if(hasExtension(congvan[i].file,doc)) {
                           teamplate = `<a href="/upload/${congvan[i].file}"> <img src="/img/docx.png" style="border-radius: 10px;max-height: 106px;" download> </a>`
                        }else{
                           teamplate = `<a href="/upload/${congvan[i].file}"> <img src="/upload/${congvan[i].file}" style="border-radius: 10px;max-height: 106px;" download> </a>`
                        }
                        document.getElementById('tbody').innerHTML +=`
                        <tr>
                        <th scope="row">${i+1}</th>
                        <td>${teamplate}</td>
                        <td>${congvan[i].Mota}</td>
                        <td>${congvan[i].loaivb}</td>
                        <td>${congvan[i].linhvuc}</td>
                        <td>${congvan[i].ngaybanh}</td>
                        <td>
                        <a data-toggle="modal" data-target="#exampleModal" onclick="clickcurrent(${congvan[i].id})"><i class="fa fa-share" style="margin-right:10px"></i></a>
                        <a href="/upload/${congvan[i].file}"><i class="fa fa-download"></i></td>
                         </tr>
                        `
                    }
                }
      })
 $.ajax({
            url:'/getDataGv',
            type:'GET',
            success:function(data){
                    let gv = JSON.parse(data)
                    let select
                    for (let i = 0; i < gv.length; i++) {
                      select += `<option value="${gv[i].id}">${gv[i].ten}</option>`
                    }
                     $('#giaovien').append(select)
                }
      })
      function hasExtension(fileName, exts) {
            return (new RegExp('(' + exts.join('|').replace(/\./g, '\\.') + ')$')).test(fileName);
            }
            function clickcurrent(id){
  currentId = id
}
  </script>
</body>

</html>
