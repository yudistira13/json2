// let mahasiswa = {
//     nama : "yudistira yuda",
//     nrp : "123456789",
//     email : "yudistira.hominidae#gmail.com"
// }

// console.log(JSON.stringify(mahasiswa));

// json menggunakan vanila javascript
// Request(let xhr = new XMLHttp);
// xhr.onreadystatechange = function() {
//     if(xhr.readyState == 4 && xhr.status == 200) {
//         let mahasiswa = JSON.parse(this.responseText);
//         console.log(mahasiswa);
//     }
// }

// xhr.open('GET', 'coba.json', true);
// xhr.send();

$.getJSON('coba.json', function(data) {
    console.log(data);
})













