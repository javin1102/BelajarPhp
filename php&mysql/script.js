// var keyword = document.getElementById('keyword');
// var tombolCari = document.getElementById('searchBtn');
// var container = document.getElementById('container');

// keyword.addEventListener('keyup',function () {
//     var xhr = new XMLHttpRequest();

//     xhr.onreadystatechange = function (){
//         if(xhr.readyState === 4 && xhr.status === 200)
//         {
//             container.innerHTML = xhr.responseText;
//         }
//     }

//     xhr.open('GET','ajax/mahasiswa.php?keyword='+keyword.value,true);
//     xhr.send();

// })

//using jquery
$(document).ready(function(){
    $('#searchBtn').hide();
    $('#keyword').on('keyup' , ()=>{
        // $('#container').load('ajax/mahasiswa.php?keyword='+$('#keyword').val());
        
        $.get('ajax/mahasiswa.php?keyword='+ $('#keyword').val(), function(data){
            $('#container').html(data);
        })
    
    })
})