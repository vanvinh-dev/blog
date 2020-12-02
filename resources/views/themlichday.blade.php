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
    border: none
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
    background-image: linear-gradient(#90CAF9, #64B5F6) !important;
    color: #fff !important
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
        <div class="col-md-12 col-lg-9 col-xl-10">
            <div class="card border-0">
                <div class="row px-3 m-b-lg" style="margin-bottom:30px">
                    <div class="col-sm-10">
                        <div class="mb-2 mob">
                        <form autocomplete="off">
                            <div class="form-group"> <input type="text" id="dp1" class="datepicker mr-2" placeholder="Chọn ngày" name="date"><br> 
                            <!-- <button type="submit" class="btn btn-success">Submit</button>  -->
                            </div>
                        </form>
                    </div>
                    </div>
                </div>
                <div class="row px-3">
                    <div class="col-sm-12 list">
                        <div class="mb-2 row justify-content-between px-3"> 
                        <select class="mb-2 mob" id="select-Mon">
                               
                            </select>
                            <div class="mob"> <label class="text-grey mr-1">Từ</label> <input class="ml-1" type="time" name="from"> </div>
                            <div class="mob mb-2"> <label class="text-grey mr-4">Đến</label> <input class="ml-1" type="time" name="to"> </div>
                            <div class="mt-1 cancel fa fa-times text-danger"></div>
                        </div>
                        
                    </div>
                </div>
                <div class="row px-3 mt-3"> 
                    <div class="col-sm-10">
                        <div class="row px-3">
                            <div class="fa fa-plus-circle text-success add"></div>
                            <p class="text-success ml-3 add">Add</p>
                        </div>
                    </div>
                </div>
                <div class="row px-3 mt-3 justify-content-center"> <button class="btn exit mr-2">Cancel</button> <button class="btn btn-success ml-2">Done</button> </div>
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

    $(document).ready(function(){
    $.ajax({
        url:'/getmonhoc',
        type:'GET',
        success:function(ret){
            let monhoc = JSON.parse(ret)
            let select =''
            monhoc.forEach((item)=>{
                select += `<option value="${item.id}">${item.name}</option>
                `
            })
           $('#select-Mon').append(select)
            $('.add').click(function(){
                 console.log(select)
                $(".list").append(
                '<div class="mb-2 row justify-content-between px-3">' +
                    '<select class="mob mb-2">' +
                            select +
                        '</select>' +
                    '<div class="mob">' +
                        '<label class="text-grey mr-1">From</label>' +
                        '<input class="ml-1" type="time" name="from">' +
                        '</div>' +
                    '<div class="mob mb-2">' +
                        '<label class="text-grey mr-4">To</label>' +
                        '<input class="ml-1" type="time" name="to">' +
                        '</div>' +
                    '<div class="mt-1 cancel fa fa-times text-danger">' +
                        '</div>' +
                    '</div>');
                });
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
  </script>
</body>

</html>
