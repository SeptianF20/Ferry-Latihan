// function warna(pilihan)
// {
//     alert("Anda Memilih Warna " + pilihan);
//     document.bgColor=pilihan;
// }

// function g1(){
//     document.f.imgfan.src="2.jpg"
// }
// function g2(){
//     document.f.imgfan.src="1.jpg"
// }

//onSubmit

//search Google
function cari()
{
    var kata = document.formcari.keyword.value;
    var hasil ="https://www.google.com/search?q=" + kata
    window.open(hasil, 'google', config='height=500,width=750 scrollbars=yes')
}