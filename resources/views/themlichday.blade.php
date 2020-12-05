<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{ asset("css/bootstrap-datepicker.css")}}" rel="stylesheet" type="text/css">
  <title>SB Admin 2 - Dashboard</title>
 
  @include('include.css')
<style>
    body {
    color: #fff;
    overflow-x: hidden;
    height: 100%;
    background-color: #000;
    background-repeat: no-repeat
}


.card {
    background-color: #4066d4;
    padding: 40px 10px
}

.text-grey {
    color: #9E9E9E
}

.fa {
    font-size: 25px;
    cursor: pointer
}

input,
select {
    padding: 2px 6px;
    border: none;
    border-bottom: 1px solid #fff;
    border-radius: none;
    box-sizing: border-box;
    color: #fff;
    background-color: transparent;
    font-size: 14px;
    letter-spacing: 1px;
    text-align: center !important
}

input:focus,
select:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border-bottom: 1px solid #00C853;
    outline-width: 0
}

select option {
    background-color: #616161
}
#select-type option{
     background-color: white
}

select option:focus {
    background-color: #00C853 !important
}

::placeholder {
    color: #fff;
    opacity: 1
}

:-ms-input-placeholder {
    color: #fff
}

::-ms-input-placeholder {
    color: #fff
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}

.btn {
    border-radius: 50px;
    width: 120px
}

.exit {
    border: 1px solid #9E9E9E;
    color: #9E9E9E;
    background-color: transparent
}

.exit:hover {
    border: 1px solid #9E9E9E;
    color: #000 !important;
    background-color: #9E9E9E
}

@media screen and (max-width: 768px) {
    .mob {
        width: 70%
    }

    select.mob {
        width: 50%
    }
}
body {
    color: #000;
    overflow-x: hidden;
    height: 100%;
    background-color: #CE93D8 !important;
    background-repeat: no-repeat
}

.container-fluid {
    padding-top: 120px;
    padding-bottom: 120px
}

input {
    padding: 10px 20px 10px 20px;
    border: 1px solid lightgrey !important;
    border-radius: 6px !important;
    box-sizing: border-box;
    background-color: #fff !important;
    color: #2C3E50;
    font-size: 14px;
    letter-spacing: 1px
}

input:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    border: 1px solid #512DA8;
    outline-width: 0
}

::placeholder {
    color: #BDBDBD;
    opacity: 1
}

:-ms-input-placeholder {
    color: #BDBDBD
}

::-ms-input-placeholder {
    color: #BDBDBD
}

button:focus {
    -moz-box-shadow: none !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important;
    outline-width: 0
}

.datepicker {
    background-color: #fff;
    border: none;
    padding:10px 20px 10px 20px!important;
}

.datepicker-dropdown {
    top: 0;
    left: 0
}

.datepicker table tr td.today,
span.focused {
    border-radius: 50% !important
}

thead tr:nth-child(2) {
    background-color: #3f51b5 !important
}

thead tr:nth-child(3) th {
    color: #3f51b5 !important;
    padding-top: 20px;
    padding-bottom: 10px
}

.dow,
.old-day,
.day,
.new-day {
    width: 40px !important;
    height: 40px !important;
    border-radius: 0px !important
}

.old-day:hover,
.day:hover,
.new-day:hover,
.month:hover,
.year:hover,
.decade:hover,
.century:hover {
    border-radius: 50% !important;
    background-color: #eee
}

.active {
    border-radius: 50% !important;

}

.prev,
.next,
.datepicker-switch {
    border-radius: 0 !important;
    padding: 20px 10px !important;
    text-transform: uppercase;
    font-size: 20px;
    color: #fff;
    opacity: 0.8
}

.prev:hover,
.next:hover,
.datepicker-switch:hover {
    background-color: inherit !important;
    opacity: 1
}
#select-type{
        padding: 10px 20px 10px 20px!important;
    border: 1px solid lightgrey !important;
    border-radius: 6px !important;
    box-sizing: border-box!important;
    background-color: #fff !important;
    color: #2C3E50!important;
    font-size: 14px!important;
    letter-spacing: 1px!important;
}


