$(document).ready(function(){
    $('#send').click(function(){
        // swal('title','text','success')
    console.log("form_1");
    var fn = $('#num').val();
    var ln = $('#fname').val();
    var phone = $('#msname').val();
    var comment = $('#departments').val();
    // var comment = $('#departments').val();
    // var comment = $('#departments').val();
    // var comment = $('#departments').val();
    // console.log(fn+ln+phone+comment);
    if(fn !=="" && ln !=="" &&phone!==""&&comment!==""){
    swal({
        title: 'ยืนยันการทำรายการ?',
        text: "กด OK เพื่อยืนยัน..",
        type: 'question',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'OK',
        cancelButtonText: 'ยกเลิก'
      }).then((result) => {
        if (result.value) {
            $('#yourname').html(fn);
             $('#yourlastname').html(ln);
            $('#yourphone').html(phone);
            $('#yourcomment').html(comment);
            $('#result').show();
            swal(
            'เรียบร้อย',
            'ทำรายการเรียบร้อยแล้ว',
            'success'
          )
        }
      })
    }else{
        swal('ข้อมูลไม่ครบ','กรุณาใส่ให้ครบถ้วน','error');
    }
    })
});