</style>

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
     <div class=" ">
    <div class="row d-flex justify-content-center">
        <div class="col-md-12 col-lg-12 col-xl-11">
            <div class="card border-0">
                <div class="row px-3 m-b-lg" style="margin-bottom:30px">
                    <div class="col-sm-12 b-10" style="margin-bottom: 19px;">
                        <lable class="text-white m">1. Thông tin cơ bản</lable>
                    </div>
                    <div class="col-sm-12">
                        <div class="mb-2 mob">
                        <form autocomplete="off">
                            <div class="form-group">
                             <input style="display:none" class="form-controll mr-5"  type="text" id="session"  placeholder="Giao viên" name="date" value="<?php if(session('user')){
                                    echo session('user')[0]['id'];
                             }  ?>">
                             <input  type="text" id="dp1" class="datepicker mr-5 form-controll" placeholder="Chọn ngày" name="date">
                                <input class="form-controll mr-5"  type="text" id="dp2"  placeholder="Bậc học" name="date">
                                <select class="form-controll" id="select-type">
                                        <option value="0">
                                                Dạy tối 
                                        </option>
                                        <option value="1">
                                                Dạy hè 
                                        </option>
                                </select>
                            
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
                <div class="row px-3">
                 <div class="col-sm-12 b-10" style="margin-bottom: 19px;">
                        <lable class="text-white m">2. Lên lịch</lable>
                    </div>
                    <div class="col-sm-12 list">
                        <div class="mb-4 row justify-content-between px-3 grid" style="margin-bottom:15px"> 
                            <select class="mb-2 mob" id="select-Mon1">
                               
                            </select>
                            <div class="mob" style="display: grid;">
                            <label class="text-grey mr-4">Lớp</label>
                            <select class="mb-2 mob" id="lop1">
                               
                            </select>
                             </div>
                            <div class="mob" style="display: grid;"> <label class="text-grey mr-1">Từ</label> <input class="ml-1" type="time" name="from" id="starttime1" style="    margin-bottom: 8px;"> </div>
                            <div class="mob mb-2" style="display: grid;"> <label class="text-grey mr-4">Đến</label> <input class="ml-1" type="time" name="to" id="endtime1"> </div>
                            <div class="mob mb-2">  <input class="ml-1" type="text" name="to" placeholder="Địa điểm" id="place1" style="margin-top: 33px;"> </div>
                            
                            <div class="mt-1 cancel fa fa-times text-white"></div>
                        </div>
                        
                    </div>
                </div>
                <div class="row px-3 mt-3"> 
                    <div class="col-sm-10">
                        <div class="row px-3">
                            <div class="fa fa-plus-circle text-success add"></div>
                            <p class="text-success ml-3 add">Thêm lịch dạy</p>
                        </div>
                    </div>
                </div>
                <div class="row px-3 mt-3 justify-content-center"> <button class="btn btn-success ml-2" onclick="sendata()">Hoàn thành</button> </div>
            </div>
        </div>
    </div>
</div>
      </div>
      </div>
      </div>
      </div>
       
  @include('include.script')
   <script src="{{ asset('bootstrap-datepicker.js')}}"></script>
   
 
  <script>
    let index = 1
    $(document).ready(function(){
    $.ajax({
        url:'/getmonhoc',
        type:'GET',
        success:function(ret){
            $.ajax({
                url:'/getlophoc',
                type:'GET',
                success:function(data){
                    let lophoc = JSON.parse(data)
                    console.log(lophoc,354)
                    let selects =''
                    lophoc.forEach((item)=>{
                        selects += `<option value="${item.id}">${item.tenlop}</option>
                        `
                    })
                    $('#lop1').append(selects)
                    let monhoc = JSON.parse(ret)
                    let select =''
                    monhoc.forEach((item)=>{
                        select += `<option value="${item.id}">${item.name}</option>
                        `
                    })
                    $('#select-Mon1').append(select)
                    $('.add').click(function(){
                        index++
                        $(".list").append(
                        `<div class="mb-4 row justify-content-between px-3 grid" style="margin-bottom:15px">
                            <select class="mob mb-2" id="select-Mon${index}">
                                    ${select} 
                                </select>
                                 <div class="mob" style="display: grid;">
                            <label class="text-grey mr-4">Lớp</label>
                            <select class="mb-2 mob" id="lop${index}">
                                ${selects}
                            </select>
                             </div>
                            <div class="mob" style="display: grid;">
                                <label class="text-grey mr-1">Từ</label>
                                <input style="    margin-bottom: 8px;" class="ml-1" type="time" name="from" id="starttime${index}">
                                </div>
                            <div class="mob mb-2" style="display: grid;">
                                <label class="text-grey mr-4">Đến</label>
                                <input class="ml-1" type="time" name="to"  id="endtime${index}">
                                </div>
                                <div class="mob mb-2">  <input  class="ml-1" type="text" name="to" placeholder="Địa điểm" id="place${index}" style="margin-top:33px"> </div>
                                    
                                <div class="mt-1 cancel fa fa-times text-white">
                                </div>
                            </div>`);
                    });
          
                
                }
            })
            
        }
    })
      
    $('.datepicker').datepicker({
    format: 'dd-mm-yyyy',
    todayHighlight: true,
    toggleActive: true,
    });
    

    $(".list").on('click', '.cancel', function(){
    $(this).parent().remove();
    });

    }); 
    function sendata(){
        let arr = []
        let idgv = document.getElementById('session')
        let date = document.getElementById('dp1')
        let bachoc = document.getElementById('dp2')
        let type = $( "#select-type option:checked" ).val()
         if(idgv.value==''){
              alert('Bạn chưa đăng nhập');
            return
         }
        if(date.value == ''){
            alert('Bạn vui lòng chọn ngày lên lịch!')
            return
        }
        if(bachoc.value == ''){
            alert('Bạn vui lòng chọn bậc học!')
            return
        }
        for(let i = 1;i<=index;i++){
            let mabomon = $( `#select-Mon${i} option:checked` ).val()
            let lophoc = $( `#lop${i} option:checked` ).val()
            let timestart = $( `#starttime${i}` ).val()
            let timend =  $( `#endtime${i}` ).val()
            let diadiem =  $( `#place${i}` ).val()
            // let syso =  $( `#amount${i}` ).val()
            let mamh  = $( `#select-Mon${i} option:checked` ).val()
            let obj = {
                date:date.value,
                bachoc:bachoc.value,
                type:type,
                mabomon:mabomon,
                lophoc:lophoc,
                timestart:timestart,
                timend:timend,
                diadiem:diadiem,
                // syso:syso,
                mamh:mamh,
                idgv:Number(idgv.value)
            }
            arr.push(obj)
        }
         $.ajax({
            type: 'post',
             headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
            url: '/saveSchedule',
            data: {
                data:arr
            },
            success: function (ret) {
              if(ret){
                  alert('Thêm dữ liệu thành công')
              }
            }
          });
    }
  </script>
</body>

</html>
